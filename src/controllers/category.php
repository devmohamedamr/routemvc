<?php

namespace Route\Mvc\controllers;

use Route\Mvc\core\basecontroller;
use Route\Mvc\models\categoryModel;

class category extends basecontroller{

    // show all category
    public function index(){
        $category = new categoryModel;
        $data =  $category->getAllCategory();
        $this->view("category/index",['data'=>$data]);
    }

    // view form add
    public function add(){
        
        $this->view("category/add"); 
    }


    // save data to category 
    public function store(){
        $category = new categoryModel;
        $category->addNewCategory($_POST);
        header("location: index");
    }

    // show category by id 
    public function edit($id){
        $category = new categoryModel;
        $data = $category->showCategoryById($id);
        $this->view("category/update",['data'=>$data]);
    }

    // save update
    public function update(){

        // print_r($_POST);die;
        $category = new categoryModel;
        $category->updateCategory(['title'=>$_POST['title']],$_POST['id']);
        header("location: index");
    }


    public function delete($id){

        $category = new categoryModel;
        if($category->showCategoryById($id)){
            $res =  $category->deleteCategory($id);
            header("location: ../index");
        }else{
            header("location: ../index");
        }

    }


}