<?php

namespace app\library\models;
use app\library\database\Transaction;

class Post
{
    public function getPosts()
    {
        $conn = Transaction::get();
        $prepare = $conn->prepare('select * from posts');
        $prepare->execute();
        return $prepare->fetchAll();
    }

    public function delete(int $id)
    {
        $conn = Transaction::get();
        $prepare = $conn->prepare('delete from posts where id = :id');
        return $prepare->execute(['id' => $id]);
    }
}