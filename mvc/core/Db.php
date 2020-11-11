<?php
class Db
{
    public $conn;
    protected $db_servername = "localhost";
    protected $db_username = "B1704786";
    protected $db_password = "B1704786";
    protected $db_name = "web";
    public function __construct()
    {

        $this->conn = new mysqli($this->db_servername, $this->db_username, $this->db_password, $this->db_name);
        $this->conn->set_charset("utf8");
    }
}
