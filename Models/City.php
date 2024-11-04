<?php

require_once 'Core/Model.php';

class City extends Model
{
    protected $table = 'cities';
    protected $primaryKey = 'id';
}