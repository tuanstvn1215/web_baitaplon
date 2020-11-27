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
    public function  getProduce($id)
    {
        $Produce = $this->Get($this->table, $this->id_field, $id);
        return $Produce;
    }

    public function addProduce($data)
    {
        //gọi hàm thêm vào cơ sở dữ liệu trong lớp cha
        return $this->Insert($this->table, $data);
        //trả về true false
    }
    public function setProduce($data)
    { //gọi hàm sửa cơ sở dữ liệu trong lớp cha
        return $this->Set($this->table, $this->id_field, $data);
        //trả về true false
    }
    public function deleteProduce($id)
    {
        $this->Delete($this->table, $id, $this->id_field);
    }
}
