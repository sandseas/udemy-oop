<?php
interface MyInterface {
    public function do_thing();
    public function do_other_thing();
}

class MyClass implements MyInterface {
    public function do_thing() {
        // do things here
        
    }
    
    public function do_other_thing() {
        // do other things here
    }
    
    public function do_yet_other_thing() {
        // do yet other things here
    }
}
    echo "working";