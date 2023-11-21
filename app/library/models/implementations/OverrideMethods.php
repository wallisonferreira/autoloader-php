<?php

namespace app\library\models\implementations;

class GFG
{
    public function __call($member, $arguments) {
        $numberOfArguments = count($arguments);

        if (method_exists($this, $function = $member.$numberOfArguments)) {
            call_user_func_array( array($this, $function), $arguments );
        }
    }
}