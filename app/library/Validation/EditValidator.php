<?php

namespace App\Library\Validation;

use Phalcon\Validation\Validator\Digit;
use Phalcon\Validation\Validator\PresenceOf;

class EditValidator extends BaseValidator
{

    public function initialize()
    {
        $this->add('bank', new PresenceOf([
            'message' => 'Player bank can not be empty or null'
        ]));

        $this->add('bank', new Digit([
            'message' => 'Bank account must be numerical'
        ]));

        $this->add('cash', new PresenceOf([
            'message' => 'Player cash can not be empty or null'
        ]));

        $this->add('cash', new Digit([
            'message' => 'Cash account must be numerical'
        ]));

        $this->add('cop', new PresenceOf([
            'message' => 'Player cop level can not be empty or null'
        ]));

        $this->add('cop', new Digit([
            'message' => 'Player cop level invalid'
        ]));

        $this->add('medic', new PresenceOf([
            'message' => 'Player medic level can not be empty or null'
        ]));

        $this->add('medic', new Digit([
            'message' => 'Player medic level invalid'
        ]));

        $this->add('donator', new PresenceOf([
            'message' => 'Player donator level can not be empty or null'
        ]));

        $this->add('donator', new Digit([
            'message' => 'Player donator level invalid'
        ]));

        $this->add('admin', new PresenceOf([
            'message' => 'Player admin level can not be empty or null'
        ]));

        $this->add('admin', new Digit([
            'message' => 'Player admin level invalid'
        ]));

        $this->add('xp', new PresenceOf([
            'message' => 'Player experience can not be empty or null'
        ]));

        $this->add('xp', new Digit([
            'message' => 'Player experience invalid'
        ]));

        $this->add('level', new PresenceOf([
            'message' => 'Player experiance level can not be empty or null'
        ]));

        $this->add('level', new Digit([
            'message' => 'Player experiance level invalid'
        ]));

        $this->add('points', new PresenceOf([
            'message' => 'Player points can not be empty or null'
        ]));

        $this->add('points', new Digit([
            'message' => 'Player points invalid'
        ]));
    }
}
