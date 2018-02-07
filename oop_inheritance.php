<?php

//blueprint for object
class MyClass  {
 //public, protected or private  
    //set properties-create a variable
    public $var = "Sandi is cool!";
    
    //create construct
    public function __construct($text) {
        $this->var = $text;
    }
    
    //set function methods
    public function my_function()   {
        
        // code...
        echo $this->var;
        
    }
}

class NewClass extends MyClass {
    
    
}

//instantiate a new object in a class
$myclass = new MyClass("Hello");
//call an instance of the class
$myclass->my_function();
  