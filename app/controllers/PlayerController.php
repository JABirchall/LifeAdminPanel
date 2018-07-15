<?php

use Phalcon\Paginator\Adapter\Model as PaginatorModel;
use App\Library\Logger;

class PlayerController extends ControllerBase
{
    public function indexAction($page = 1)
    {
        $this->view->pick('players');
        $this->view->title = "Edit Players";

        $paginator = new PaginatorModel(
            [
                'data'  => Players::find(),
                'limit' => 50,
                'page'  => $page,
            ]
        );
        $players = $paginator->getPaginate();
        $this->view->players = $players;
    }

    public function editAction($id)
    {
        $this->view->pick('edit');
        $this->view->title = "Edit Players";
        $this->view->player = Players::findFirstByPid($id);
    }

    public function doEditAction($id)
    {
        $validator = new \App\Library\Validation\EditValidator();
        $validator->validate($this->request->getPost());

        $player = Players::findFirstByPid($id);
        $playerSnapshot = $player->getSnapshotData();


        if (!$player) {
            return $this->dispatcher->forward([
                'controller' => 'Index',
                'action' => 'httpError',
                'params' => ["No player found for ID: {$id} in our database."]
            ]);
        }

        if ($validator->failed()) {
            $this->view->pick('edit');
            $this->view->title = "Edit Players";
            $this->view->player = $player;
            $this->view->errors = $validator->getMessages();
            return;
        }
        $this->view->disable();

        $player->bankacc = $this->request->getPost('bank');
        $player->cash = $this->request->getPost('cash');
        $player->coplevel = $this->request->getPost('cop');
        $player->mediclevel = $this->request->getPost('medic');
        $player->adminlevel = $this->request->getPost('admin');
        $player->donorlevel = $this->request->getPost('donator');
        $player->exp_total = $this->request->getPost('xp');
        $player->exp_level = $this->request->getPost('level');
        $player->exp_perkPoints = $this->request->getPost('points');
        $player->ganglevel = $this->request->getPost('gang');
        $player->update();

        $message = '';
        echo (new \Phalcon\Debug\Dump())->variables($playerSnapshot["bankacc"], $player->bankacc, ($playerSnapshot["bankacc"] !== $player->bankacc));
        exit;

        if($playerSnapshot["bankacc"] !== $player->bankacc) {
            $message .= sprintf("Edited money %d to %d", $playerSnapshot["bankacc"], $player->bankacc);
        }

        Logger::Log($this->session->player->pid, $player->pid, $message);

        return $this->response->redirect('/players/list/1');
    }


    public function vehiclesAction($page = 1)
    {
        $this->view->pick('vehicles');
        $this->view->title = "Edit Vehicles";

        $paginator = new PaginatorModel(
            [
                'data'  => Vehicles::find(),
                'limit' => 50,
                'page'  => $page,
            ]
        );
        $vehicles = $paginator->getPaginate();
        $this->view->vehicles = $vehicles;
    }

    public function housesAction($page = 1)
    {
        $this->view->pick('houses');
        $this->view->title = "Edit Houses";

        $paginator = new PaginatorModel(
            [
                'data'  => Houses::find(),
                'limit' => 50,
                'page'  => $page,
            ]
        );
        $Houses = $paginator->getPaginate();
        $this->view->houses = $Houses;
    }

    public function containerAction($page = 1)
    {
        $this->view->pick('containers');
        $this->view->title = "Edit Containers";

        $paginator = new PaginatorModel(
            [
                'data'  => Containers::find(),
                'limit' => 50,
                'page'  => $page,
            ]
        );
        $Containers = $paginator->getPaginate();
        $this->view->containers = $Containers;
    }
}

