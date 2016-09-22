<?php

namespace ICFReader;

class RecordTypes 
{

    protected static $namespace = __NAMESPACE__.'\\RecordType\\';

    protected static $recordTypes = [
        'BH10' => 'BH10',
        'BT10' => 'BT10',
        'FH10' => 'FH10',
        'FH20' => 'FH20',
        'FH30' => 'FH30',
        'FH40' => 'FH40',
        'FH50' => 'FH50',
        'FH60' => 'FH60',
        'FH70' => 'FH70',
        'FH80' => 'FH80',
        'FR10' => 'FR10',
        'FR20' => 'FR20',
        'FH30' => 'FH30'
    ];

    public static function get($key = '')
    {
        $result = self::$recordTypes;
        if($key){
            if (!is_string($key)) {
                throw new \InvalidArgumentException(sprintf(
                    '%s: expects a string argument; received "%s"',
                    __METHOD__,
                    (is_object($key) ? get_class($key) : gettype($key))
                ));
            }

            $result = null;

            if(isset(self::$recordTypes[$key])){
                $result = self::$namespace.self::$recordTypes[$key];
            }
        }
        
        return $result;
    }
}