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

                    <input type="hidden" name="id" value="<?= $model[0]->id ?>">

                    <label for="descricao"> Fabricante: </label>
                    <input type="text" name="descricao" value="<?= $model[0]->descricao ?>" maxlength="100" required>

                    <label for="marca"> Marca: </label>
                    <Select name="marca" required>

                        <option value="<?= NULL ?>"> Selecione </option>

                        <?php foreach($model[1] as $marca): ?>

                            <?php if(isset($_GET["id"]) && $model[0]->fk_marca != NULL  && $marca->id == $model[0]->fk_marca): ?>

                                <option value="<?= $marca->id ?>" selected> <?= $marca->nome ?> </option>

                            <?php else: ?>

                                <option value="<?= $marca->id ?>"> <?= $marca->nome ?> </option>

                            <?php endif ?>

                        <?php endforeach ?>

                    </Select>

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