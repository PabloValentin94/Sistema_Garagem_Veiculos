<?php

// Namespaces:

use App\Controller\MarcaController;

$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

switch($url)
{

    // Tela inicial:

    case "/":
        echo "Início";
    break;

    // Marcas:

    case "/marca/cadastro":
        MarcaController::Index();
    break;

    case "/marca/cadastro/salvar":
        MarcaController::Register();
    break;

    case "/marca/deletar":
        MarcaController::Remove();
    break;

    case "/marca/listagem":
        MarcaController::Table();
    break;

    // Exibição padrão:

    default:
        echo "Erro 404!";

}

?>