<?php

require_once 'Core/Model.php';

class Appointment extends Model
{
    protected $table = 'appointments';
    protected $primaryKey = 'id';

    public function getByDoctorId($id){
        $sql = "SELECT * FROM $this->table WHERE doctor_id = :doctor_id";
        $this->query($sql, ['doctor_id' => (int)$id]);
        return $this->db->statement->fetchAll();
    }
}