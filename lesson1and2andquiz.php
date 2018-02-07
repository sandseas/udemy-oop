<?php

//blueprint for object
class MyClass  {
    //set properties-create a variable
    public $var = '"John is my hero."';
    
    //set function methods
    public function preach()    {
        // code...
        echo $this->var;
        
    }
}

//instantiate a new object in a class
$myclass = new MyClass;
//call an instance of the class
$myclass->preach();
  