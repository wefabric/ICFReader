<?php

namespace ICFReader\RecordType;

interface RecordTypeInterface
{   
    public function getType();

    public function getKey();

    public function getTitle();

    public function getFields();

    public function getValues();

}