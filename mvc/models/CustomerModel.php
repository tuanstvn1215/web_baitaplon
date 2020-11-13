<?php
class CustomerModel extends Db
{
    protected $table = 'KhachHang';
    protected $id_field = 'MSKH';
    public function getAllCustomer()

    {
        //gọi hàm lấy dữ liệu từ cơ sở dữ liệu từ lớp cha
        $Customers = $this->GetAll($this->table);
        return $Customers;
    }
    public function  getCustomer($id)
    {
        $Customer = $this->Get($this->table, $this->id_field, $id);
        return $Customer;
    }

    public function addCustomer($data)
    {
        //gọi hàm thêm vào cơ sở dữ liệu trong lớp cha
        return $this->Insert($this->table, $data);
        //trả về true false
    }
    public function setCustomer($data)
    { //gọi hàm sửa cơ sở dữ liệu trong lớp cha
        return $this->Set($this->table, $this->id_field, $data);
        //trả về true false
    }
}
