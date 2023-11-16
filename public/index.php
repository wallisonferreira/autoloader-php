<?php

use app\library\Client;
use app\library\database\Connection;
use app\library\File_Writer;
use app\library\Logger;
use app\library\LoggerDatabase;
use app\library\LoggerFile;
use app\library\models\Post;
use app\library\models\User;
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
 *
 * Todo método público de uma classe funciona como uma
 * interface. Mas todos os detalhes de implementação
 * da classe estarão expostos. A interface visa esconder
 * estes detalhes de implementação, delimitando quais
 * recursos o usuário pode utilizar de uma classe.
 * E para este caso implementamos estruturas de interfaces 
 * separadas.
 */
$logger = new Logger();
$logger->create(new LoggerFile());

/**
 * Transactions
 * 
 * Dentro de Transaction temos uma propriedade estática
 * chamada $conn, que pode ser inicializada e usada em
 * qualquer lugar do código onde se usa Transaction.
 * 
 * O valor em $conn, por ser estática, mesmo que a classe
 * Transaction não seja iniciada, ficará persistida.
 */

echo "<br/><br/>";
echo "<h2>Teste Transaction</h2>";

use app\library\database\Transaction;

try {
    // inicia a conexão
    Transaction::open();

    echo "<br/><br/>";
    echo "<h5>Posts</h5>";
    
    $post = new Post;
    echo json_encode($post->getPosts());
    $post->delete(4);  //user_id = 10
    $post->delete(11); //user_id = 10
    $post->delete(21); //user_id = 10
    $post->delete(31); //user_id = 10

    echo "<br/><br/>";
    echo "<h5>Users</h5>";

    $user = new User();
    echo json_encode($user->getUsers());
    $user->delete(10);

    Transaction::close();
    
} catch (\Throwable $th) {
    var_dump($th->getMessage());
    Transaction::rollback();
}

use app\library\abstracts\ClientePremium;
/**
 * Testa Polimorfismo
 */
$client = new ClientePremium;
echo $client->verConta();