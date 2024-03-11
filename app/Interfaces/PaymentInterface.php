<?php

namespace App\Interfaces;

use App\Models\Payment;

interface PaymentInterface
{
    public function createPayment(array $dataPayment);

    public function updatePayment(array $dataPayment, Payment $payment);

    public function deletePayment(Payment $payment);
}
