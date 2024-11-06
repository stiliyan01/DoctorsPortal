<?php

require_once 'Core/Model.php';

class Doctor extends Model
{
    protected $table = 'doctors';
    protected $primaryKey = 'id';

    public function login($data) {
        $sql = "SELECT * FROM {$this->table} WHERE email = :email AND password = :password";
        $this->query($sql, ['email' => $data['email'], 'password' => $data['password']]);
        return $this->db->statement->fetch();
    }

    public function patients($doctor_id){
        $sql = "SELECT * FROM patients WHERE doctor_id = :doctor_id";
        $this->query($sql, ['doctor_id' => $doctor_id]);
        return $this->db->statement->fetchAll();
    }

    function searchDoctors($searchCriteria) {
        $conditions = [];
        $params = [];

        $sql = "SELECT doctors.*, cities.name AS city, doctors_specialties.name AS specialty
                FROM doctors
                JOIN cities ON doctors.city_id = cities.id
                JOIN doctors_specialties ON doctors.speciality_id = doctors_specialties.id";
    
        if (!empty($searchCriteria['doctorSpecialty'])) {
            $conditions[] = "doctors.speciality_id = :doctorSpecialty";
            $params[':doctorSpecialty'] = $searchCriteria['doctorSpecialty'];
        }
        
        if (!empty($searchCriteria['city'])) {
            $conditions[] = "doctors.city_id = :city";
            $params[':city'] = $searchCriteria['city'];
        }
        
        if (!empty($searchCriteria['doctor_name'])) {
            $conditions[] = "doctors.name LIKE :doctor_name";
            $params[':doctor_name'] = "%" . $searchCriteria['doctor_name'] . "%";
        }
        
        if (!empty($conditions)) {
            $sql .= " WHERE " . implode(" AND ", $conditions);
        }
    
        $this->query($sql, $params);
        return $this->db->statement->fetchAll();
    }
    

    
}










////SELECT doctors.*, cities.name AS city, doctors_specialties.name AS specialty FROM doctors JOIN cities ON doctors.city_id = cities.id JOIN doctors_specialties ON doctors.speciality_id = doctors_specialties.id;