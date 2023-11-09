<?php

namespace app\library;

interface LoggerInterface {
    public function create();
    public function testeInterface();
}

class LoggerFile implements LoggerInterface
{
    private function teste()
    {
        
    }

    public function testePublic()
    {
        var_dump('create file logger');
    }
    public function create()
    {
        var_dump('create file logger');
    }

    public function testeInterface()
    {
        var_dump('create test interface');   
    }
}

class LoggerDatabase implements LoggerInterface
{
    private function teste()
    {
        
    }
    public function create()
    {
        var_dump('create database logger');
    }

    public function testeInterface()
    {
        var_dump('create test interface');   
    }
}

class Logger
{
    public function create(LoggerInterface $logger)
    {
        echo "<br/><br/>";
        echo "<h2>Create</h2>";
        $logger->create();
        echo "<br/><br/>";
        echo "<h2>Teste Interface</h2>";
        $logger->testeInterface();
    }
}