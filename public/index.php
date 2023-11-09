<?php

use app\library\Client;
use app\library\File_Writer;
use app\library\Logger;
use app\library\LoggerDatabase;
use app\library\LoggerFile;
use app\library\Person;

require '../vendor/autoload.php';

$fileWriter = new File_Writer();
echo $fileWriter->log();
echo $fileWriter->teste();

echo "<br/><br/>";

/**
 * Aula de interfaces
 * 
 */
$person = new Person();
$person->walk();

echo "<br/><br/>";

$client = new Client();
$client->action($person);

echo "<br/><br/>";

/**
 * Toda classe que implementa a interface LoggerInterface
 * pode ser passada por parâmetro no método onde o tipo
 * esperado é um LoggerInterface.
 * 
 * LoggerFile é uma classe concreta que implementa o
 * LoggerInterface.
 */
$logger = new Logger();
$logger->create(new LoggerFile());

/**
 * Todo método público de uma classe funciona como uma
 * interface. Mas todos os detalhes de implementação
 * da classe estarão expostos. A interface visa esconder
 * estes detalhes de implementação, delimitando quais
 * recursos o usuário pode utilizar de uma classe.
 * E para este caso implementamos estruturas de interfaces 
 * separadas.
 */