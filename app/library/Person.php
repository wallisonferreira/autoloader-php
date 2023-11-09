<?php

namespace app\library;

interface PersonInterface {
    public function fly();
}

class Person implements PersonInterface
{
    public function walk()
    {
        var_dump('walking');
    }

    public function run()
    {
        var_dump('running');
    }

    public function fly()
    {
        var_dump('flying');
    }
}

class Client
{
    public function action(PersonInterface $person)
    {
        $person->fly();
    }
}