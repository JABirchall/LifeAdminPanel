<?php

class IndexController extends ControllerBase
{
    public function initialize()
    {
        return parent::initialize();
    }

    public function indexAction($id = null)
    {
        $this->view->pick('dashboard');
        $this->view->title = "Homepage";
        $this->view->players = Players::count();
        $this->view->eco = number_format(Players::sum(['column' => 'bankacc']), 2);
        $this->view->vehicles = Vehicles::count();
        $this->view->houses = Houses::count();


        if ($id === null && !$this->session->has('steamID')) {
            return $this->response->redirect("/login");
        }

        if ($id === null) {
            $id = $this->session->steamID;
        }
    }
}

