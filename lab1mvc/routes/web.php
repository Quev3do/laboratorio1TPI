<?php

use lib\Route;
use app\controller;
use app\controller\HomeController;
use app\controller\InicioController;
use app\controller\lenguajesController;

Route::get("/", function(){
    echo "Waos";
});

Route::get("/inicio/:flag", function($flag){
    return ["title"=>"waos"];
});

Route::get("/home", [HomeController::class, "index"]);
Route::get("/inicio", [InicioController::class, "index"]);
Route::get("/lenguajes", [lenguajesController::class, "index"]);
Route::get());

Route::dispatch();

?>