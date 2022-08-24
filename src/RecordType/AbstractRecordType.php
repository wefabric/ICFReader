<?php

namespace ICFReader\RecordType;

abstract class AbstractRecordType implements RecordTypeInterface
{
    protected $type;

    protected $key;

    protected $title;

    protected $fields = [];

    protected $values = [];

    public function getType()
    {
        return $this->type;
    }

    public function getKey()
    {
        return $this->key;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getFields()
    {
        return $this->fields;
    }

    public function getValues()
    {
        return $this->values;
    }

    public function setValues(array $data)
    {
        $this->values = [];
        foreach($this->getFields() as $key => $field){
            if(isset($data[$key])){

                $value = $this->fixUtf8($data[$key]);

                if (substr($value, -1) === "\r") {
                    $value = substr($value, 0, -1);
                }

                if(isset($field['format'])){
                    $value = $this->formatValue($field['format'], $value);
                }

                $this->values[$field['key']] = $value;
            }
        }
        return $this->values;
    }

    private function fixUtf8($text)
    {
        $encoding = mb_detect_encoding($text, mb_detect_order(), false);

        if($encoding === "UTF-8") {
            $text = mb_convert_encoding($text, 'UTF-8', 'UTF-8');
        }

        return iconv(mb_detect_encoding($text, mb_detect_order(), false), "ISO-8859-1//TRANSLIT//IGNORE", $text);
    }

    private function formatValue($format, $value)
    {
        if(!$value){
            return null;
        }

        switch ($format) {
            case 'integer':
                $value = (int)$value;
                break;
            case 'date':
                $value = new \DateTime($value);
                break;
            case 'currency':
            case 'float2':
                $value = ($value / 100);
                break;
            case 'float3':
                $value = ($value / 1000);
                break;
        }

        return $value;
    }

    public function toArray()
    {
        return [
            'type' => $this->getType(),
            'key' => $this->getKey(),
            'title' => $this->getTitle(),
            'values' => $this->getValues()
        ];
    }

}
