<?php

namespace ICFReader\RecordType;

class FH60 extends AbstractRecordType
{
    protected $type = 'FH60';

    protected $key = 'invoice_discount';

    protected $title = 'Invoice discount';

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