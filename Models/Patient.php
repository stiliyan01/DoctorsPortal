<?php

require_once 'Core/Model.php';

class Patient extends Model
{
    protected $table = 'patients';
    protected $primaryKey = 'id';

}