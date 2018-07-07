<?php

use Phalcon\Paginator\Adapter\Model as PaginatorModel;

class PlayerController extends ControllerBase
{
    public function indexAction()
    {
        $this->view->pick('players');
        $this->view->title = "Edit Players";
        $this->request->getQuery('page', 'int'); // GET
        if (isset($_GET['page'])) {
            $currentPage = (int) $_GET['page'];
        } else {
            $currentPage = 1;
        }
        $players = Players::find();

        $paginator = new PaginatorModel(
            [
                'data'  => $players,
                'limit' => 50,
                'page'  => $currentPage,
            ]
        );
        $page = $paginator->getPaginate();
        $this->view->setVar('players', $page);
    }

    public function vehiclesAction()
    {
        $this->view->pick('vehicles');
        $this->view->title = "Edit Vehicles";
        $this->request->getQuery('page', 'int'); // GET
        if (isset($_GET['page'])) {
            $currentPage = (int) $_GET['page'];
        } else {
            $currentPage = 1;
        }
        $vehicles = Vehicles::find();

        $paginator = new PaginatorModel(
            [
                'data'  => $vehicles,
                'limit' => 50,
                'page'  => $currentPage,
            ]
        );
        $page = $paginator->getPaginate();
        $this->view->setVar('vehicles', $page);
    }

    public function housesAction()
    {
        $this->view->pick('houses');
        $this->view->title = "Edit Houses";
        $this->request->getQuery('page', 'int'); // GET
        if (isset($_GET['page'])) {
            $currentPage = (int) $_GET['page'];
        } else {
            $currentPage = 1;
        }
        $Houses = Houses::find();

        $paginator = new PaginatorModel(
            [
                'data'  => $Houses,
                'limit' => 50,
                'page'  => $currentPage,
            ]
        );
        $page = $paginator->getPaginate();
        $this->view->setVar('houses', $page);
    }

    public function containerAction()
    {
        $this->view->pick('containers');
        $this->view->title = "View Containers";
        $this->request->getQuery('page', 'int'); // GET
        if (isset($_GET['page'])) {
            $currentPage = (int) $_GET['page'];
        } else {
            $currentPage = 1;
        }
        $Containers = Containers::find();

        $paginator = new PaginatorModel(
            [
                'data'  => $Containers,
                'limit' => 50,
                'page'  => $currentPage,
            ]
        );
        $page = $paginator->getPaginate();
        $this->view->setVar('containers', $page);
    }
}

