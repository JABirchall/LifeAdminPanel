<?php
use App\Library\Logger;

class LoggingController extends ControllerBase
{

    public function indexAction()
    {
        Logger::Log("test","test","test");
    }

}