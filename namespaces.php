<?php

require_once('lib1.php');
require_once('lib2.php');

use App\Lib1\MyClass;
use App\Lib2\YourClass;

$ns = new MyClass('Hey </br>');
$ns->my_function();

$ns2 = new YourClass('Hi');
$ns2->my_function();
