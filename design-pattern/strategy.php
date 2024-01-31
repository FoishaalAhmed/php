<?php

interface PaymentStrategy
{
    public function processData();
    public function getConfirmation();
    public function success();
}

class WalletPayment implements PaymentStrategy
{
    public function processData()
    {
        echo "Process Wallet Payment Data\n";
    }

    public function getConfirmation()
    {
        echo "Get Wallet Payment Confirmation\n";
    }

    public function success()
    {
        echo "Wallet Payment Success\n";
    }
}

class StripePayment implements PaymentStrategy
{
    public function processData()
    {
        echo "Process Stripe Payment Data\n";
    }

    public function getConfirmation()
    {
        echo "Get Stripe Payment Confirmation\n";
    }

    public function success()
    {
        echo "Stripe Payment Success\n";
    }
}

class PaymentGateway
{
    private $paymentMethod;

    public function __construct(PaymentStrategy $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }

    public function processPayment()
    {
        $this->paymentMethod->processData();
        $this->paymentMethod->getConfirmation();
        $this->paymentMethod->success();
    }
}

// Client code
(new PaymentGateway(new WalletPayment()))->processPayment();
