<?php

class IndexController extends ControllerBase
{
    public function indexAction()
    {
       // echo (new \Phalcon\Debug\Dump())->variables($this->di);
        $this->view->pick('layout');
        $this->view->title = "Dashboard from ". __CLASS__."::".__FUNCTION__;
    }
}

