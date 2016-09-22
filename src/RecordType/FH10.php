<?php

namespace ICFReader\RecordType;

class FH10 extends AbstractRecordType
{
    protected $type = 'FH10';

    protected $key = 'invoice_header';

    protected $title = 'Invoice Header';

    protected $fields = [
        1 => [
            'key' => 'type',
            'name' => 'Invoice type'
        ],
        2 => [
            'key' => 'supplier_invoice_number',
            'name' => 'Supplier invoice number'
        ],
        3 => [
            'key' => 'date',
            'name' => 'Date',
            'format' => 'date'
        ],
        4 => [
            'key' => 'delivery_date',
            'name' => 'Delivery date',
            'format' => 'date'
        ],
        5 => [
            'key' => 'currency_format',
            'name' => 'Currency format'
        ],
        6 => [
            'key' => 'packing_slip_number',
            'name' => 'Packing slip number'
        ],
        7 => [
            'key' => 'reference',
            'name' => 'Reference'
        ],
        8 => [
            'key' => 'correct_invoice_number',
            'name' => 'Correct invoice number'
        ],
        9 => [
            'key' => 'e_code_customer',
            'name' => 'Email/EAN code customer'
        ],
        10 => [
            'key' => 'vat_id_customer',
            'name' => 'Vat ID customer'
        ],
        11 => [
            'key' => 'e_code_supplier',
            'name' => 'Email/EAN code supplier'
        ],
        12 => [
            'key' => 'vat_id_supplier',
            'name' => 'Vat ID supplier'
        ],
        13 => [
            'key' => 'e_code_invoice_address',
            'name' => 'Email/EAN invoice address'
        ]
    ];

    
}