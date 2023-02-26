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

        /*var_dump($dados);

        exit();*/

        parent::render("Veiculo/Cadastro", $dados);

    }

    public static function Register()
    {

        $model = new VeiculoModel();

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

        if(empty($_POST["observacoes"]))
        {

            $model->observacoes = NULL;

        }

        else
        {

            $model->observacoes = $_POST["observacoes"];

        }

        $model->fk_marca = $_POST["marca"];

        $model->fk_tipo = $_POST["tipo"];

        $model->fk_combustivel = $_POST["combustivel"];

        $model->fk_fabricante = $_POST["fabricante"];

        $model->Save();

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