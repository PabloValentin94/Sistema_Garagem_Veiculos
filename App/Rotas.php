<?php

// Namespaces - Módulos:

use App\Controller\MarcaController;
use App\Controller\TipoController;
use App\Controller\CombustivelController;
use App\Controller\FabricanteController;
use App\Controller\VeiculoController;

// Namespace - Backup:

use App\Controller\BackupController;

/*// Namespace - Cadastro de Usuários:

use App\Controller\SignUpController;

// Namespace - Login de Usuários:

use App\Controller\SignInController;*/

$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

switch($url)
{

    // Tela inicial:

    case "/":
        /*if(SID != "") // SID -> variável superglobal que contém o valor do ID da sessão atual, caso exista.
            include(BASEDIR . "App/View/Home/Home.php");
        else
            include(BASEDIR. "App/View/SignUp/SignUp.php");*/
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

    // Veículos:

    case "/veiculo/cadastro":
        VeiculoController::Index();
    break;

    case "/veiculo/cadastro/salvar":
        VeiculoController::Register();
    break;

    case "/veiculo/observacoes":
        if(isset($_GET["id_veiculo"]))
            VeiculoController::Observations();
        else
            VeiculoController::Index();
    break;

    case "/veiculo/deletar":
        VeiculoController::Remove();
    break;

    case "/veiculo/listagem":
        VeiculoController::Table();
    break;

    case "/veiculo/visualizacao":
        VeiculoController::Exibition();
    break;

    // Backup:

    case "/backup/exportar":
        BackupController::Export_Backup();
    break;

    case "/backup/importar":
        BackupController::Import_Backup();
    break;

    // Exibição padrão:

    default:
        include(BASEDIR . "App/View/Error/Error.php");

}

?>