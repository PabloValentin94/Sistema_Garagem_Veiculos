<?php

namespace App\Controller;

use App\Model\FabricanteModel;

use App\Model\MarcaModel;

class FabricanteController extends Controller
{

    public static function Index()
    {

        $model = new FabricanteModel();

        $marca = new MarcaModel();
        $marca->GetAllRows();

        if(isset($_GET["id"]))
        {

            $model = $model->GetByID((int) $_GET["id"]);

        }

        $dados = [

            $model,

            $marca->rows

        ];

        //include "View/Modules/Fabricante/Cadastro.php";

        parent::render("Fabricante/Cadastro", $dados);

    }

    public static function Register()
    {

        $model = new FabricanteModel();

        $model->id = $_POST["id"];

        $model->descricao = $_POST["descricao"];

        $model->fk_marca = $_POST["marca"];

        $model->Save();

    }

    public static function Remove()
    {

        $model = new FabricanteModel();

        $model->Erase((int) $_GET["id"]);

    }

    public static function Table()
    {

        $model = new FabricanteModel();

        $marca = new MarcaModel();

        $model->GetAllRows();

        $marca->GetAllRows();

        $dados = [

            $model->rows,

            $marca->rows

        ];

        parent::render("Fabricante/Listagem", $dados);

    }

}

?>