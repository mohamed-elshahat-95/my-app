<?php

namespace App\Services\PaymentGateway\Interfaces;

interface PaymentGatewayInterface
{
    public function processPayment($amount);
}
