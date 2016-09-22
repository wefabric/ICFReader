<?php

namespace ICFReader;

interface ReaderInterface
{   
    public function read();

    public function format(array $data);
}