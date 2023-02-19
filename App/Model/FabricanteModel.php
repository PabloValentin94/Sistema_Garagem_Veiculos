<?php

namespace App\Model;

use App\DAO\FabricanteDAO;

class FabricanteModel extends Model
{

    public $id, $descricao, $fk_marca;

    public function Save()
    {

        $dao = new FabricanteDAO();

        if(empty($this->id))
        {

            $dao->Insert($this);

            header("Location: /");

        }

        else
        {

            $dao->Update($this);

            header("Location: /");

        }

    }

    public function Erase(int $id)
    {

        $dao = new FabricanteDAO();

        $dao->Delete($id);

        header("Location: /");

    }

    public function GetAllRows()
    {

        $dao = new FabricanteDAO();

        $this->rows = $dao->Select();

    }

    public function GetByID(int $id)
    {

        $dao = new FabricanteDAO();

        $registro = $dao->SelectByID($id);

        if($registro)
        {

            return $registro;
            
        }

        else
        {

            return new FabricanteModel();

        }

    }

}

?>