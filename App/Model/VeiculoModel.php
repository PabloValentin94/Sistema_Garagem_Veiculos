<?php

namespace App\Model;

use App\DAO\VeiculoDAO;

class VeiculoModel extends Model
{

    public $id, $modelo, $ano, $cor, $numero_chassi, $quilometagem;

    public $revisao, $sinistro, $roubo_furto, $aluguel, $venda, $particular;

    public $observacoes;

    public $fk_marca, $fk_tipo, $fk_combustivel, $fk_fabricante;

    public function Save()
    {

        $dao = new VeiculoDAO();

        if(empty($this->id))
        {

            $dao->Insert($this);

            header("Location: /veiculo/cadastro");

        }

        else
        {

            $dao->Update($this);

            header("Location: /");

        }

    }

    public function Erase(int $id)
    {

        $dao = new VeiculoDAO();

        $dao->Delete($id);

        header("Location: /");

    }

    public function GetAllRows()
    {

        $dao = new VeiculoDAO();

        $this->rows = $dao->Select();

    }

    public function GetByID(int $id)
    {

        $dao = new VeiculoDAO();

        $registro = $dao->SelectByID($id);

        if($registro)
        {

            return $registro;

        }

        else
        {

            return new VeiculoModel();

        }

    }

}

?>