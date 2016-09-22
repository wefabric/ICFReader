<?php

namespace ICFReader\RecordType;

class FH50 extends AbstractRecordType
{
    protected $type = 'FH50';

    protected $key = 'invoice_surcharge';

    protected $title = 'Invoice surcharge';

    protected $fields = [
        1 => [
            'key' => 'type',
            'name' => 'Type'
        ],
        2 => [
            'key' => 'amount',
            'name' => 'Amount',
            'format' => 'currency'
        ],
        3 => [
            'key' => 'tax_code',
            'name' => 'Tax code'
        ],
        4 => [
            'key' => 'tax_percentage',
            'name' => 'Tax percentage',
            'format' => 'currency'
        ]
    ];

}