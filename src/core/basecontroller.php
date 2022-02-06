<?php

namespace Route\Mvc\core;
 

class basecontroller{

    public function __call($name, $arguments)
    {
        echo "this method : (".$name.") not exist";
    }

    protected function view($path,$data = []){
        extract($data);
        require "../src/views/".$path.".php";
    }
}