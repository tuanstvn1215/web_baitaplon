<?php
class ProduceModel extends Db
{
    protected $table = 'HangHoa';
    public function getAllProduce()

    {
        $Produces = $this->GetAll($this->table);
        return $Produces;
        // try {
        //     $statment = $this->conn->prepare('SELECT * FROM HangHoa');
        //     $statment->execute();
        //     $Produces = $statment->get_result()->fetch_all(1);

        //     return $Produces;
        // } catch (Exception $e) {
        //     $e->getMessage();
        // }
    }
    public function  getProduce()
    {
        $Produce = $this->Get($this->table, 'MSHH', $_GET['MSHH']);
        return $Produce;
    }

    public function addProduce()
    {
        $this->Insert($this->table, $_POST);
        // $flag = false;
        // try {
        //     $MSHH = $_POST['MSHH'];
        //     $TenHH = $_POST['TenHH'];
        //     $Gia = $_POST['Gia'];
        //     $SoluongHang = $_POST['SoluongHang'];
        //     $MaNhom = $_POST['MaNhom'];
        //     $Hinh = $_POST['Hinh'];
        //     $MoTaHH = $_POST['MoTaHH'];
        //     $statment = $this->conn->prepare("INSERT INTO `HangHoa` values (?,?,?,?,?,?,?)");
        //     $statment->bind_param("sssssss", $MSHH, $TenHH, $Gia, $SoluongHang, $MaNhom, $Hinh, $MoTaHH);
        //     $flag = $statment->execute();
        // } catch (Exception $e) {
        //     $e->getMessage();
        // }
        // return $flag;
    }
    public function setProduce()
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
