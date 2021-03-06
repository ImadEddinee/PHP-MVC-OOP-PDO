<?php
/*
 * the base controller
 * load the views and the models
 */
class    Controller{
    //Load model
    public function model($model){
        require_once '../app/models/'.$model.'.php';
        return new $model;
    }
    //Load view
    public function view($view, $data = []){
        if (file_exists('../app/views/'.$view.'.php')){
            require_once '../app/views/inc/header.php';
            require_once '../app/views/'.$view.'.php';
            require_once '../app/views/inc/footer.php';
        }
    }
}