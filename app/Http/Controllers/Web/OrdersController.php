<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PaymentMethods;
use App\Services\PaymentGateway\Classes\PaymentGatewayFactory;

class OrdersController extends Controller
{
    public function add()
    {
        $paymentMethods = PaymentMethods::pluck('title');
        return view('crm.orders.add', compact('paymentMethods'));
    }

    public function create(Request $request)
    {
        $amount = $request->price;
        $gatewayType = $request->payment_methods;
        $gateway = PaymentGatewayFactory::create($gatewayType);
        $result = $gateway->processPayment($amount);
        return view('crm.orders.checkout', ['result' => $result]);
    }
}
