<?php

abstract class Payment
{
    public function pay()
    {
        $this->processData()->getConfirmation()->success();
    }

    abstract protected function processData();
    abstract protected function getConfirmation();
    abstract protected function success();
}


class WalletPayment extends Payment
{
    public function processData()
    {
        echo "Process Wallet Payment Data\n";
        return $this;
    }

    public function getConfirmation()
    {
        echo "Get Wallet Payment Confirmation\n";
        return $this;
    }

    public function success()
    {
        echo "Wallet Payment Success\n";
        return $this;
    }
}

class StripePayment extends Payment
{
    public function processData()
    {
        echo "Process Stripe Payment Data\n";
        return $this;
    }

    public function getConfirmation()
    {
        echo "Get Stripe Payment Confirmation\n";
        return $this;
    }

    public function success()
    {
        echo "Stripe Payment Success\n";
        return $this;
    }
}

class PaymentGatewayController
{
    public function processPayment(Payment $paymentMethod)
    {
        return $paymentMethod->pay();
    }
}

(new PaymentGatewayController)->processPayment(new WalletPayment());
