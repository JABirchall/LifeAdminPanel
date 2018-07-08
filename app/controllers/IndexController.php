<?php

class IndexController extends ControllerBase
{
    public function initialize()
    {
        return parent::initialize();
    }

    public function indexAction()
    {
        $this->view->pick('dashboard');
        $this->view->title = "Homepage";
        $this->view->players = Players::count();
        $this->view->eco = number_format(Players::sum(['column' => 'bankacc']), 2);
        $this->view->vehicles = Vehicles::count();
        $this->view->houses = Houses::count();
    }
}

