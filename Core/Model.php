<?php

class Model extends Database
{
    protected $table;
    protected $primaryKey = 'id';

    public function query($sql, $params = [])
    {
        $this->statement = $this->connection->prepare($sql);
        $this->statement->execute($params);
        return $this;
    }

    public function all()
    {
        $sql = "SELECT * FROM {$this->table}";
        $this->query($sql);
        return $this->statement->fetchAll();
    }

    public function find($id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE {$this->primaryKey} = :id";
        $this->query($sql, ['id' => $id]);
        return $this->statement->fetch();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM {$this->table} WHERE {$this->primaryKey} = :id";
        $this->query($sql, ['id' => $id]);
        return $this->statement->rowCount();
    }

    public function create(array $data)
    {
        $columns = implode(', ', array_keys($data));
        $placeholders = ':' . implode(', :', array_keys($data));
        $sql = "INSERT INTO {$this->table} ({$columns}) VALUES ({$placeholders})";
        $this->query($sql, $data);
        return $this->statement->rowCount();
    }

    public function update($id, array $data)
    {
        $fields = '';
        foreach ($data as $key => $value) {
            $fields .= "{$key} = :{$key}, ";
        }
        $fields = rtrim($fields, ', ');
        $data[$this->primaryKey] = $id;
        $sql = "UPDATE {$this->table} SET {$fields} WHERE {$this->primaryKey} = :{$this->primaryKey}";
        $this->query($sql, $data);
        return $this->statement->rowCount();
    }
}