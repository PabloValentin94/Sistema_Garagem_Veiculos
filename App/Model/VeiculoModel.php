<?php

namespace App\Model;

use App\DAO\VeiculoDAO;

class VeiculoModel extends Model
{

    public $id, $codigo_veiculo, $modelo, $ano, $cor, $numero_chassi, $quilometagem;

    public $revisao, $sinistro, $roubo_furto, $aluguel, $venda, $particular;

    public $observacoes;

    public $fk_marca, $fk_tipo, $fk_combustivel, $fk_fabricante;

    public function Save()
    {



    }

    public function Erase(int $id)
    {



    }

    public function GetAllRows()
    {



    }

    public function GetByID(int $id)
    {



    }

}

?>