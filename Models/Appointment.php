<?php

require_once 'Core/Model.php';

class Appointment extends Model
{
    protected $table = 'appointments';
    protected $primaryKey = 'id';
    public function getByDoctorId($id) {
        $sql = "SELECT $this->table.*, users.first_name AS user_first_name, users.last_name AS user_last_name
            FROM $this->table
            JOIN `users` ON $this->table.`user_id` = `users`.`id`
            WHERE $this->table.`doctor_id` = :doctor_id";

        $this->query($sql, ['doctor_id' => (int)$id]);
        return $this->db->statement->fetchAll();
    }
    public function getByPatientId($id){
        $sql = "SELECT $this->table.*,doctors.title as doctor_title, doctors.first_name AS doctor_first_name, doctors.last_name AS doctor_last_name
        FROM $this->table
        JOIN `users` ON $this->table.`user_id` = `users`.`id`
        JOIN `doctors` ON $this->table.`doctor_id` = `doctors`.`id`
        WHERE $this->table.`user_id` = :user_id";

        $this->query($sql, ['user_id' => (int)$id]);
        return $this->db->statement->fetchAll();
    }
}