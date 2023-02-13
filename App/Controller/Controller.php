<?php

namespace App\Controller;

abstract class Controller
{

    protected function render($view, $model = null)
    {

        $arquivo = VIEWS . $view . ".php";

        if(file_exists($arquivo))
        {

            include $arquivo;

        }

        else
        {

            exit("Arquivo não encontrado! Nome do arquivo especificado: " . $arquivo);

        }

    }

}

?>