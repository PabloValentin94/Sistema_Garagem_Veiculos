<?php

namespace App\Model;

use App\DAO\CombustivelDAO;

class CombustivelModel extends Model
{

    public $id, $descricao;

    public function Save()
    {

        $dao = new CombustivelDAO();

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

        $dao = new CombustivelDAO();

        $dao->Delete($id);

        header("Location: /");

    }

    public function GetAllRows()
    {

        $dao = new CombustivelDAO();

        $this->rows = $dao->Select();

    }

    public function GetByID($id)
    {

        $dao = new CombustivelDAO();

        $registro = $dao->SelectByID($id);

        if($registro)
        {

            return $registro;

        }

        else
        {

            return new CombustivelModel();

        }

    }

}

?>