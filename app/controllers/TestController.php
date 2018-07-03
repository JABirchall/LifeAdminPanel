<?php
use App\Library\Logger;

class TestController extends ControllerBase
{

    public function indexAction()
    {
        Logger::Log("George","tagKnife","Changed bank from 25,000 to 50,000 for shitting on his cat");
    }

}

