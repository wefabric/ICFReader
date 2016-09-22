<?php

namespace ICFReader\RecordType;

class FH20 extends AbstractRecordType
{
    protected $type = 'FH20';

    protected $key = 'invoice_address';

    protected $title = 'Invoice address';

    protected $fields = [
        1 => [
            'key' => 'ean_pickup_address',
            'name' => 'EAN pickup address',
            'format' => 'integer'
        ],
        2 => [
            'key' => 'shipping_address_ean',
            'name' => 'Shipping address EAN code',
            'format' => 'integer'
        ],
        3 => [
            'key' => 'shipping_address_name',
            'name' => 'Shipping Address Name'
        ],
        4 => [
            'key' => 'shipping_address_street_housenumber',
            'name' => 'Shipping address street housenumber'
        ],
        5 => [
            'key' => 'shipping_address_city',
            'name' => 'Shipping address city'
        ],
        6 => [
            'key' => 'shipping_address_postcode',
            'name' => 'Shipping address postcode'
        ],
        7 => [
            'key' => 'shipping_address_country',
            'name' => 'Shipping address country'
        ],
        8 => [
            'key' => 'destination_ean',
            'name' => 'Destination EAN code',
            'format' => 'integer'
        ],
        9 => [
            'key' => 'destination_name',
            'name' => 'Destination Name'
        ],
        10 => [
            'key' => 'destination_street_housenumber',
            'name' => 'Destination street housenumber'
        ],
        11 => [
            'key' => 'destination_city',
            'name' => 'Destination city'
        ],
        12 => [
            'key' => 'destination_postcode',
            'name' => 'Destination postcode'
        ],
        13 => [
            'key' => 'destination_country',
            'name' => 'Destination country'
        ],
    ];

    
}