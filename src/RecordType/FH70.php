<?php

namespace ICFReader\RecordType;

class FH70 extends AbstractRecordType
{
    protected $type = 'FH70';

    protected $key = 'invoice_total';

    protected $title = 'Invoice total';

    protected $fields = [
        1 => [
            'key' => 'amount',
            'name' => 'Amount',
            'format' => 'currency'
        ],
        2 => [
            'key' => 'netto_amount',
            'name' => 'Netto amount',
            'format' => 'currency'
        ],
        3 => [
            'key' => 'basis_payment_discount',
            'name' => 'Basis payment discount',
            'format' => 'currency'
        ],
        4 => [
            'key' => 'cost_amount',
            'name' => 'Cost amount',
            'format' => 'currency'
        ],
        5 => [
            'key' => 'tax_amount',
            'name' => 'Tax amount',
            'format' => 'currency'
        ]
    ];

    
}