<?php

namespace Sunnysideup\PaymentDirectcredit;

use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\HeaderField;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\ORM\DataExtension;

class EcommerceConfigExtension extends DataExtension
{
    private static $db = [
        'DirectCreditPaymentAfterMessage' => 'HTMLText',
    ];

    public function updateCMSFields(FieldList $fields): void
    {
        $fields->addFieldsToTab(
            'Root.Payments',
            [
                HeaderField::create('DirectCreditPaymentHeader', 'Direct Credit Payment'),
                HTMLEditorField::create('DirectCreditPaymentAfterMessage', 'After-payment message')
                    ->setDescription('Shown after checkout for direct credit payments. Overrides the module default when set.'),
            ]
        );
    }
}
