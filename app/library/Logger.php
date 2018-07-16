<?php
namespace App\Library;

class Logger
{
    public static function Log($admin, $user, $action)
    {
        $log = new \PanelLogs();
        $log->admin_uid = $admin;
        $log->user_uid = $user;
        $log->action = $action;
        $log->datetime = \Carbon\Carbon::now()->toDateTimeString();
        if(!$log->create()) {
            echo $log->getMessages()[0];
        }
    }
}