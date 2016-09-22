<?php

namespace ICFReader\Enum;

use ICFReader\Enum\EnumInterface;

abstract class AbstractEnum implements EnumInterface
{
    private static $constCacheArray = NULL;

    /**
     * Prevent instance initiation
     */
    private function __construct() {}

    private static function getConstants() 
    {
        if (self::$constCacheArray == NULL) {
            self::$constCacheArray = [];
        }

        $calledClass = get_called_class();

        if (!array_key_exists($calledClass, self::$constCacheArray)) {
            $reflect = new ReflectionClass($calledClass);
            self::$constCacheArray[$calledClass] = $reflect->getConstants();
        }
        return self::$constCacheArray[$calledClass];
    }

    public static function isValidKey($name, $strict = false) 
    {
        $constants = self::getConstants();

        if ($strict) {
            return array_key_exists($name, $constants);
        }

        $keys = array_map('strtolower', array_keys($constants));

        return in_array(strtolower($name), $keys);
    }

    public static function isValidValue($value, $strict = true) 
    {
        $values = array_values(self::getConstants());

        return in_array($value, $values, $strict);
    }
}