<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="<?= FAVICON ?>">

        <link rel="stylesheet" type="text/css" href="/View/Modules/Veiculo/CSS/Listagem.css">

        <title> Listagem de Veículos </title>

    </head>

    <body>

        <div id="container">

            <table id="header">

                <tr>

                    <th> Número do Chassi </th>

                    <th> Marca </th>

                    <th> Fabricante </th>

                    <th> Botão - Visualizar </th>

                </tr>

            </table>

            <div id="scroll">

                <table id="content">

                    <?php foreach($model[0] as $registro): ?>

                        <tr>

                            <td> <?= $registro->numero_chassi ?> </td>

                            <td> <?= $model[1][$registro->fk_marca - 1]->nome ?> </td>

                            <td> <?= $model[2][$registro->fk_fabricante - 1]->descricao ?> </td>

                            <td> <button> <a href="/veiculo/visualizacao?id=<?= $registro->id ?>"> VISUALIZAR </a> </button> </td>

                        </tr>

                    <?php endforeach ?>

                </table>

            </div>

            <button id="btn_voltar"> <a href="/veiculo/cadastro"> VOLTAR </a> </button>

        </div>

    </body>

</html>