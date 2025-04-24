<?php

namespace App\Services\PaymentGateway\Classes;

use App\Services\PaymentGateway\Interfaces\PaymentGatewayInterface;


class StripePaymentGateway implements PaymentGatewayInterface
{
    public function processPayment($amount)
    {
        // Stripe payment logic
        return "Processed Stripe payment of $$amount";
    }
}
