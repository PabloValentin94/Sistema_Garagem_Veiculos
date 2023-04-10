<?php

namespace App\Controller;

use App\Model\FabricanteModel;

class FabricanteController extends Controller
{

    public static function Index()
    {

        $model = new FabricanteModel();

        if(isset($_GET["id"]))
        {

            $model = $model->GetByID((int) $_GET["id"]);

        }

        //include "View/Modules/Fabricante/Cadastro.php";

        parent::render("Fabricante/Cadastro", $model);

    }

    public static function Register()
    {

        $model = new FabricanteModel();

        $model->id = $_POST["id"];

        $model->descricao = $_POST["descricao"];

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

        $model->GetAllRows();

        parent::render("Fabricante/Listagem", $model);

    }

}

?>