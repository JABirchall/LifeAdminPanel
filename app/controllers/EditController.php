<?php

class EditController extends ControllerBase
{
    public function indexAction($id)
    {
        $this->view->pick('edit');
        $this->view->title = "Edit Players";
    }
}