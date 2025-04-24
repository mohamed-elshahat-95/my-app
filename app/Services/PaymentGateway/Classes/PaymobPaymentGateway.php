<?php

namespace App\Services\PaymentGateway\Classes;

use App\Services\PaymentGateway\Interfaces\PaymentGatewayInterface;


class PaymobPaymentGateway implements PaymentGatewayInterface
{
    public function processPayment($amount)
    {
        // Paymob payment logic
        return "Processed Paymob payment of $$amount";
    }
}
