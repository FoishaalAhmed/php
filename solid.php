<?php

interface PaymentProcessorInterface
{
    function pay();
}

interface VerifyPaymentProcessorInterface extends PaymentProcessorInterface
{
    function recurring();
}

class WalletPayment implements PaymentProcessorInterface
{
    public function pay()
    {
        return 'Wallet';
    }
}

class StripePayment implements VerifyPaymentProcessorInterface
{
    public function pay()
    {
        return 'Stripe';
    }

    public function recurring()
    {
        return 'recurring';
    }
}

class PayPalPayment implements PaymentProcessorInterface
{
    public function pay()
    {
        return 'PayPal';
    }
}

class GatewayController
{
    public function __construct(PaymentProcessorInterface $processor)
    {
        $result = $processor->pay();
        echo $result;
    }
}

// Example usage
new GatewayController(new PayPalPayment());
