<?php
class ProduceModel extends Db
{

    public function getAllProduce()
    {
        $Produces = [];
        try {
            $statment = $this->conn->prepare('SELECT * FROM HangHoa');
            $statment->execute();
            $Produces = $statment->get_result()->fetch_all(1);

            return $Produces;
        } catch (Exception $e) {
            $e->getMessage();
        }
    }
    public function addProduce()
    {
    }
}
