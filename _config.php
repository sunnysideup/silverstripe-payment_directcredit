<?php
/**
 * @author nicolaas [at] www.sunnysideup.co.nz
**/


//copy the lines between the START AND END line to your /mysite/_config.php file and choose the right settings
//===================---------------- START payment_directcredit MODULE ----------------===================
//MUST ADD - you may also add other methods
/*
 *
Payment::set_supported_methods(
	array(
		'DirectCreditPayment' => 'Direct Credit Payment',
		'DirectCreditPayment_ViaCheque' => 'Direct Credit Payment',
		'DirectCreditPayment_ViaCreditCart' => 'Direct Credit Payment',
		'DirectCreditPayment_ViaCreditCart' => 'OffLine Credit Card',
		'DirectCreditPayment_TESTSUCCESS' => 'Test Successful Payment',
		'DirectCreditPayment_TESTFAILURE' => 'Test Failed Payment'
	)
);

*/

//MAY ADD
//DirectCreditPayment::set_before_payment_message("we will provide you with bank details");
//DirectCreditPayment::set_after_payment_message("your bank account here");
//DirectCreditPayment::set_default_status("Pending");

//DirectCreditPayment_ViaCreditCart::set_before_payment_message("you will need to contact us with your credit card details");
//DirectCreditPayment_ViaCreditCart::set_after_payment_message("please contact us here .... to pay by credit card");
//DirectCreditPayment_ViaCreditCart::set_default_status("Pending");

//DirectCreditPayment_ViaCheque::set_before_payment_message("we will provide cheque details");
//DirectCreditPayment_ViaCheque::set_after_payment_message("please make out the cheque to ....");
//DirectCreditPayment_ViaCheque::set_default_status("Pending");
//===================---------------- END payment_directcredit  MODULE ----------------===================
