<?php

error_reporting(E_ALL);
ini_set('display_errors', true);

//blueprint for object
class MyClass  {
 //public, protected or private  
    //set properties-create a variable
    public static $var = "Sandi is cool!";
    
    //set function methods
    public function my_function()   {
        
        // code...
        echo $this->var;
        
    }
}

echo MyClass::$var;