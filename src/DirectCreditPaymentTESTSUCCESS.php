<?php

namespace Sunnysideup\PaymentDirectcredit;

use SilverStripe\Core\Config\Config;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\Form;
use SilverStripe\Forms\HiddenField;
use SilverStripe\Forms\LiteralField;
use Sunnysideup\Ecommerce\Model\Money\EcommercePayment;
use Sunnysideup\Ecommerce\Model\Order;
use Sunnysideup\Ecommerce\Money\Payment\PaymentResults\EcommercePaymentSuccess;

class DirectCreditPaymentTESTSUCCESS extends EcommercePayment
{
    /**
     * Message shown before payment is made.
     *
     * @var string
     */
    private static $before_payment_message = 'This is for testing purposes only';

    /**
     * Message shown after payment is made.
     *
     * @var string
     */
    private static $after_payment_message = 'Payment is always successful';

    /**
     * Default Status for Payment.
     *
     * @var string
     */
    private static $default_status = 'Success';

    /**
     * Process the DirectCredit payment method.
     *
     * @param mixed $data
     */
    public function processPayment($data, Form $form)
    {
        $this->Status = Config::inst()->get(DirectCreditPaymentTESTSUCCESS::class, 'default_status');
        $this->Message = Config::inst()->get(DirectCreditPaymentTESTSUCCESS::class, 'after_payment_message');
        $this->write();

        return EcommercePaymentSuccess::create();
    }

    public function getPaymentFormFields($amount = 0, ?Order $order = null): FieldList
    {
        return new FieldList(
            new LiteralField($this->ClassName . '_BeforeMessage', '<div id="' . $this->ClassName . '_BeforeMessage">' . Config::inst()->get(DirectCreditPaymentTESTSUCCESS::class, 'before_payment_message') . '</div>'),
            new HiddenField($this->ClassName, $this->ClassName, 0)
        );
    }

    public function getPaymentFormRequirements(): array
    {
        return [];
    }
}
