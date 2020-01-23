<?php

/**
 * Payment object representing a DirectCredit payment.
 * @author Nicolaas [at] sunnysideup.co.nz
 * @package payment
 */
class DirectCreditPayment extends EcommercePayment
{

    /**
     * Message shown before payment is made
     * @var String
     */
    private static $before_payment_message = "";

    /**
     * Message shown after payment is made
     * @var String
     */
    private static $after_payment_message = "";

    /**
     * Default Status for Payment
     * @var String
     */
    private static $default_status = "Pending";


    /**
     * Process the DirectCredit payment method
     */
    public function processPayment($data, $form)
    {
        $this->Status = Config::inst()->get("DirectCreditPayment", "default_status");
        $this->Message = Config::inst()->get("DirectCreditPayment", "after_payment_message");
        $this->write();
        return EcommercePayment_Success::create();
    }

    public function getPaymentFormFields($amount = 0, $order = null)
    {
        return new FieldList(
            new LiteralField($this->ClassName.'_BeforeMessage', '<div id="'.$this->ClassName.'_BeforeMessage">' . Config::inst()->get("DirectCreditPayment", "before_payment_message") . '</div>'),
            new HiddenField($this->ClassName, $this->ClassName, 0)
        );
    }

    public function getPaymentFormRequirements()
    {
        return null;
    }
}

class DirectCreditPayment_ViaCreditCart extends EcommercePayment
{

    /**
     * Message shown before payment is made
     * @var String
     */
    private static $before_payment_message = "";

    /**
     * Message shown after payment is made
     * @var String
     */
    private static $after_payment_message = "";

    /**
     * Default Status for Payment
     * @var String
     */
    private static $default_status = "Pending";

    /**
     * Process the DirectCredit payment method
     */
    public function processPayment($data, $form)
    {
        $this->Status = Config::inst()->get("DirectCreditPayment_ViaCreditCart", "default_status");
        $this->Message = Config::inst()->get("DirectCreditPayment_ViaCreditCart", "after_payment_message");
        $this->write();
        return EcommercePayment_Success::create();
    }

    public function getPaymentFormFields($amount = 0, $order = null)
    {
        return new FieldList(
            new LiteralField($this->ClassName.'_BeforeMessage', '<div id="'.$this->ClassName.'_BeforeMessage">' . Config::inst()->get("DirectCreditPayment_ViaCreditCart", "before_payment_message") . '</div>'),
            new HiddenField($this->ClassName, $this->ClassName, 0)
        );
    }

    public function getPaymentFormRequirements()
    {
        return null;
    }
}

class DirectCreditPayment_ViaCheque extends EcommercePayment
{

    /**
     * Message shown before payment is made
     * @var String
     */
    private static $before_payment_message = "";

    /**
     * Message shown after payment is made
     * @var String
     */
    private static $after_payment_message = "";

    /**
     * Default Status for Payment
     * @var String
     */
    private static $default_status = "Pending";

    /**
     * Process the DirectCredit payment method
     */
    public function processPayment($data, $form)
    {
        $this->Status = Config::inst()->get("DirectCreditPayment_ViaCheque", "default_status");
        $this->Message = Config::inst()->get("DirectCreditPayment_ViaCheque", "after_payment_message");
        $this->write();
        return EcommercePayment_Success::create();
    }

    public function getPaymentFormFields($amount = 0, $order = null)
    {
        return new FieldList(
            new LiteralField($this->ClassName.'_BeforeMessage', '<div id="'.$this->ClassName.'_BeforeMessage">' . Config::inst()->get("DirectCreditPayment_ViaCheque", "before_payment_message") . '</div>'),
            new HiddenField($this->ClassName, $this->ClassName, 0)
        );
    }

    public function getPaymentFormRequirements()
    {
        return null;
    }
}

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
        $this->Status = Config::inst()->get("DirectCreditPayment_TESTSUCCESS", "default_status");
        $this->Message = Config::inst()->get("DirectCreditPayment_TESTSUCCESS", "after_payment_message");
        $this->write();
        return EcommercePayment_Success::create();
    }

    public function getPaymentFormFields($amount = 0, $order = null)
    {
        return new FieldList(
            new LiteralField($this->ClassName.'_BeforeMessage', '<div id="'.$this->ClassName.'_BeforeMessage">' . Config::inst()->get("DirectCreditPayment_TESTSUCCESS", "before_payment_message") . '</div>'),
            new HiddenField($this->ClassName, $this->ClassName, 0)
        );
    }

    public function getPaymentFormRequirements()
    {
        return null;
    }
}


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
        return EcommercePayment_Success::create();
    }

    public function getPaymentFormFields($amount = 0, $order = null)
    {
        return new FieldList(
            new LiteralField($this->ClassName.'_BeforeMessage', '<div id="'.$this->ClassName.'_BeforeMessage">' . Config::inst()->get("DirectCreditPayment_TESTFAILURE", "before_payment_message") . '</div>'),
            new HiddenField($this->ClassName, $this->ClassName, 0)
        );
    }

    public function getPaymentFormRequirements()
    {
        return null;
    }
}
