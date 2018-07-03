<?php
namespace App\Library;

use Phalcon\Debug\Dump;

class Logger
{
    public static function Log($admin, $user, $action)
    {
        $log = new \PanelLogs();
        $log->admin_uid = $admin;
        $log->user_uid = $user;
        $log->action = $action;
        if(!$log->create()) {
            echo $log->getMessages()[0];
        }
    }
}