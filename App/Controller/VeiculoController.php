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

        parent::render("Veiculo/Cadastro");

    }

    public static function Register()
    {



    }

    public static function Remove()
    {



    }

    public static function Table()
    {

        parent::render("Veiculo/Listagem");

    }

}

?>