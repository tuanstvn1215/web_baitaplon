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
    public function Get($table, $idName, $id)
    {
        try {
            $statment = $this->conn->prepare('SELECT * FROM ' . $table . ' WHERE ' . $idName . ' = ?');
            $statment->bind_param('s', $id);
            $statment->execute();
            $data = $statment->get_result();
            $data->fetch_assoc();
        } catch (Throwable $th) {
            $th->getMessage();
        }
        return $data;
    }
    public function GetAll($table)
    {
        try {
            $statment = $this->conn->prepare('SELECT * FROM ' . $table);
            $statment->execute();
            $data = $statment->get_result()->fetch_all(1);
        } catch (Throwable $th) {
            $th->getMessage();
        }
        return $data;
    }
    // public function Set($table, $idName, $id, $data)
    // {
    //     $flag = false;
    //     try {
    //         unset($data[$idName]);
    //         $params_string = $data;
    //         $params_type_string = 's';
    //         for ($i = 1; $i < count($data); $i++) {
    //             $params_string .= ',?';
    //             $params_type_string .= 's';
    //             $querry_string = 'UPDATE ' . $table . '
    //             SET TenHH=?, Gia=?, SoLuongHang=?, MaNhom=?, Hinh=?, MoTaHH=?
    //             WHERE MSHH=?';
    //         }

    //         $statment = $this->conn->prepare();
    //         $statment->bind_param("sssssss", $TenHH, $Gia, $SoluongHang, $MaNhom, $Hinh, $MoTaHH, $MSHH);
    //         $flag = $statment->execute();
    //     } catch (\Throwable $th) {
    //         $th->getMessage();
    //     }
    //     return  $flag;
    // }
    public function Insert($table, $data)
    {
        try {
            // tạo chuỗi lệnh thêm
            $params_string = '?';
            $params_type_string = 's';
            for ($i = 1; $i < count($data); $i++) {
                $params_string .= ',?';
                $params_type_string .= 's';
            }
            $querry_string = 'INSERT INTO `' . $table . '` VALUES (' . $params_string . ')';
            $statment = $this->conn->prepare($querry_string);
            $data = array_values($data);
            $statment->bind_param($params_type_string, ...$data);
            $statment->execute();
            return true;
        } catch (Exception $th) {

            $th->getMessage();
        }
        return false;
    }
}
