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

                    <th> Descrição </th>

                    <th> Afiliação (Marca) </th>

                    <th> Botão - Editar </th>

                    <th> Botão - Excluir </th>

                </tr>

            </table>

            <div id="scroll">

                <table id="content">

                    <?php foreach($model[0] as $registro): ?>

                        <tr>

                            <td> <?= $registro->descricao ?> </td>

                            <!-- Detalhe importante: usamos a variável fk_marca como
                                 parâmetro, porém, para que funcione corretamente,
                                 precisamos subtrair 1 de seu valor.
                                 Motivo: No Banco de Dados, as IDs de registros, começam a
                                 partir do 1, porém, para utilizá-los no PHP, armazenamos
                                 os objetos em um array, cujo índice inicial é 0. -->

                            <td> <?= $model[1][$registro->fk_marca - 1]->nome ?> </td>

                            <td> <button> <a href="/fabricante/cadastro?id=<?= $registro->id ?>"> EDITAR </a> </button> </td>

                            <td> <button> <a href="/fabricante/deletar?id=<?= $registro->id ?>"> EXCLUIR </a> </button> </td>

                        </tr>

                    <?php endforeach ?>

                </table>

            </div>

        </div>
        
    </body>

</html>