<?php

namespace App\DAO;

use App\Model\VeiculoModel;

class VeiculoDAO extends DAO
{

    public function __construct()
    {

        parent::__construct();
        
    }

    public function Insert(VeiculoModel $model)
    {

        $sql = "INSERT INTO Veiculo(numero_chassi, modelo, ano, cor, quilometragem, " . 
        "revisao, sinistro, roubo_furto, aluguel, venda, particular, observacoes, " . 
        "fk_marca, fk_tipo, fk_combustivel, fk_fabricante) VALUES(?, ?, ?, ?, ?, ?, ?, " . 
        "?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->numero_chassi);

        $stmt->bindValue(2, $model->modelo);
        
        $stmt->bindValue(3, $model->ano);

        $stmt->bindValue(4, $model->cor);

        $stmt->bindValue(5, $model->quilometagem);

        $stmt->bindValue(6, $model->revisao);

        $stmt->bindValue(7, $model->sinistro);

        $stmt->bindValue(8, $model->roubo_furto);

        $stmt->bindValue(9, $model->aluguel);

        $stmt->bindValue(10, $model->venda);

        $stmt->bindValue(11, $model->particular);

        $stmt->bindValue(12, $model->observacoes);

        $stmt->bindValue(13, $model->fk_marca);

        $stmt->bindValue(14, $model->fk_tipo);

        $stmt->bindValue(15, $model->fk_combustivel);

        $stmt->bindValue(16, $model->fk_fabricante);

        $stmt->execute();

    }

    public function Update(VeiculoModel $model)
    {



    }

    public function Delete(int $id)
    {



    }

    public function Select()
    {



    }

    public function SelectByID(int $id)
    {



    }

}

?>