<?php

namespace Iyzipay\Model\Mapper;

use Iyzipay\Model\Refund;

class RefundMapper extends IyzipayResourceMapper
{
    public static function create()
    {
        return new RefundMapper();
    }

    public function mapRefund(Refund $refund, $jsonResult)
    {
        parent::mapResource($refund, $jsonResult);

        if (isset($jsonResult->paymentId)) {
            $refund->setPaymentId($jsonResult->paymentId);
        }
        if (isset($jsonResult->paymentTransactionId)) {
            $refund->setPaymentTransactionId($jsonResult->paymentTransactionId);
        }
        if (isset($jsonResult->price)) {
            $refund->setPrice($jsonResult->price);
        }
        return $refund;
    }
}