<?php

require_once 'Core/Model.php';

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    public function login($data)
    {
        $sql = "SELECT * FROM {$this->table} WHERE email = :email AND password = :password";
        $this->query($sql, ['email' => $data['email'], 'password' => $data['password']]);
        return $this->db->statement->fetch();
    }

    public function donors(){
        $sql = "SELECT * FROM {$this->table} WHERE is_donor = 1";
        $this->query($sql);
        return $this->db->statement->fetchAll();
    }
}