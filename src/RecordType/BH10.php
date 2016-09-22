<?php

namespace ICFReader\RecordType;

class BH10 extends AbstractRecordType
{
    protected $type = 'BH10';

    protected $key = 'file_header';

    protected $title = 'File Header';

    protected $fields = [
        1 => [
            'key' => 'version',
            'name' => 'Version'
        ],
        2 => [
            'key' => 'consignee',
            'name' => 'Consignee'
        ],
        3 => [
            'key' => 'sender',
            'name' => 'Sender'
        ],
        4 => [
            'key' => 'send_date',
            'name' => 'Send Date',
            'format' => 'date'
        ],
        5 => [
            'key' => 'amount',
            'name' => 'Amount in file',
            'format' => 'integer'
        ],
        6 => [
            'key' => 'reference',
            'name' => 'Reference'
        ]
    ];

    
}