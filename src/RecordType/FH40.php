<?php

namespace ICFReader\RecordType;

class FH40 extends AbstractRecordType
{
    protected $type = 'FH40';

    protected $key = 'credit_restriction';

    protected $title = 'Credit restriction';

    protected $fields = [
        1 => [
            'key' => 'term',
            'name' => 'term',
            'format' => 'integer'
        ],
        2 => [
            'key' => 'percentage',
            'name' => 'Percentage',
            'format' => 'integer'
        ]
    ];

}