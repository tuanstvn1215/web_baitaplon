<?php
class ProduceModel extends Db
{
    protected $table = 'HangHoa';
    protected $id_field = 'MSHH';
    public function getAllProduce()

    {
        //gọi hàm lấy dữ liệu từ cơ sở dữ liệu từ lớp cha
        $Produces = $this->GetAll($this->table);
        return $Produces;
    }
    public function  getProduce()
    {
        $Produce = $this->Get($this->table, $this->id_field, $_GET['MSHH']);
        return $Produce;
    }

    public function addProduce($data)
    {
        //gọi hàm thêm vào cơ sở dữ liệu trong lớp cha
        return $this->Insert($this->table, $data);
        //trả về true false
    }
    public function setProduce()
    {
        // $this->Set($this->table, $this->id_field, $_POST[$this->id_field], $_POST);
        $flag = false;
        try {
            $MSHH = $_POST['MSHH'];
            $TenHH = $_POST['TenHH'];
            $Gia = $_POST['Gia'];
            $SoluongHang = $_POST['SoluongHang'];
            $MaNhom = $_POST['MaNhom'];
            $Hinh = $_POST['Hinh'];
            $MoTaHH = $_POST['MoTaHH'];
            $statment = $this->conn->prepare('UPDATE HangHoa SET 
                SET TenHH=?, Gia=?, SoLuongHang=?, MaNhom=?, Hinh=?, MoTaHH=?
                WHERE MSHH=?');
            $statment->bind_param("sssssss", $TenHH, $Gia, $SoluongHang, $MaNhom, $Hinh, $MoTaHH, $MSHH);
            $flag = $statment->execute();
        } catch (\Throwable $th) {
            $th->getMessage();
        }
        return  $flag;
    }
}
