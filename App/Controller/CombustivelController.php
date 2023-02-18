<?php

namespace App\Controller;

use App\Model\CombustivelModel;

class CombustivelController extends Controller
{

    public static function Index()
    {

        $model = new CombustivelModel();

        if(isset($_GET["id"]))
        {

            $model = $model->GetByID((int) $_GET["id"]);

        }

        parent::render("Combustivel/Cadastro", $model);

    }

    public static function Register()
    {

        $model = new CombustivelModel();

        $model->id = $_POST["id"];

        $model->descricao = $_POST["descricao"];

        $model->Save();

    }

    public static function Remove()
    {

        $model = new CombustivelModel();

        $model->Erase((int) $_GET["id"]);

    }

    public static function Table()
    {

        $model = new CombustivelModel();

        $model->GetAllRows();

        parent::render("Combustivel/Listagem", $model);

    }

}

?>