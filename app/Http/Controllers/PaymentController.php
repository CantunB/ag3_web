<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;

class PaymentController extends Controller
{
    private $environment;
    private $client;
    public function __constructor()
    {
        $paypalConfig = Config::get('paypal');

        $clientId = $paypalConfig['client_id'];
        $clientSecret = $paypalConfig['client_secret'];

        $this->environment = new SandboxEnvironment($clientId, $clientSecret);
        $this->client = new PayPalHttpClient($environment);

    }

    public function paypal()
    {
        # code...
    }
}
