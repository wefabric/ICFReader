<?php

namespace ICFReader\Enum;

interface EnumInterface
{
    public static function isValidKey($name, $strict = false);

    public static function isValidValue($value, $strict = true);
}