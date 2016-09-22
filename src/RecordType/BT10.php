<?php

namespace ICFReader\RecordType;

class BT10 extends AbstractRecordType
{
    protected $type = 'BT10';
    
    protected $key = 'file_trailer';

    protected $title = 'File trailer';

    protected $fields = [
        1 => [
            'key' => 'version',
            'name' => 'Version'
        ],
        2 => [
            'key' => 'amount_in_file',
            'name' => 'Amount',
            'format' => 'integer'
        ],
        3 => [
            'key' => 'reference',
            'name' => 'Reference'
        ],
        4 => [
            'key' => 'total_amount',
            'name' => 'Total amount',
            'format' => 'currency'
        ]
    ];

    
}