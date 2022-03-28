<?php
require 'Region.class.php';
require 'gaode.class.php';

//$Region = new Region(['debug' => true]);
//
//$Region->run();

$gaode = new gaode();
$gaode->run();

// 耗时约180s