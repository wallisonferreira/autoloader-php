<?php

namespace app\library\models\implementations;

class GFG
{
    public function __call($member, $arguments) {
        echo 'member: '.$member;
        echo '<br/><br/>';
        echo 'arguments: '; var_dump ($arguments);
        echo '<br/><br/>';
        echo 'method: '; var_dump ($member);

        echo '<br/><br/>';
        echo var_export($this);
        
        $numberOfArguments = count($arguments);

        if (method_exists($this, $function = $member.$numberOfArguments)) {
            call_user_func_array( array($this, $function), $arguments );
        }
    }

    private function multiply($argument1) {
        echo $argument1;
    }

    private function multiply2($argument1, $argument2) {
        echo $argument1 * $argument2;
    }
}

$class = new GFG;

// echo '<br/><br/>';
// $class->multiply(4);

echo '<br/><br/>';
$class->multiply(5, 7);