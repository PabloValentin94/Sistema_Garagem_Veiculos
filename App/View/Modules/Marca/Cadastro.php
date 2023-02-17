<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="<?= FAVICON ?>">

        <link rel="stylesheet" type="text/css" href="/View/Modules/Marca/CSS/Styles.css">

        <title> Cadastro de Marcas </title>

    </head>

    <body>

        <fieldset>

            <div id="container">

                <legend style="color: #FFFFFF; font-weight: bolder"> Cadastro de Marcas </legend>

                <form method="post" action="/marca/cadastro/salvar" id="form">

                    <input type="hidden" name="id" value="<?= $model->id ?>">

                    <label for="nome"> Nome: </label>
                    <input type="text" name="nome" value="<?= $model->nome ?>">

                    <button type="submit"> SALVAR </button>

                </form>

            </div>

        </fieldset>
        
    </body>

</html>