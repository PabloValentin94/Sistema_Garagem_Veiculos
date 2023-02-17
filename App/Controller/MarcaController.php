<?php

namespace App\Controller;

use App\Model\MarcaModel;

class MarcaController extends Controller
{

    public static function Index()
    {

        $model = new MarcaModel();

        if(isset($_GET["id"]))
        {

            $model = $model->GetByID((int) $_GET["id"]);

        }

        parent::render("Marca/Cadastro", $model);

    }

    public static function Register()
    {

        $model = new MarcaModel();

        $model->id = $_POST["id"];

        $model->nome = $_POST["nome"];

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

        $model->GetAllRows();

        parent::render("Marca/Listagem", $model);

    }

}

?>