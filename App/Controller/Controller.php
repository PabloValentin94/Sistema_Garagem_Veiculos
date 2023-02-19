<?php

namespace App\Controller;

abstract class Controller
{

    /*
        Algo importante a se explicar, é que os nomes estabelecidos para os parâmetros,
        tem importância. Um erro muito comum, é o de colocar uma variável com o nome
        $dados, por exemplo, como o parâmetro $model e, ao utilizar essa variável, usar o
        nome do que foi passado como parâmetro, quando, o correto, é nome dele em si. Um
        exemplo, é que, se usarmos a variável $dados, dentro de um arquivo HTML, ocasionará um
        erro, de variável inexistente, mas, ao substituirmos por $model, que é o nome do
        parâmetro, e não de seu valor, esse erro desaparecerá e o sistema voltará a funcionar
        normalmente. Por isso é muito importante ter conhecimento desse conceito.
    */

    protected static function render($view, $model = null)
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