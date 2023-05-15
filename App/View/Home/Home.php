<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="<?= FAVICON ?>">

        <link rel="stylesheet" type="text/css" href="/View/Home/CSS/Styles.css">

        <title> Página inicial </title>

    </head>

    <body>

        <div id="backup">

            <div id="botoes_backup">

                <label> Backup: </label>

                <button id="btn_exportar"> <a href="/backup/exportar"> Salvar </a> </button>

                <button id="btn_restaurar"> <a href="/backup/importar"> Restaurar </a> </button>

            </div>

        </div>

        <div id="container">

            <div class="small-line">

                <div id="marca">

                    <a href="/marca/cadastro"> <img src="/View/Home/Images/Marca.png" alt="Marca-Icon"> </a>

                </div>

                <div id="combustivel">

                    <a href="/combustivel/cadastro"> <img src="/View/Home/Images/Combustivel.png" alt="Combustível-Icon"> </a>

                </div>

            </div>

            <div id="big-line">

                <div id="veiculo">

                    <a href="/veiculo/cadastro">  <img src="/View/Home/Images/Veiculo.png" alt="Veículo-Icon"> </a>

                </div>

            </div>

            <div class="small-line">

                <div id="tipo">

                    <a href="/tipo/cadastro"> <img src="/View/Home/Images/Tipo.png" alt="Tipo-Icon"> </a>

                </div>

                <div id="fabricante">

                    <a href="/fabricante/cadastro"> <img src="/View/Home/Images/Fabricante.png" alt="Fabricante-Icon"> </a>

                </div>

            </div>

        </div>
        
    </body>

</html>