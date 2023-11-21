<?php

namespace app\library\models\implementations;

trait GeneralTagTrait
{
    public function getTags(int $id) {
        var_dump('Get Tags Trait');
    }
}

abstract class GeneralTag
{
    public function getTags(int $id) {
        var_dump('Get Tags Root');
    }
}

class Tag extends GeneralTag
{
    protected int $id;
    protected $tags = [];

    use GeneralTagTrait;
}

$tag = new Tag();
$tag->getTags(3);