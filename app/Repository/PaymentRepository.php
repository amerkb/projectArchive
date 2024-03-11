<?php

namespace App\Repository;

use App\Http\Resources\PaymenttResource;
use App\Interfaces\PaymentInterface;
use App\Models\Payment;

class PaymentRepository extends BaseRepositoryImplementation implements PaymentInterface
{
    public function model()
    {
        return Payment::class;
    }

    public function getFilterItems($filter)
    {
        // TODO: Implement getFilterItems() method.
    }

    public function createPayment(array $dataPayment)
    {
        $payment = $this->create($dataPayment);

        return PaymenttResource::make($payment);
    }

    public function updatePayment(array $dataPayment, Payment $payment)
    {
        $payment = $this->updateById($payment->id, $dataPayment);

        return PaymenttResource::make($payment);
    }

    public function deletePayment(Payment $payment)
    {
        $this->deleteById($payment->id);

        return response()->json(['message' => 'delete successfully']);
    }
}
