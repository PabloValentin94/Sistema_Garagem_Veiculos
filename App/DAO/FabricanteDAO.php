<?php

namespace App\DAO;

use \PDO;

use App\Model\FabricanteModel;

class FabricanteDAO extends DAO
{

    public function __construct()
    {

        parent::__construct();
        
    }

    public function Insert(FabricanteModel $model)
    {

        $sql = "INSERT INTO Fabricante(descricao) VALUES(?)";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->descricao);

        $stmt->execute();

    }

    public function Update(FabricanteModel $model)
    {

        $sql = "UPDATE Fabricante SET descricao = ? WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->descricao);

        $stmt->bindValue(2, $model->id);

        $stmt->execute();

    }

    public function Delete(int $id)
    {

        $sql = "DELETE FROM Fabricante WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $id);

        $stmt->execute();

    }

    public function Select()
    {

        $sql = "SELECT * FROM Fabricante ORDER BY id ASC";

        $stmt = $this->conexao->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);

    }

    public function SelectByID(int $id)
    {

        $sql = "SELECT * FROM Fabricante WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $id);

        $stmt->execute();

        return $stmt->fetchObject("App\Model\FabricanteModel");

    }

}

?>