<?php
require_once(__DIR__.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php');
use Tdrive\App;
$tdrive = new App;
//print_r($tdrive->Init());
//print_r($tdrive->CreateTheme('test'));
print_r($tdrive->Deploy('46316060751'));
