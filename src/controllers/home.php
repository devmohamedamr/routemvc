<?php

namespace Route\Mvc\controllers;

use Route\Mvc\core\basecontroller;
use Route\Mvc\models\categoryModel;

class home extends basecontroller{

    public function index(){
        $category = new categoryModel;
        $category = $category->getAllCategory();
        $name = "mohamed";
        $this->view('index',['name'=>$name,'data'=>$category]);
    }

    public function add(){
        echo "add home";
    }
}