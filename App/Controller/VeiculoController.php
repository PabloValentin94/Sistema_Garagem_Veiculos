<?php

namespace App\Controller;

use App\Model\VeiculoModel;

use App\Model\MarcaModel;
use App\Model\TipoModel;
use App\Model\CombustivelModel;
use App\Model\FabricanteModel;

class VeiculoController extends Controller
{

    public static function Index()
    {

        $model = new VeiculoModel();

        $marca = new MarcaModel();
        $marca->GetAllRows();

        $tipo = new TipoModel();
        $tipo->GetAllRows();

        $combustivel = new CombustivelModel();
        $combustivel->GetAllRows();

        $fabricante = new FabricanteModel();
        $fabricante->GetAllRows();

        if(isset($_GET["id"]))
        {

            $model = $model->GetByID((int) $_GET["id"]);

        }

        $dados = [

            $model,

            $marca->rows,

            $tipo->rows,

            $combustivel->rows,

            $fabricante->rows

        ];

        /*var_dump($dados[0]);

        exit();*/

        parent::render("Veiculo/Cadastro", $dados);

    }

    public static function Register()
    {

        $model = new VeiculoModel();

        if(isset($_POST["id_veiculo"]))
        {

            $model->id = $_POST["id"];

            $model->numero_chassi = $_POST["numero_chassi"];

            $model->modelo = $_POST["modelo"];

            $model->ano = (int) $_POST["ano"];

            $model->cor = $_POST["cor"];

            $model->quilometagem = (double) $_POST["quilometragem"];

            $model->revisao = $_POST["revisao"];

            $model->sinistro = $_POST["sinistro"];

            $model->roubo_furto = $_POST["roubo_furto"];

            $model->aluguel = $_POST["aluguel"];

            $model->venda = $_POST["venda"];

            $model->particular = $_POST["particular"];

            $model->observacoes = trim($_POST["observacoes"]);

            if($_POST["marca"] == NULL)
            {

                $model->fk_marca = NULL;

            }

            else
            {

                $model->fk_marca = (int) $_POST["marca"];

            }

            if($_POST["tipo"] == NULL)
            {

                $model->fk_tipo = NULL;

            }

            else
            {

                $model->fk_tipo = $_POST["tipo"];
                
            }

            if($_POST["combustivel"] == NULL)
            {

                $model->fk_combustivel = NULL;

            }

            else
            {

                $model->fk_combustivel = (int) $_POST["combustivel"];
                
            }

            if($_POST["fabricante"] == NULL)
            {

                $model->fk_fabricante = NULL;

            }

            else
            {

                $model->fk_fabricante = (int) $_POST["fabricante"];
                
            }

            $model->Save();

            if(empty($_POST["id"]))
            {

                header("Location: /");

            }

            else
            {

                header("Location: /");

            }

        }

        else
        {

            $model->id = $_POST["id"];

            $model->numero_chassi = $_POST["numero_chassi"];

            $model->modelo = $_POST["modelo"];

            $model->ano = (int) $_POST["ano"];

            $model->cor = $_POST["cor"];

            $model->quilometagem = (double) $_POST["quilometragem"];

            if(isset($_POST["revisao"]))
            {

                $model->revisao = 1;

            }

            else
            {

                $model->revisao = 0;

            }

            if(isset($_POST["sinistro"]))
            {

                $model->sinistro = 1;

            }

            else
            {

                $model->sinistro = 0;

            }

            if(isset($_POST["roubo_furto"]))
            {

                $model->roubo_furto = 1;

            }

            else
            {

                $model->roubo_furto = 0;

            }

            if(isset($_POST["aluguel"]))
            {

                $model->aluguel = 1;

            }

            else
            {

                $model->aluguel = 0;

            }

            if(isset($_POST["venda"]))
            {

                $model->venda = 1;

            }

            else
            {

                $model->venda = 0;

            }

            if(isset($_POST["particular"]))
            {

                $model->particular = 1;

            }

            else
            {

                $model->particular = 0;

            }

            $model->observacoes = $_POST["observacoes"];

            if($_POST["marca"] == NULL)
            {

                $model->fk_marca = NULL;

            }

            else
            {

                $model->fk_marca = (int) $_POST["marca"];

            }

            if($_POST["tipo"] == NULL)
            {

                $model->fk_tipo = NULL;

            }

            else
            {

                $model->fk_tipo = $_POST["tipo"];
                
            }

            if($_POST["combustivel"] == NULL)
            {

                $model->fk_combustivel = NULL;

            }

            else
            {

                $model->fk_combustivel = (int) $_POST["combustivel"];
                
            }

            if($_POST["fabricante"] == NULL)
            {

                $model->fk_fabricante = NULL;

            }

            else
            {

                $model->fk_fabricante = (int) $_POST["fabricante"];
                
            }

            $model->Save();

            if(empty($_POST["id"]))
            {

                $id_veiculo = $model->GetMaxID();

                header("Location: /veiculo/observacoes?id_veiculo=$id_veiculo");

            }

            else
            {

                $id_veiculo = (int) $_POST["id"];

                header("Location: /veiculo/observacoes?id_veiculo=$id_veiculo");

            }

        }

    }

    public static function Observations()
    {

        $model = new VeiculoModel();

        $model = $model->GetByID((int) $_GET["id_veiculo"]);

        parent::render("Veiculo/Observacoes", $model);

    }

    public static function Remove()
    {

        $model = new VeiculoModel();

        $model->Erase((int) $_GET["id"]);

    }

    public static function Table()
    {

        parent::render("Veiculo/Listagem");

    }

}

?>