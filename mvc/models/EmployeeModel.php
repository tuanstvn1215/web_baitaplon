<?php
class EmployeeModel extends Db
{
    protected $table = 'NhanVien';
    protected $id_field = 'MSNV';
    public function getAllEmployee()

    {
        //gọi hàm lấy dữ liệu từ cơ sở dữ liệu từ lớp cha
        $Employees = $this->GetAll($this->table);
        return $Employees;
    }
    public function  getEmployee($id)
    {
        $Employee = $this->Get($this->table, $this->id_field, $id);
        return $Employee;
    }

    public function addEmployee($data)
    {
        //gọi hàm thêm vào cơ sở dữ liệu trong lớp cha
        return $this->Insert($this->table, $data);
        //trả về true false
    }
    public function setEmployee($data)
    { //gọi hàm sửa cơ sở dữ liệu trong lớp cha
        return $this->Set($this->table, $this->id_field, $data);
        //trả về true false
    }
}
//