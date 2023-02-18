<?php

namespace App\Controller;

use App\Model\TipoModel;

class TipoController extends Controller
{

    public static function Index()
    {

        $model = new TipoModel();

        if(isset($_GET["id"]))
        {

            $model = $model->GetByID((int) $_GET["id"]);

        }

        parent::render("Tipo/Cadastro", $model);

    }

    public static function Register()
    {

        $model = new TipoModel();

        $model->id = $_POST["id"];

        $model->descricao = $_POST["descricao"];

        $model->Save();

    }

    public static function Remove()
    {

        $model = new TipoModel();

        $model->Erase((int) $_GET["id"]);

    }

    public static function Table()
    {

        $model = new TipoModel();

        $model->GetAllRows();

        parent::render("Tipo/Listagem", $model);

    }

}

?>