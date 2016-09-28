<?php

namespace ICFReader;

use ICFReader\RecordType\RecordTypeInterface;
use ICFReader\Exception\RecordTypeException;

abstract class AbstractReader implements ReaderInterface
{

    protected $filePath;

    public function __construct($filePath)
    {
        $this->setFilePath($filePath);
    }

    public function getFilePath()
    {
        return $this->filePath;
    }

    public function setFilePath($filePath)
    {
        if (!is_string($filePath)) {
            throw new \InvalidArgumentException(sprintf(
                '%s: expects a string argument; received "%s"',
                __METHOD__,
                (is_object($filePath) ? get_class($filePath) : gettype($filePath))
            ));
        }

        $this->filePath = $filePath;
    }

    protected function formatLine(array $data)
    {
        if(!isset($data[0]) || !$data[0]){
            return false;
        }

        if(!$recordType = RecordTypes::get($data[0])){
            throw new RecordTypeException(
                sprintf(
                    'ICF record type "%s" does not exist; Allowed ICF record types are %s',
                    $recordType,
                    implode(', ', array_keys(RecordTypes::get()))
                )
            );
        }

        if(!class_exists($recordType)){
            throw new RecordTypeException(
                sprintf(
                    'ICF record type "%s" class does not exist; Allowed ICF record types are %s',
                    $recordType,
                    implode(', ', array_keys(RecordTypes::get()))
                )
            );
        }

        $class = new $recordType;
        if(!$class instanceof RecordTypeInterface){
            throw new RecordTypeException(
                sprintf(
                    'ICF record type "%s" does not implement the RecordTypeInterface',
                    $recordType
                )
            );
        } 

        $class->setValues($data);
        
        return $class->toArray();
    }

    public function read()
    {
        $result = [];
        if(file_exists($this->getFilePath())){
            $result = $this->format($this->toArray(file_get_contents($this->getFilePath())));
        }
        return $result;
    }

    public function format(array $data)
    {
        return $this->doFormat($data);
    }

    abstract protected function doFormat(array $data);

    protected function toArray($content)
    {
        if (!is_string($content)) {
            throw new \InvalidArgumentException(sprintf(
                '%s: expects a string argument; received "%s"',
                __METHOD__,
                (is_object($content) ? get_class($content) : gettype($content))
            ));
        }

        if($lines = explode(PHP_EOL, $content)){
            foreach($lines as $key => $line){
                if($line){
                    $lines[$key] = str_replace(PHP_EOL, '', preg_split('/\t/', $line));
                } else {
                    unset($lines[$key]);
                }
                
            }
        }

        return $lines;
    }

}