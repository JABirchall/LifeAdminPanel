<?php

use Phalcon\Paginator\Adapter\Model as PaginatorModel;

class AdminController extends ControllerBase
{
    public function indexAction()
    {
        return "Place holder for the 'admin' section";
    }

    public function viewlogAction()
    {

        $this->view->pick('logs');
        $this->view->title = "Staff Logs";
        $this->request->getQuery('page', 'int');
        if (isset($_GET['page'])) {
            $currentPage = (int) $_GET['page'];
        } else {
            $currentPage = 1;
        }
        $PanelLogs = panellogs::find(['order' => 'id DESC']);

        $paginator = new PaginatorModel(
            [
                'data'  => $PanelLogs,
                'limit' => 50,
                'page'  => $currentPage,
            ]
        );
        $page = $paginator->getPaginate();
        $this->view->setVar('logs', $page);
    }

    public function complogsAction()
    {
        $this->view->pick('clogs');
        $this->view->title = "Compensation Logs";
        $this->request->getQuery('page', 'int');
        if (isset($_GET['page'])) {
            $currentPage = (int) $_GET['page'];
        } else {
            $currentPage = 1;
        }
        $CompLogs = complogs::find();

        $paginator = new PaginatorModel(
            [
                'data'  => $CompLogs,
                'limit' => 50,
                'page'  => $currentPage,
            ]
        );
        $page = $paginator->getPaginate();
        $this->view->setVar('clogs', $page);
    }
}