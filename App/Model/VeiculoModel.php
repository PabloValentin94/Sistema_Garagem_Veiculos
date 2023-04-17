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

        }

        else
        {

            $dao->Update($this);

        }

    }

    public function Erase(int $id)
    {

        $dao = new VeiculoDAO();

        $dao->Delete($id);

        header("Location: /veiculo/listagem");

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

    public function GetMaxID()
    {

        $dao = new VeiculoDAO();

        $id_maior = $dao->SelectMaxID();

        return $id_maior[0]->max;

    }

    public function GetByIDMarcaAndIDFabricante($id_marca, $id_fabricante)
    {

        $dao = new VeiculoDAO();

        $this->rows = $dao->SelectByIDMarcaAndIDFabricante($id_marca, $id_fabricante);

    }

}

?>