<?php

namespace ICFReader\RecordType;

class FH30 extends AbstractRecordType
{
    protected $type = 'FH30';

    protected $key = 'payment_discount';

    protected $title = 'Payment discount';

    protected $fields = [
        1 => [
            'key' => 'deadline',
            'name' => 'Deadline',
            'format' => 'integer'
        ],
        2 => [
            'key' => 'percentage',
            'name' => 'Percentage',
            'format' => 'float2'
        ]
    ];

    
}