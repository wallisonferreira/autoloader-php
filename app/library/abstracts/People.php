<?php

namespace app\library\abstracts;

interface PersonalityA
{
    public function getName(string $name);
}

interface PersonalityB
{
    public function getName(int $id);
    public function getAge(int $id);
}

class People
{
    private $privateData = "Private Data";
    protected $protectedData = "Protected Data";
    // Força a classe extensora a implementar este método
    protected function getValue() {}

    public function getPrivateData() {
        return $this->privateData;
    }

    public function getProtectedData() {
        return $this->protectedData;
    }
    
    // método comum
    public function printOut() {
        echo $this->getValue() . "\n";
    }
}

class Client extends People implements PersonalityA, PersonalityB
{
    // implementação obrigatória
    public function getValue() :string {
        return "Classe Client";
    }

    public function getName(string $name) {
        return $name;
    }

    // public function getName(int $id) {
    //     return $id;
    // }

    public function getAge(int $id) {
        return $id;
    }

    // access extended class data
    public function getParentData() {
        return $this->protectedData;
    }
}

class Manager extends People
{
    // implementação obrigatória
    public function getValue() : string{
        return "Classe Manager";
    }
}

# ROOT CLASS
$people = new People();
$people->getProtectedData(); // Protected - Get by public function
$people->getPrivateData(); // Private - Get by public function

# SUB CLASS
$client = new Client();
$client->getParentData(); // Protected - Get by public function on subclass