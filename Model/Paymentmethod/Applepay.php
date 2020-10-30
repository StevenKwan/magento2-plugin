<?php

namespace Paynl\Payment\Model\Paymentmethod;

/**
 * Class okkeApplepay
 * @package Paynl\Payment\Model\Paymentmethod
 */
class okkeApplepay extends PaymentMethod
{
    protected $_code = 'paynl_payment_applepay';

    protected function getDefaultPaymentOptionId()
    {
        return 2277;
    }
}