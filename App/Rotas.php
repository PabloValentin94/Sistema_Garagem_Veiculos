<?php

// Namespaces:

use App\Controller\MarcaController;
use App\Controller\TipoController;
use App\Controller\CombustivelController;
use App\Controller\FabricanteController;

$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

switch($url)
{

    // Tela inicial:

    case "/":
        include(BASEDIR . "App/View/Home/Home.php");
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

    // Tipos de Veículos:

    case "/tipo/cadastro":
        TipoController::Index();
    break;

    case "/tipo/cadastro/salvar":
        TipoController::Register();
    break;

    case "/tipo/deletar":
        TipoController::Remove();
    break;

    case "/tipo/listagem":
        TipoController::Table();
    break;

    // Tipos de Combustíveis:

    case "/combustivel/cadastro":
        CombustivelController::Index();
    break;

    case "/combustivel/cadastro/salvar":
        CombustivelController::Register();
    break;

    case "/combustivel/deletar":
        CombustivelController::Remove();
    break;

    case "/combustivel/listagem":
        CombustivelController::Table();
    break;

    // Fabricantes:

    case "/fabricante/cadastro":
        FabricanteController::Index();
    break;

    case "/fabricante/cadastro/salvar":
        FabricanteController::Register();
    break;

    case "/fabricante/deletar":
        FabricanteController::Remove();
    break;

    case "/fabricante/listagem":
        FabricanteController::Table();
    break;

    // Exibição padrão:

    default:
        include(BASEDIR . "App/View/Error/Error.php");

}

?>