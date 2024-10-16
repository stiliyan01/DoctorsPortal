<?php

require('config.php');

function dump($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

function dd($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';

    die();
}

function current_uri(){
    return $_SERVER['REQUEST_URI'];
}

function urlIs($value){
    return current_uri() === $value;
}

function abort($code = 404) {
    http_response_code($code);
    require "views/{$code}.php";
    die();
}

function getDsn($config){
   return "{$config['db']}:host={$config['host']};port={$config['port']};dbname={$config['dbname']}";
}

function view($name, $params = []){
    extract($params);
    
    return require "views/{$name}.view.php";
}

function redirect($path){
    header("Location: /{$path}");
    exit();
}