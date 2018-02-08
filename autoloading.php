<?php

spl_autoload_register('autoload');


function autoload($class_name) {
    $parts = explode('\\', $class_name);
    $name = array_pop($parts); echo $name; exit;
    
    require_once(str_replace('\\', '/', $class_name) . '.php');
}

use App\Lib1\MyClass as J;
use App\Lib2\YourClass as M;

$ns = new J('Hey </br>');
$ns->my_function();

$ns2 = new M('Hi');
$ns2->my_function();
