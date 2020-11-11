<?php
class ProduceCategoryModel extends Db
{
    protected $table = 'NhomHangHoa';
    public function getAllCategory()

    {
        $Produces = $this->GetAll($this->table);
        return $Produces;
    }
    public function  getCategory()
    {
        $Produce = $this->Get($this->table, 'MSHH', $_GET['MSHH']);
        return $Produce;
    }

    public function addCategory()
    {
        $this->Insert($this->table, $_POST);
    }
    public function setCategory()
    {
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
