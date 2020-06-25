<?php

namespace Sunnysideup\PaymentDirectcredit;

use EcommercePayment;
use Config;
use EcommercePaymentSuccess;
use FieldList;
use LiteralField;
use HiddenField;


class DirectCreditPayment_TESTFAILURE extends EcommercePayment
{

    /**
     * Message shown before payment is made
     * @var String
     */
    private static $before_payment_message = "This is for testing purposes only";

    /**
     * Message shown after payment is made
     * @var String
     */
    private static $after_payment_message = "Payment is always unsuccessful";

    /**
     * Default Status for Payment
     * @var String
     */
    private static $default_status = "Failure";

    /**
     * Process the DirectCredit payment method
     */
    public function processPayment($data, $form)
    {
        $this->Status = Config::inst()->get("DirectCreditPayment_TESTFAILURE", "default_status");
        $this->Message = Config::inst()->get("DirectCreditPayment_TESTFAILURE", "after_payment_message");
        $this->write();
        return EcommercePaymentSuccess::create();
    }

    public function getPaymentFormFields($amount = 0, $order = null)
    {
        return new FieldList(

/**
  * ### @@@@ START REPLACEMENT @@@@ ###
  * WHY: automated upgrade
  * OLD: $this->ClassName (case sensitive)
  * NEW: $this->ClassName (COMPLEX)
  * EXP: Check if the class name can still be used as such
  * ### @@@@ STOP REPLACEMENT @@@@ ###
  */
            new LiteralField($this->ClassName.'_BeforeMessage', '<div id="'.$this->ClassName.'_BeforeMessage">' . Config::inst()->get("DirectCreditPayment_TESTFAILURE", "before_payment_message") . '</div>'),

/**
  * ### @@@@ START REPLACEMENT @@@@ ###
  * WHY: automated upgrade
  * OLD: $this->ClassName (case sensitive)
  * NEW: $this->ClassName (COMPLEX)
  * EXP: Check if the class name can still be used as such
  * ### @@@@ STOP REPLACEMENT @@@@ ###
  */
            new HiddenField($this->ClassName, $this->ClassName, 0)
        );
    }

    public function getPaymentFormRequirements()
    {
        return null;
    }
}
