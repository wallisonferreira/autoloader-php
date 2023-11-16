<?php

namespace app\library\abstracts;

class Cliente
{
    public function verConta()
    {
        return 'ver conta ';
    }

    public function atualizaConta()
    {
        var_dump('atualiza');
    }
}

class ClientePremium extends Cliente
{
    public function verConta()
    {
        return parent::verConta() . 'premium';
    }
}