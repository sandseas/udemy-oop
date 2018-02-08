<?php

//blueprint for object
class MyClass  {
 //public, protected or private  
    //set properties-create a variable
    protected $var = "Sandi is cool!";
    
    //create construct
    public function __construct($text) {
        $this->var = $text;
    }
    
    //set function methods
    protected function my_function()   {
        
        // code...
        echo $this->var;
        
    }
}

class NewClass extends MyClass {
    public function display() {
        $this->my_function();
    }   
    
}

$myclass = new NewClass("hello");
$myclass->display();