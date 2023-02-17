<?php

namespace App\Model;

use App\DAO\MarcaDAO;

class MarcaModel extends Model
{

    public $id, $nome;

    public function Save()
    {

        $dao = new MarcaDAO();

        if(empty($this->id))
        {

            $dao->Insert($this);

        }

        else
        {

            $dao->Update($this);

        }

    }

    public function Erase(int $id)
    {

        $dao = new MarcaDAO();

        $dao->Delete($id);

    }

    public function GetAllRows()
    {

        $dao = new MarcaDAO();

        $this->rows = $dao->Select();

    }

    public function GetByID($id)
    {

        $dao = new MarcaDAO();

        $registro = $dao->SelectByID($id);

        if($registro)
        {

            return $registro;

        }

        else
        {

            return new MarcaModel();

        }

    }

}

?>