<?php

interface PaymentMethodInterface
{
    public function acceptPayment($receipt);
}

class CashPayment implements PaymentMethodInterface
{
    public function acceptPayment($receipt)
    {
        // some logic to accept payment by cash
    }
}

class Checkout
{
    public function begin($receipt, PaymentMethodInterface $paymentMethod)
    {
        $paymentMethod->acceptPayment($receipt);
    }
}

$receipt = 'Some Receipt';

$checkout = new Checkout();

$checkout->begin($receipt, new CashPayment());