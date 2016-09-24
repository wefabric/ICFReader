<?php

    require 'vendor/autoload.php';

    $reader = new ICFReader\Reader('5261036820160916.icf');
    echo '<pre>'; print_r($reader->read()); echo '</pre>'; die();
    
?>