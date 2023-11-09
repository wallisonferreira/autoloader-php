<?php

namespace app\library;

interface PaymentInterface
{
    public function pay();
}

class PagSeguroPayment implements PaymentInterface
{
    public function pay()
    {
        var_dump('pay with pagseguro');
    }
}

class PaypalPayment implements PaymentInterface
{
    public function pay()
    {
        var_dump('pay with paypal');
    }
}

class GerenciaNetPayment implements PaymentInterface
{
    public function pay()
    {
        var_dump('pay with gerencianet');
    }
}

class Client
{
    public function pay(PaymentInterface $payment) // strategy
    {
        $payment->pay();        
    }
}

$client = new Client();
$client->pay(new PaypalPayment());

/**
 * Quando se tem uma família de classes que não se sabe qual irá se
 * utilizar em qualquer momento, usamo interface. E isso se chama
 * "Strategy". No exemplo acima, não sabemos exatamente qual interface
 * iremos utilizar: se é do paypal, pagseguro ou gerencia net.
 */