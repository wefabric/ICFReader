<?php

namespace ICFReader\RecordType;

class FH80 extends AbstractRecordType
{
    protected $type = 'FH80';

    protected $key = 'tax_subtotal';

    protected $title = 'Tax sub total';

    protected $fields = [
        1 => [
            'key' => 'rate',
            'name' => 'Rate'
        ],
        2 => [
            'key' => 'percentage',
            'name' => 'Percentage',
            'format' => 'currency'
            
        ],
        3 => [
            'key' => 'basis',
            'name' => 'Basis',
            'format' => 'currency'
        ],
        4 => [
            'key' => 'amount',
            'name' => 'Amount',
            'format' => 'currency'
        ]
    ];

    
}