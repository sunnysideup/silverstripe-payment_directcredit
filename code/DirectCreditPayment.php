<?php

/**
 * Payment object representing a DirectCredit payment.
 * @author Nicolaas [at] sunnysideup.co.nz
 * @package payment
 */
class DirectCreditPayment extends ChequePayment {

	protected static $custom_message_for_direct_credit = "";
		static function set_custom_message_for_direct_credit($v) {self::$custom_message_for_direct_credit = $v;}

	/**
	 * Process the DirectCredit payment method
	 */
	function processPayment($data, $form) {
		$this->Status = 'Pending';
		if(!self::$custom_message_for_direct_credit) {
			$page = DataObject::get_one("CheckoutPage");
			if($page) {
				self::$custom_message_for_direct_credit = $page->ChequeMessage;
			}
		}
		$this->Message = self::$custom_message_for_direct_credit;
		$this->write();
		return new Payment_Success();
	}

	function getPaymentFormFields() {
		return new FieldSet(
			new HiddenField("DirectCredit", "DirectCredit", 0)
		);
	}

	function getPaymentFormRequirements() {
		return null;
	}

}

