
<?php
class OrderDetailModel extends Db
{
    protected $table = 'ChiTietDatHang';
    protected $id_field = 'SoDonDH';
    public function getAllOrderDetail()
    {
        //gọi hàm lấy dữ liệu từ cơ sở dữ liệu từ lớp cha
        $OrderDetails = $this->GetAll($this->table);
        return $OrderDetails;
    }
    public function  getOrderDetail($id)
    {
        $OrderDetail = $this->Get($this->table, $this->id_field, $id);
        return $OrderDetail;
    }

    public function addOrderDetail($data)
    {
        //gọi hàm thêm vào cơ sở dữ liệu trong lớp cha
        return $this->Insert($this->table, $data);
        //trả về true false
    }
    public function setOrderDetail($data)
    { //gọi hàm sửa cơ sở dữ liệu trong lớp cha
        return $this->Set($this->table, $this->id_field, $data);
        //trả về true false
    }
}
