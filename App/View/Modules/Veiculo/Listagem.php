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

            <div id="search">

                <form method="post" action="/veiculo/listagem">

                    <div id="selection_marca">

                        <label for="marca"> Marca: </label>
                        <select name="marca">

                            <option value="<?= NULL ?>"> Selecione </option>

                            <?php foreach($model[1] as $marca): ?>

                                <option value="<?= $marca->id ?>"> <?= $marca->nome ?> </option>

                            <?php endforeach ?>

                        </select>

                    </div>

                    <div id="selection_fabricante">

                        <label for="fabricante"> Fabricante: </label>
                        <select name="fabricante">

                            <option value="<?= NULL ?>"> Selecione </option>

                            <?php foreach($model[2] as $fabricante): ?>

                                <option value="<?= $fabricante->id ?>"> <?= $fabricante->descricao ?> </option>

                            <?php endforeach ?>

                        </select>

                    </div>

                    <div id="botao_procurar">

                        <button type="submit"> PROCURAR </button>

                    </div>

                </form>

            </div>

            <table id="header">

                <tr>

                    <th> Número do Chassi </th>

                    <th> Marca </th>

                    <th> Fabricante </th>

                    <th> Modelo </th>

                    <th> Cor </th>

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

                            <td> <?= $registro->modelo ?> </td>

                            <td> <?= $registro->cor ?> </td>

                            <td> <button> <a href="/veiculo/visualizacao?id=<?= $registro->id ?>"> VISUALIZAR </a> </button> </td>

                        </tr>

                    <?php endforeach ?>

                </table>

            </div>

            <button id="btn_voltar"> <a href="/veiculo/cadastro"> VOLTAR </a> </button>

        </div>

    </body>

</html>