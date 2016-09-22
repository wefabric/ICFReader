<?php

namespace ICFReader\RecordType;

class FR10 extends AbstractRecordType
{
    protected $type = 'FR10';

    protected $key = 'product';

    protected $title = 'Product';

    protected $fields = [
        1 => [
            'key' => 'number',
            'name' => 'Number',
            'format' => 'integer'
        ],
        2 => [
            'key' => 'project_reference',
            'name' => 'Project reference'
        ],
        3 => [
            'key' => 'quantity',
            'name' => 'Quantity',
            'format' => 'integer'
        ],
        4 => [
            'key' => 'unit',
            'name' => 'Unit'
        ],
        5 => [
            'key' => 'invoice_quantity',
            'name' => 'Invoice quantity',
            'format' => 'integer'
        ],
        6 => [
            'key' => 'netto_amount',
            'name' => 'Netto amount',
            'format' => 'currency'
        ],
        7 => [
            'key' => 'ean',
            'name' => 'EAN',
            'format' => 'integer'
        ],
        8 => [
            'key' => 'supplier_sku',
            'name' => 'Supplier SKU'
        ],
        9 => [
            'key' => 'description',
            'name' => 'Description'
        ],
        10 => [
            'key' => 'price',
            'name' => 'Price',
            'format' => 'currency'
        ],
        11 => [
            'key' => 'minimum_quantity',
            'name' => 'Minimum quantity',
            'format' => 'integer'
        ],
        12 => [
            'key' => 'minimum_quantity_unit',
            'name' => 'Minimum quantity unit'
        ],
        13 => [
            'key' => 'tax_rate',
            'name' => 'Tax rate'
        ],
        14 => [
            'key' => 'tax_percentage',
            'name' => 'Tax percentage',
            'format' => 'currency'
        ],
        15 => [
            'key' => 'rule_identification',
            'name' => 'Rule identification'
        ],
        16 => [
            'key' => 'packing_slip_identification',
            'name' => 'Packing slip identification'
        ],
        17 => [
            'key' => 'packing_slip_rule_identification',
            'name' => 'Packing slip rule identification'
        ],
        18 => [
            'key' => 'correction_invoice_rule',
            'name' => 'Correction invoice rule'
        ]
    ];

    
}