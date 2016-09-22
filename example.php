<?php

    require 'vendor/autoload.php';

    $reader = new ICFReader\Reader('file.icf');
    echo '<pre>'; print_r($reader->read()); echo '</pre>'; die();
    
?>