<?php

namespace App\Library\Validation;

use Phalcon\Validation;

class BaseValidator extends Validation
{
    private $failed = false;

    public function afterValidation($data, $entity, $messages)
    {
        if ($messages->count() > 0) {
            $this->failed = true;
        }
    }

    public function failed()
    {
        return $this->failed;
    }
}
