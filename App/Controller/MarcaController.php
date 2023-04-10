<?php

namespace App\Controller;

use App\Model\MarcaModel;

use App\Model\FabricanteModel;

class MarcaController extends Controller
{

    public static function Index()
    {

        $model = new MarcaModel();

        $fabricante = new FabricanteModel();

        $fabricante->GetAllRows();

        if(isset($_GET["id"]))
        {

            $model = $model->GetByID((int) $_GET["id"]);

        }

        $dados = [

            $model,

            $fabricante->rows

        ];

        parent::render("Marca/Cadastro", $dados);

    }

    public static function Register()
    {

        $model = new MarcaModel();

        $model->id = $_POST["id"];

        $model->nome = $_POST["nome"];

        $model->fk_fabricante = $_POST["fabricante"];

        $model->Save();

    }

    public static function Remove()
    {

        $model = new MarcaModel();

        $model->Erase((int) $_GET["id"]);

    }

    public static function Table()
    {

        $model = new MarcaModel();

        $fabricante = new FabricanteModel();

        $model->GetAllRows();

        $fabricante->GetAllRows();

        $dados = [

            $model->rows,

            $fabricante->rows

        ];

        parent::render("Marca/Listagem", $dados);

    }

}

?>