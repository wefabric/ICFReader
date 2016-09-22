<?php

namespace ICFReader\RecordType;

class FR20 extends AbstractRecordType
{
    protected $type = 'FR20';

    protected $key = 'product_surcharge';

    protected $title = 'Product surcharge';

    protected $fields = [
        1 => [
            'key' => 'number',
            'name' => 'Number',
            'format' => 'integer'
        ],
        2 => [
            'key' => 'type',
            'name' => 'Type'
        ],
        3 => [
            'key' => 'amount',
            'name' => 'Price',
            'format' => 'currency'
        ],
        4 => [
            'key' => 'tax_rate',
            'name' => 'Tax rate'
        ],
        5 => [
            'key' => 'tax_percentage',
            'name' => 'Tax percentage',
            'format' => 'currency'
        ],
    ];

    
}