<?php

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