<?php

class WipController extends ControllerBase
{
    public function indexAction()
    {
        $this->view->pick('wip');
    }
}