<?php

class BaseModels
{
    private $db_name;
    private $db_username;
    private $db_pass;
    private $db_host;

    protected $conn;
    protected $table_name;
    protected $primary_key;
    protected $key_value;
    protected $query;

    public function __construct()
    {
        $this->setDbInfo();
        $this->getConnect();
    }

    protected function setDbInfo()
    {
        $this->db_name = DB_NAME;
        $this->db_username = DB_USERNAME;
        $this->db_pass = DB_PASS;
        $this->db_host = DB_HOST;
    }

    protected function getConnect()
    {
        $this->conn = new PDO("mysql:host={$this->db_host};dbname={$this->db_name};charset=utf8", $this->db_username, $this->db_pass);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // unset($this->conn);
    }

    public static function all()
    {
        $self = new static();
        $self->query = "SELECT * FROM {$self->table_name}";
        return $self->get();
    }
    public static function insert($params)
    {
        $self = new static();
        $self->query = "INSERT INTO {$self->table_name} (";
        foreach ($params as $key => $value) {
            $self->query .= "$key,";
        }
        $self->query = rtrim($self->query, ',');
        $self->query .= ') VALUES (';

        foreach ($params as $key => $value) {
            $self->query .= ":$key,";
        }
        $self->query = rtrim($self->query, ',');
        $self->query .= ')';
        $stmt = $self->conn->prepare($self->query);

        $stmt->execute($params);

        return $self->conn->lastInsertId();
    }
    public static function delete($id){
        $self = new static();
        $self->query = "DELETE FROM {$self->table_name} WHERE {$self->primary_key} = $id";
        $stmt = $self->conn->prepare($self->query);
        $stmt->execute();
        return $self;
    }
    public static function find($id)
    {
        $self = new static();

        $self->query = "SELECT * FROM {$self->table_name} WHERE {$self->primary_key} = $id";

        $result = $self->get();

        return empty($result[0]) ? null : $result[0];
    }
    public static function update($id, $params)
    {
        unset($params['id']);
        $self = new static();
        $self->query = "UPDATE {$self->table_name} SET ";
        foreach ($params as $key => $value) {
            $self->query .= " $key = :$key, ";
        }
        $self->query = rtrim($self->query, ', ');

        $self->query .=" WHERE id = $id";

        $stmt = $self->conn->prepare($self->query);

        $stmt->execute($params);

        return $id;
    }

    function checkLogin($email, $password) {
        $self = new static();
        $self->query = "SELECT * FROM {$self->table_name} WHERE email = '{$email}' AND password = '{$password}'";
        $result = $self->get();
        return empty($result[0]) ? null : $result[0];
    }

    public static function where($key, $operator, $value)
    {
        $self = new static();

        $self->query = "SELECT * FROM {$self->table_name} WHERE $key $operator '$value'";

        return $self;
    }

    public function get()
    {
        $stmt = $this->conn->prepare($this->query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this));
        return $stmt->fetchAll();
    }
    public function get1()
    {
        $stmt = $this->conn->prepare($this->query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, get_class($this));
        return $stmt->fetch();
    }
}