<?php

require_once 'Core/Model.php';

class Doctor extends Model
{
    protected $table = 'doctors';
    protected $primaryKey = 'id';
}