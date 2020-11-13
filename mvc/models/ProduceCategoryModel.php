
<?php
class ProduceCategoryModel extends Db
{
    protected $table = 'NhomHangHoa';
    protected $id_field = 'MaNhom';
    public function getAllCategory()

    {
        //gọi hàm lấy dữ liệu từ cơ sở dữ liệu từ lớp cha
        $Categorys = $this->GetAll($this->table);
        return $Categorys;
    }
    public function  getCategory($id)
    {
        $Category = $this->Get($this->table, $this->id_field, $id);
        return $Category;
    }

    public function addCategory($data)
    {
        //gọi hàm thêm vào cơ sở dữ liệu trong lớp cha
        return $this->Insert($this->table, $data);
        //trả về true false
    }
    public function setCategory($data)
    { //gọi hàm sửa cơ sở dữ liệu trong lớp cha
        return $this->Set($this->table, $this->id_field, $data);
        //trả về true false
    }
}
