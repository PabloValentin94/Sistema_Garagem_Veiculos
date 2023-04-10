<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="<?= FAVICON ?>">

        <link rel="stylesheet" type="text/css" href="/View/Modules/Fabricante/CSS/Cadastro.css">

        <title> Cadastro de Fabricantes </title>

    </head>

    <body>

        <fieldset>

            <div id="container">

                <legend style="color: #FFFFFF; font-weight: bolder"> Cadastro de Fabricantes </legend>

                <form method="post" action="/fabricante/cadastro/salvar" id="form">

                    <input type="hidden" name="id" value="<?= $model->id ?>">

                    <label for="descricao"> Fabricante: </label>
                    <input type="text" name="descricao" value="<?= $model->descricao ?>" maxlength="100" required>

                    <button type="submit"> SALVAR </button>

                </form>

                <div id="others">

                    <button id="btn_voltar"> <a href="/"> VOLTAR </a> </button>

                    <button id="btn_listagem"> <a href="/fabricante/listagem"> LISTAGEM </a> </button>

                </div>

            </div>

        </fieldset>
        
    </body>

</html>