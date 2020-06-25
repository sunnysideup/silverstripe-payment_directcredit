2020-06-25 03:39

# running php upgrade upgrade see: https://github.com/silverstripe/silverstripe-upgrader
cd /var/www/upgrades/payment_directcredit
php /var/www/ss3/upgrader/vendor/silverstripe/upgrader/bin/upgrade-code upgrade /var/www/upgrades/payment_directcredit/payment_directcredit  --root-dir=/var/www/upgrades/payment_directcredit --write -vvv
Writing changes for 6 files
Running upgrades on "/var/www/upgrades/payment_directcredit/payment_directcredit"
[2020-06-25 15:39:09] Applying RenameClasses to _config.php...
[2020-06-25 15:39:09] Applying ClassToTraitRule to _config.php...
[2020-06-25 15:39:09] Applying RenameClasses to PaymentDirectcreditTest.php...
[2020-06-25 15:39:09] Applying ClassToTraitRule to PaymentDirectcreditTest.php...
[2020-06-25 15:39:09] Applying RenameClasses to DirectCreditPayment_ViaCheque.php...
[2020-06-25 15:39:09] Applying ClassToTraitRule to DirectCreditPayment_ViaCheque.php...
[2020-06-25 15:39:09] Applying RenameClasses to DirectCreditPayment_TESTSUCCESS.php...
[2020-06-25 15:39:09] Applying ClassToTraitRule to DirectCreditPayment_TESTSUCCESS.php...
[2020-06-25 15:39:09] Applying RenameClasses to DirectCreditPayment_ViaCreditCart.php...
[2020-06-25 15:39:09] Applying ClassToTraitRule to DirectCreditPayment_ViaCreditCart.php...
[2020-06-25 15:39:09] Applying RenameClasses to DirectCreditPayment_TESTFAILURE.php...
[2020-06-25 15:39:09] Applying ClassToTraitRule to DirectCreditPayment_TESTFAILURE.php...
[2020-06-25 15:39:09] Applying RenameClasses to DirectCreditPayment.php...
[2020-06-25 15:39:09] Applying ClassToTraitRule to DirectCreditPayment.php...
modified:	tests/PaymentDirectcreditTest.php
@@ -1,4 +1,6 @@
 <?php
+
+use SilverStripe\Dev\SapphireTest;

 class PaymentDirectcreditTest extends SapphireTest
 {

modified:	src/DirectCreditPayment_ViaCheque.php
@@ -2,12 +2,20 @@

 namespace Sunnysideup\PaymentDirectcredit;

-use EcommercePayment;
-use Config;
-use EcommercePaymentSuccess;
-use FieldList;
-use LiteralField;
-use HiddenField;
+
+
+
+
+
+
+use SilverStripe\Core\Config\Config;
+use Sunnysideup\PaymentDirectcredit\DirectCreditPayment_ViaCheque;
+use Sunnysideup\Ecommerce\Money\Payment\PaymentResults\EcommercePaymentSuccess;
+use SilverStripe\Forms\LiteralField;
+use SilverStripe\Forms\HiddenField;
+use SilverStripe\Forms\FieldList;
+use Sunnysideup\Ecommerce\Model\Money\EcommercePayment;
+


 class DirectCreditPayment_ViaCheque extends EcommercePayment
@@ -36,8 +44,8 @@
      */
     public function processPayment($data, $form)
     {
-        $this->Status = Config::inst()->get("DirectCreditPayment_ViaCheque", "default_status");
-        $this->Message = Config::inst()->get("DirectCreditPayment_ViaCheque", "after_payment_message");
+        $this->Status = Config::inst()->get(DirectCreditPayment_ViaCheque::class, "default_status");
+        $this->Message = Config::inst()->get(DirectCreditPayment_ViaCheque::class, "after_payment_message");
         $this->write();
         return EcommercePaymentSuccess::create();
     }
@@ -54,7 +62,7 @@
   * EXP: Check if the class name can still be used as such
   * ### @@@@ STOP REPLACEMENT @@@@ ###
   */
-            new LiteralField($this->ClassName.'_BeforeMessage', '<div id="'.$this->ClassName.'_BeforeMessage">' . Config::inst()->get("DirectCreditPayment_ViaCheque", "before_payment_message") . '</div>'),
+            new LiteralField($this->ClassName.'_BeforeMessage', '<div id="'.$this->ClassName.'_BeforeMessage">' . Config::inst()->get(DirectCreditPayment_ViaCheque::class, "before_payment_message") . '</div>'),

 /**
   * ### @@@@ START REPLACEMENT @@@@ ###

modified:	src/DirectCreditPayment_TESTSUCCESS.php
@@ -2,12 +2,20 @@

 namespace Sunnysideup\PaymentDirectcredit;

-use EcommercePayment;
-use Config;
-use EcommercePaymentSuccess;
-use FieldList;
-use LiteralField;
-use HiddenField;
+
+
+
+
+
+
+use SilverStripe\Core\Config\Config;
+use Sunnysideup\PaymentDirectcredit\DirectCreditPayment_TESTSUCCESS;
+use Sunnysideup\Ecommerce\Money\Payment\PaymentResults\EcommercePaymentSuccess;
+use SilverStripe\Forms\LiteralField;
+use SilverStripe\Forms\HiddenField;
+use SilverStripe\Forms\FieldList;
+use Sunnysideup\Ecommerce\Model\Money\EcommercePayment;
+


 class DirectCreditPayment_TESTSUCCESS extends EcommercePayment
@@ -36,8 +44,8 @@
      */
     public function processPayment($data, $form)
     {
-        $this->Status = Config::inst()->get("DirectCreditPayment_TESTSUCCESS", "default_status");
-        $this->Message = Config::inst()->get("DirectCreditPayment_TESTSUCCESS", "after_payment_message");
+        $this->Status = Config::inst()->get(DirectCreditPayment_TESTSUCCESS::class, "default_status");
+        $this->Message = Config::inst()->get(DirectCreditPayment_TESTSUCCESS::class, "after_payment_message");
         $this->write();
         return EcommercePaymentSuccess::create();
     }
@@ -54,7 +62,7 @@
   * EXP: Check if the class name can still be used as such
   * ### @@@@ STOP REPLACEMENT @@@@ ###
   */
-            new LiteralField($this->ClassName.'_BeforeMessage', '<div id="'.$this->ClassName.'_BeforeMessage">' . Config::inst()->get("DirectCreditPayment_TESTSUCCESS", "before_payment_message") . '</div>'),
+            new LiteralField($this->ClassName.'_BeforeMessage', '<div id="'.$this->ClassName.'_BeforeMessage">' . Config::inst()->get(DirectCreditPayment_TESTSUCCESS::class, "before_payment_message") . '</div>'),

 /**
   * ### @@@@ START REPLACEMENT @@@@ ###

modified:	src/DirectCreditPayment_ViaCreditCart.php
@@ -2,12 +2,20 @@

 namespace Sunnysideup\PaymentDirectcredit;

-use EcommercePayment;
-use Config;
-use EcommercePaymentSuccess;
-use FieldList;
-use LiteralField;
-use HiddenField;
+
+
+
+
+
+
+use SilverStripe\Core\Config\Config;
+use Sunnysideup\PaymentDirectcredit\DirectCreditPayment_ViaCreditCart;
+use Sunnysideup\Ecommerce\Money\Payment\PaymentResults\EcommercePaymentSuccess;
+use SilverStripe\Forms\LiteralField;
+use SilverStripe\Forms\HiddenField;
+use SilverStripe\Forms\FieldList;
+use Sunnysideup\Ecommerce\Model\Money\EcommercePayment;
+


 class DirectCreditPayment_ViaCreditCart extends EcommercePayment
@@ -36,8 +44,8 @@
      */
     public function processPayment($data, $form)
     {
-        $this->Status = Config::inst()->get("DirectCreditPayment_ViaCreditCart", "default_status");
-        $this->Message = Config::inst()->get("DirectCreditPayment_ViaCreditCart", "after_payment_message");
+        $this->Status = Config::inst()->get(DirectCreditPayment_ViaCreditCart::class, "default_status");
+        $this->Message = Config::inst()->get(DirectCreditPayment_ViaCreditCart::class, "after_payment_message");
         $this->write();
         return EcommercePaymentSuccess::create();
     }
@@ -54,7 +62,7 @@
   * EXP: Check if the class name can still be used as such
   * ### @@@@ STOP REPLACEMENT @@@@ ###
   */
-            new LiteralField($this->ClassName.'_BeforeMessage', '<div id="'.$this->ClassName.'_BeforeMessage">' . Config::inst()->get("DirectCreditPayment_ViaCreditCart", "before_payment_message") . '</div>'),
+            new LiteralField($this->ClassName.'_BeforeMessage', '<div id="'.$this->ClassName.'_BeforeMessage">' . Config::inst()->get(DirectCreditPayment_ViaCreditCart::class, "before_payment_message") . '</div>'),

 /**
   * ### @@@@ START REPLACEMENT @@@@ ###

modified:	src/DirectCreditPayment_TESTFAILURE.php
@@ -2,12 +2,20 @@

 namespace Sunnysideup\PaymentDirectcredit;

-use EcommercePayment;
-use Config;
-use EcommercePaymentSuccess;
-use FieldList;
-use LiteralField;
-use HiddenField;
+
+
+
+
+
+
+use SilverStripe\Core\Config\Config;
+use Sunnysideup\PaymentDirectcredit\DirectCreditPayment_TESTFAILURE;
+use Sunnysideup\Ecommerce\Money\Payment\PaymentResults\EcommercePaymentSuccess;
+use SilverStripe\Forms\LiteralField;
+use SilverStripe\Forms\HiddenField;
+use SilverStripe\Forms\FieldList;
+use Sunnysideup\Ecommerce\Model\Money\EcommercePayment;
+


 class DirectCreditPayment_TESTFAILURE extends EcommercePayment
@@ -36,8 +44,8 @@
      */
     public function processPayment($data, $form)
     {
-        $this->Status = Config::inst()->get("DirectCreditPayment_TESTFAILURE", "default_status");
-        $this->Message = Config::inst()->get("DirectCreditPayment_TESTFAILURE", "after_payment_message");
+        $this->Status = Config::inst()->get(DirectCreditPayment_TESTFAILURE::class, "default_status");
+        $this->Message = Config::inst()->get(DirectCreditPayment_TESTFAILURE::class, "after_payment_message");
         $this->write();
         return EcommercePaymentSuccess::create();
     }
@@ -54,7 +62,7 @@
   * EXP: Check if the class name can still be used as such
   * ### @@@@ STOP REPLACEMENT @@@@ ###
   */
-            new LiteralField($this->ClassName.'_BeforeMessage', '<div id="'.$this->ClassName.'_BeforeMessage">' . Config::inst()->get("DirectCreditPayment_TESTFAILURE", "before_payment_message") . '</div>'),
+            new LiteralField($this->ClassName.'_BeforeMessage', '<div id="'.$this->ClassName.'_BeforeMessage">' . Config::inst()->get(DirectCreditPayment_TESTFAILURE::class, "before_payment_message") . '</div>'),

 /**
   * ### @@@@ START REPLACEMENT @@@@ ###

modified:	src/DirectCreditPayment.php
@@ -2,12 +2,20 @@

 namespace Sunnysideup\PaymentDirectcredit;

-use EcommercePayment;
-use Config;
-use EcommercePaymentSuccess;
-use FieldList;
-use LiteralField;
-use HiddenField;
+
+
+
+
+
+
+use SilverStripe\Core\Config\Config;
+use Sunnysideup\PaymentDirectcredit\DirectCreditPayment;
+use Sunnysideup\Ecommerce\Money\Payment\PaymentResults\EcommercePaymentSuccess;
+use SilverStripe\Forms\LiteralField;
+use SilverStripe\Forms\HiddenField;
+use SilverStripe\Forms\FieldList;
+use Sunnysideup\Ecommerce\Model\Money\EcommercePayment;
+


 /**
@@ -42,8 +50,8 @@
      */
     public function processPayment($data, $form)
     {
-        $this->Status = Config::inst()->get("DirectCreditPayment", "default_status");
-        $this->Message = Config::inst()->get("DirectCreditPayment", "after_payment_message");
+        $this->Status = Config::inst()->get(DirectCreditPayment::class, "default_status");
+        $this->Message = Config::inst()->get(DirectCreditPayment::class, "after_payment_message");
         $this->write();
         return EcommercePaymentSuccess::create();
     }
@@ -60,7 +68,7 @@
   * EXP: Check if the class name can still be used as such
   * ### @@@@ STOP REPLACEMENT @@@@ ###
   */
-            new LiteralField($this->ClassName.'_BeforeMessage', '<div id="'.$this->ClassName.'_BeforeMessage">' . Config::inst()->get("DirectCreditPayment", "before_payment_message") . '</div>'),
+            new LiteralField($this->ClassName.'_BeforeMessage', '<div id="'.$this->ClassName.'_BeforeMessage">' . Config::inst()->get(DirectCreditPayment::class, "before_payment_message") . '</div>'),

 /**
   * ### @@@@ START REPLACEMENT @@@@ ###

Writing changes for 6 files
✔✔✔