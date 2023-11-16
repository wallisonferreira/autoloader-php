<?php

namespace app\library\abstracts;

interface AtualizaContaInterface
{
    public function atualizaSaldo(float $valor);
}

interface VerificaSaldoInterface
{
    public function atualizaSaldo();
}

interface VerificaVencimentoInterface
{
    public function atualizaSaldo();
}

trait MetodosConta {
    public function atualizaSaldo(float $valor)
    {
        $this->saldo += $valor;
    }

    public function verificaSaldo()
    {
        // do something
    }

    public function verificaVencimento()
    {
        // do something
    }
}

class ContaEntradas implements 
    AtualizaContaInterface, 
    VerificaSaldoInterface, 
    VerificaVencimentoInterface
{
    use MetodosConta;
}

class Conta extends ContaEntradas
{
    private static float $saldo = 300;
    public int $id = 4;
}

$conta = new Conta();
$conta->atualizaSaldo(4);