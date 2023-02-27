<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="<?= FAVICON ?>">

        <link rel="stylesheet" type="text/css" href="/View/Modules/Combustivel/CSS/Listagem.css">

        <title> Listagem de Combustíveis </title>

    </head>

    <body>

        <div id="container">

            <table id="header">

                <tr>

                    <th> Descrição </th>

                    <th> Botão - Editar </th>

                    <th> Botão - Excluir </th>

                </tr>

            </table>

            <div id="scroll">

                <table id="content">

                    <?php foreach($model->rows as $registro): ?>

                        <tr>

                            <td> <?= $registro->descricao ?> </td>

                            <td> <button> <a href="/combustivel/cadastro?id=<?= $registro->id ?>"> EDITAR </a> </button> </td>

                            <td> <button> <a href="/combustivel/deletar?id=<?= $registro->id ?>"> EXCLUIR </a> </button> </td>

                        </tr>

                    <?php endforeach ?>

                </table>

            </div>

            <button id="btn_voltar"> <a href="/combustivel/cadastro"> VOLTAR </a> </button>

        </div>
        
    </body>

</html>