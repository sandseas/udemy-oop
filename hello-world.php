<?php

//blueprint for object
class MyClass  {
    //set properties-create a variable
    public $var = "Sandi is learning OOP";
    
    //set function methods
    public function my_function()    {
        // code...
        echo $this->var;
        
    }
}

//instantiate a new object in a class
$myclass = new MyClass;
//call an instance of the class
$myclass->my_function();
  