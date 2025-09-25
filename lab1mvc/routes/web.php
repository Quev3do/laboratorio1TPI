<?php

use lib\Route;
use app\controller;
use app\controller\HomeController;

Route::get("/", function(){
    echo "Waos";
});

Route::get("/inicio/:flag", function($flag){
    return ["title"=>"waos"];
});

Route::get("/home", [HomeController::class, "index"]);

Route::dispatch();

?>