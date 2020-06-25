<?php

namespace Sunnysideup\PaymentDirectcredit;







use SilverStripe\Core\Config\Config;
use Sunnysideup\PaymentDirectcredit\DirectCreditPayment_TESTSUCCESS;
use Sunnysideup\Ecommerce\Money\Payment\PaymentResults\EcommercePaymentSuccess;
use SilverStripe\Forms\LiteralField;
use SilverStripe\Forms\HiddenField;
use SilverStripe\Forms\FieldList;
use Sunnysideup\Ecommerce\Model\Money\EcommercePayment;



class DirectCreditPayment_TESTSUCCESS extends EcommercePayment
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
    private static $after_payment_message = "Payment is always successful";

    /**
     * Default Status for Payment
     * @var String
     */
    private static $default_status = "Success";

    /**
     * Process the DirectCredit payment method
     */
    public function processPayment($data, $form)
    {
        $this->Status = Config::inst()->get(DirectCreditPayment_TESTSUCCESS::class, "default_status");
        $this->Message = Config::inst()->get(DirectCreditPayment_TESTSUCCESS::class, "after_payment_message");
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
            new LiteralField($this->ClassName.'_BeforeMessage', '<div id="'.$this->ClassName.'_BeforeMessage">' . Config::inst()->get(DirectCreditPayment_TESTSUCCESS::class, "before_payment_message") . '</div>'),

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
