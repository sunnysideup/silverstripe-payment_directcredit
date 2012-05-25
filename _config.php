<?php
/**
 * @author nicolaas [at] www.sunnysideup.co.nz
**/


//copy the lines between the START AND END line to your /mysite/_config.php file and choose the right settings
//===================---------------- START payment_directcredit MODULE ----------------===================
//MUST ADD - you may also add other methods
//Payment::set_supported_methods(array('DirectCreditPayment' => 'Direct Credit Payment'));

//MAY ADD
//DirectCreditPayment::set_before_payment_message("we will provide you with bank details");
//DirectCreditPayment::set_after_payment_message("your bank account here");

//DirectCreditPayment_ViaCreditCart::set_before_payment_message("you will need to contact us with your credit card details");
//DirectCreditPayment_ViaCreditCart::set_after_payment_message("please contact us here .... to pay by credit card");

//DirectCreditPayment_ViaCheque::set_before_payment_message("we will provide cheque details");
//DirectCreditPayment_ViaCheque::set_after_payment_message("please make out the cheque to ....");
//===================---------------- END payment_directcredit  MODULE ----------------===================
