<?php
use App\Library\Logger;

class LoggingController extends ControllerBase
{

    public function indexAction()
    {
        Logger::Log("Repentz","Thurston","He's a shit developer, needs to be removed #Repentz");
    }

}