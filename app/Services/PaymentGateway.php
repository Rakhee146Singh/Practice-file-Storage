<?php

namespace App\Services;

class PaymentGateway
{
    protected $secretkey;
    public function __construct(string $secretkey)
    {
        $this->secretkey = $secretkey;
    }
    public function execute()
    {
        return "Payment Gateway";
    }
}
