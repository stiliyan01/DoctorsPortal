<?php

require 'Core/Model.php';

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
}