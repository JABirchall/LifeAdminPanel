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
                'data'  => Players::find($this->request->getPost('uid', null, null)),
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

        $player->bankacc = $this->request->getPost('bank', null, $player->bankacc);
        $player->cash = $this->request->getPost('cash', null,$player->cash );
        $player->coplevel = $this->request->getPost('cop', null, $player->coplevel);
        $player->mediclevel = $this->request->getPost('medic', null, $player->mediclevel);
        $player->adminlevel = $this->request->getPost('admin', null, $player->adminlevel);
        $player->donorlevel = $this->request->getPost('donator', null, $player->donorlevel);
        $player->exp_total = $this->request->getPost('xp', null, $player->exp_total);
        $player->exp_level = $this->request->getPost('level',null, $player->exp_level);
        $player->exp_perkPoints = $this->request->getPost('points', null, $player->exp_perkPoints);
        $player->ganglevel = $this->request->getPost('gang', null, $player->ganglevel);
        $player->panelLevel = $this->request->getPost('panel', null, $player->panelLevel);
        $player->update();
        $player->refresh();

        $message = ($playerSnapshot["bankacc"] !== $player->bankacc) ? sprintf("Players Bank Account changed from %d to %d | ", $playerSnapshot["bankacc"], $player->bankacc) :'';
        $message .= ($playerSnapshot["cash"] !== $player->cash) ? sprintf("Players Cash changed from %d to %d | ", $playerSnapshot["cash"], $player->cash) :'';
        $message .= ($playerSnapshot["coplevel"] !== $player->coplevel) ? sprintf("Players Cop Level Changed from %d to %d | ", $playerSnapshot["coplevel"], $player->coplevel) :'';
        $message .= ($playerSnapshot["mediclevel"] !== $player->mediclevel) ? sprintf("Players Medic Level Changed from %d to %d | ", $playerSnapshot["mediclevel"], $player->mediclevel) :'';
        $message .= ($playerSnapshot["adminlevel"] !== $player->adminlevel) ? sprintf("Players Admin Level Changed from %d to %d | ", $playerSnapshot["adminlevel"], $player->adminlevel) :'';
        $message .= ($playerSnapshot["donorlevel"] !== $player->donorlevel) ? sprintf("Players Donator Level Changed from %d to %d | ", $playerSnapshot["donorlevel"], $player->donorlevel) : '';
        $message .= ($playerSnapshot["ganglevel"] !== $player->ganglevel) ? sprintf("Players Gang Level Changed from %d to %d | ", $playerSnapshot["ganglevel"], $player->ganglevel) : '';
        $message .= ($playerSnapshot["exp_level"] !== $player->exp_level) ? sprintf("Players EXP Level changed from %d to %d | ", $playerSnapshot["exp_level"], $player->exp_level) : '';
        $message .= ($playerSnapshot["exp_perkPoints"] !== $player->exp_perkPoints) ? sprintf("Players Perk Points changed from %d to %d | ", $playerSnapshot["exp_perkPoints"], $player->exp_perkPoints) : '';
        $message .= ($playerSnapshot["exp_total"] !== $player->exp_total) ? sprintf("Players Total EXP changed from %d to %d", $playerSnapshot["exp_total"], $player->exp_total) : '';

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

