<?php

namespace App\Services\PaymentGateway\Classes;

use App\Services\PaymentGateway\Interfaces\PaymentGatewayInterface;


class PayPalPaymentGateway implements PaymentGatewayInterface
{
    public function processPayment($amount)
    {
        // PayPal payment logic
        return "Processed PayPal payment of $$amount";
    }
}
