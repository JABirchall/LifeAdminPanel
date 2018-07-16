<?php

namespace App\Library\Validation;

use Phalcon\Validation\Validator\Digit;
use Phalcon\Validation\Validator\PresenceOf;

class EditValidator extends BaseValidator
{

    public function initialize()
    {

        $this->add('bank', new Digit([
            'message' => 'Bank account must be numerical',
            'allowEmpty' => true,
        ]));

        $this->add('cash', new Digit([
            'message' => 'Cash account must be numerical',
            'allowEmpty' => true,
        ]));

        $this->add('cop', new Digit([
            'message' => 'Player cop level invalid',
            'allowEmpty' => true,
        ]));

        $this->add('medic', new Digit([
            'message' => 'Player medic level invalid',
            'allowEmpty' => true,
        ]));

        $this->add('donator', new Digit([
            'message' => 'Player donator level invalid',
            'allowEmpty' => true,
        ]));

        $this->add('admin', new Digit([
            'message' => 'Player admin level invalid',
            'allowEmpty' => true,
        ]));

        $this->add('xp', new Digit([
            'message' => 'Player experience invalid',
            'allowEmpty' => true,
        ]));

        $this->add('level', new Digit([
            'message' => 'Player experiance level invalid',
            'allowEmpty' => true,
        ]));

        $this->add('points', new Digit([
            'message' => 'Player points invalid',
            'allowEmpty' => true,
        ]));
    }
}
