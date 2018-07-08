<?php

use Phalcon\Paginator\Adapter\Model as PaginatorModel;

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

