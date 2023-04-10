<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="<?= FAVICON ?>">

        <link rel="stylesheet" type="text/css" href="/View/Modules/Fabricante/CSS/Listagem.css">

        <title> Listagem de Fabricantes </title>

    </head>

    <body>

        <div id="container">

            <table id="header">

                <tr>

                    <th> Fabricante </th>

                    <th> Botão - Editar </th>

                    <th> Botão - Excluir </th>

                </tr>

            </table>

            <div id="scroll">

                <table id="content">

                    <?php foreach($model->rows as $registro): ?>

                        <tr>

                            <td> <?= $registro->descricao ?> </td>

                            <td> <button> <a href="/fabricante/cadastro?id=<?= $registro->id ?>"> EDITAR </a> </button> </td>

                            <td> <button> <a href="/fabricante/deletar?id=<?= $registro->id ?>"> EXCLUIR </a> </button> </td>

                        </tr>

                    <?php endforeach ?>

                </table>

            </div>

            <button id="btn_voltar"> <a href="/fabricante/cadastro"> VOLTAR </a> </button>

        </div>
        
    </body>

</html>