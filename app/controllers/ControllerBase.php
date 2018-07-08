<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
    protected $dispatched = false;

    public $user = null;

    public function initialize()
    {
        if ($this->config->application->options->offline && !$this->dispatched) {
            $this->dispatched = true;
            return $this->dispatcher->forward(array(
                'controller' => 'Index',
                'action' => 'httpError',
                'params' => [$this->config->application->options->offlineMessage, 401, 'Unauthorized']
            ));
        }

        if (!$this->session->steamID) {
            $this->flashSession->error("You are not logged in!");
            return $this->response->redirect("/login");
        }

        if ($this->user === null) {
            $this->user = Players::findFirstByPid($this->session->steamID);
        }

        if (!$this->user->name) {
            $this->flashSession->error("Invalid account data!");
            return $this->response->redirect("/login");
        }

        if ($this->user->panelLevel === Players::UNAUTHORISED) {
            $this->flashSession->error("Account is not authorised!");
            return $this->response->redirect("/login");
        }

        $this->view->session = $this->session;
        $this->view->user = $this->user;
    }
}
