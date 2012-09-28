<?php

/**
 * Payment object representing a DirectCredit payment.
 * @author Nicolaas [at] sunnysideup.co.nz
 * @package payment
 */
class DirectCreditPayment extends Payment {

	/**
	 * Message shown before payment is made
	 * @var String
	 */
	protected static $before_payment_message = "";
		static function set_before_payment_message($s) {self::$before_payment_message = $s;}
		static function get_before_payment_message() {return self::$before_payment_message;}

	/**
	 * Message shown after payment is made
	 * @var String
	 */
	protected static $after_payment_message = "";
		static function set_after_payment_message($s) {self::$after_payment_message = $s;}
		static function get_after_payment_message() {return self::$after_payment_message;}

	/**
	 * Default Status for Payment
	 * @var String
	 */
	protected static $default_status = "Pending";
		static function set_default_status($s) {self::$default_status = $s;}
		static function get_default_status() {return self::$default_status;}


	/**
	 * Process the DirectCredit payment method
	 */
	function processPayment($data, $form) {
		$this->Status = self::get_default_status();
		$this->Message = self::get_after_payment_message();
		$this->write();
		return new Payment_Success();
	}

	function getPaymentFormFields() {
		return new FieldSet(
			new LiteralField($this->ClassName.'_BeforeMessage', '<div id="'.$this->ClassName.'_BeforeMessage">' . self::get_before_payment_message() . '</div>'),
			new HiddenField($this->ClassName, $this->ClassName, 0)
		);
	}

	function getPaymentFormRequirements() {
		return null;
	}

}

class DirectCreditPayment_ViaCreditCart extends Payment {

	/**
	 * Message shown before payment is made
	 * @var String
	 */
	protected static $before_payment_message = "";
		static function set_before_payment_message($s) {self::$before_payment_message = $s;}
		static function get_before_payment_message() {return self::$before_payment_message;}

	/**
	 * Message shown after payment is made
	 * @var String
	 */
	protected static $after_payment_message = "";
		static function set_after_payment_message($s) {self::$after_payment_message = $s;}
		static function get_after_payment_message() {return self::$after_payment_message;}

	/**
	 * Default Status for Payment
	 * @var String
	 */
	protected static $default_status = "Pending";
		static function set_default_status($s) {self::$default_status = $s;}
		static function get_default_status() {return self::$default_status;}

	/**
	 * Process the DirectCredit payment method
	 */
	function processPayment($data, $form) {
		$this->Status = self::get_default_status();
		$this->Message = self::get_after_payment_message();
		$this->write();
		return new Payment_Success();
	}

	function getPaymentFormFields() {
		return new FieldSet(
			new LiteralField($this->ClassName.'_BeforeMessage', '<div id="'.$this->ClassName.'_BeforeMessage">' . self::get_before_payment_message() . '</div>'),
			new HiddenField($this->ClassName, $this->ClassName, 0)
		);
	}

	function getPaymentFormRequirements() {
		return null;
	}

}

class DirectCreditPayment_ViaCheque  extends Payment {

	/**
	 * Message shown before payment is made
	 * @var String
	 */
	protected static $before_payment_message = "";
		static function set_before_payment_message($s) {self::$before_payment_message = $s;}
		static function get_before_payment_message() {return self::$before_payment_message;}

	/**
	 * Message shown after payment is made
	 * @var String
	 */
	protected static $after_payment_message = "";
		static function set_after_payment_message($s) {self::$after_payment_message = $s;}
		static function get_after_payment_message() {return self::$after_payment_message;}

	/**
	 * Default Status for Payment
	 * @var String
	 */
	protected static $default_status = "Pending";
		static function set_default_status($s) {self::$default_status = $s;}
		static function get_default_status() {return self::$default_status;}

	/**
	 * Process the DirectCredit payment method
	 */
	function processPayment($data, $form) {
		$this->Status = self::get_default_status();
		$this->Message = self::get_after_payment_message();
		$this->write();
		return new Payment_Success();
	}

	function getPaymentFormFields() {
		return new FieldSet(
			new LiteralField($this->ClassName.'_BeforeMessage', '<div id="'.$this->ClassName.'_BeforeMessage">' . self::get_before_payment_message() . '</div>'),
			new HiddenField($this->ClassName, $this->ClassName, 0)
		);
	}

	function getPaymentFormRequirements() {
		return null;
	}

}

class DirectCreditPayment_TESTSUCCESS extends Payment {

	/**
	 * Message shown before payment is made
	 * @var String
	 */
	protected static $before_payment_message = "This is for testing purposes only";
		static function set_before_payment_message($s) {self::$before_payment_message = $s;}
		static function get_before_payment_message() {return self::$before_payment_message;}

	/**
	 * Message shown after payment is made
	 * @var String
	 */
	protected static $after_payment_message = "Payment is always successful";
		static function set_after_payment_message($s) {self::$after_payment_message = $s;}
		static function get_after_payment_message() {return self::$after_payment_message;}

	/**
	 * Default Status for Payment
	 * @var String
	 */
	protected static $default_status = "Success";
		static function set_default_status($s) {self::$default_status = $s;}
		static function get_default_status() {return self::$default_status;}

	/**
	 * Process the DirectCredit payment method
	 */
	function processPayment($data, $form) {
		$this->Status = self::get_default_status();
		$this->Message = self::get_after_payment_message();
		$this->write();
		return new Payment_Success();
	}

	function getPaymentFormFields() {
		return new FieldSet(
			new LiteralField($this->ClassName.'_BeforeMessage', '<div id="'.$this->ClassName.'_BeforeMessage">' . self::get_before_payment_message() . '</div>'),
			new HiddenField($this->ClassName, $this->ClassName, 0)
		);
	}

	function getPaymentFormRequirements() {
		return null;
	}

}


class DirectCreditPayment_TESTFAILURE extends Payment {

	/**
	 * Message shown before payment is made
	 * @var String
	 */
	protected static $before_payment_message = "This is for testing purposes only";
		static function set_before_payment_message($s) {self::$before_payment_message = $s;}
		static function get_before_payment_message() {return self::$before_payment_message;}

	/**
	 * Message shown after payment is made
	 * @var String
	 */
	protected static $after_payment_message = "Payment is always unsuccessful";
		static function set_after_payment_message($s) {self::$after_payment_message = $s;}
		static function get_after_payment_message() {return self::$after_payment_message;}

	/**
	 * Default Status for Payment
	 * @var String
	 */
	protected static $default_status = "Failure";
		static function set_default_status($s) {self::$default_status = $s;}
		static function get_default_status() {return self::$default_status;}

	/**
	 * Process the DirectCredit payment method
	 */
	function processPayment($data, $form) {
		$this->Status = self::get_default_status();
		$this->Message = self::get_after_payment_message();
		$this->write();
		return new Payment_Success();
	}

	function getPaymentFormFields() {
		return new FieldSet(
			new LiteralField($this->ClassName.'_BeforeMessage', '<div id="'.$this->ClassName.'_BeforeMessage">' . self::get_before_payment_message() . '</div>'),
			new HiddenField($this->ClassName, $this->ClassName, 0)
		);
	}

	function getPaymentFormRequirements() {
		return null;
	}

}
