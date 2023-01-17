<?php

require __DIR__.'/../vendor/autoload.php';

dump(file_get_contents('test.icf'));

$reader = new ICFReader\Reader('test.icf');

dump($reader->read());
