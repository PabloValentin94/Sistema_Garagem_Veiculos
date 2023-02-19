<?php

namespace App\Model;

use App\DAO\TipoDAO;

class TipoModel extends Model
{

    public $id, $descricao;

    public function Save()
    {

        $dao = new TipoDAO();

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

        $dao = new TipoDAO();

        $dao->Delete($id);

        header("Location: /");

    }

    public function GetAllRows()
    {

        $dao = new TipoDAO();

        $this->rows = $dao->Select();

    }

    public function GetByID($id)
    {

        $dao = new TipoDAO();

        $registro = $dao->SelectByID($id);

        if($registro)
        {

            return $registro;

        }

        else
        {

            return new TipoModel();

        }

    }

}

?>