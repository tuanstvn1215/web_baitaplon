
<?php
class OrderModel extends Db
{
    protected $table = 'DatHang';
    protected $id_field = 'SoDonDH';
    public function getAllOrder()
    {
        //gọi hàm lấy dữ liệu từ cơ sở dữ liệu từ lớp cha
        $Orders = $this->GetAll($this->table);
        return $Orders;
    }
    public function  getOrder($id)
    {
        $Order = $this->Get($this->table, $this->id_field, $id);
        return $Order;
    }

    public function addOrder($data)
    {
        //gọi hàm thêm vào cơ sở dữ liệu trong lớp cha
        return $this->Insert($this->table, $data);
        //trả về true false
    }
    public function setOrder($data)
    { //gọi hàm sửa cơ sở dữ liệu trong lớp cha
        return $this->Set($this->table, $this->id_field, $data);
        //trả về true false
    }
}
