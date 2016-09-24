<?php

namespace ICFReader;

use ICFReader\Enum\AbstractEnum;

class RecordTypes extends AbstractEnum 
{
    protected static $namespace = __NAMESPACE__.'\\RecordType\\';

    const BH10 = 'BH10';
    const BT10 = 'BT10';
    const FH10 = 'FH10';
    const FH20 = 'FH20';
    const FH30 = 'FH30';
    const FH40 = 'FH40';
    const FH50 = 'FH50';
    const FH60 = 'FH60';
    const FH70 = 'FH70';
    const FH80 = 'FH80';
    const FR10 = 'FR10';
    const FR20 = 'FR20';
    const FR30 = 'FR30';
    const FH3 = 'FH3';

    public static function get($key = '')
    {
        $result = self::getConstants();

        if($key) {
            if (!is_string($key)) {
                throw new \InvalidArgumentException(sprintf(
                    '%s: expects a string argument; received "%s"',
                    __METHOD__,
                    (is_object($key) ? get_class($key) : gettype($key))
                ));
            }

            if(self::isValidKey($key)) {
                $result = self::$namespace.$key;
            }
        }

        return $result;
    }
}