<?php

namespace App\Services\PaymentGateway\Classes;

use App\Services\PaymentGateway\Interfaces\PaymentGatewayInterface;

class PaymentGatewayFactory
{
    public static function create($gatewayType): PaymentGatewayInterface
    {
        switch ($gatewayType) {
            case 'Stripe':
                return new StripePaymentGateway();
            case 'PayPal':
                return new PayPalPaymentGateway();
            case 'Paymob':
                return new PaymobPaymentGateway();
            default:
                throw new \Exception("Payment gateway not supported.");
        }
    }
}