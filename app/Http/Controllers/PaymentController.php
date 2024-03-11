<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaymentRequest\CreatePaymentRequest;
use App\Http\Requests\PaymentRequest\UpdatePaymentRequest;
use App\Interfaces\PaymentInterface;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function __construct(private PaymentInterface $payment)
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePaymentRequest $request)
    {

        return $this->payment->createPayment($request->validated());

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaymentRequest $request, Payment $payment)
    {
        return $this->payment->updatePayment($request->validated(), $payment);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        return $this->payment->deletePayment($payment);
    }
}
