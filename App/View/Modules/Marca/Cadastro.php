<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="<?= FAVICON ?>">

        <link rel="stylesheet" type="text/css" href="/View/Modules/Marca/CSS/Cadastro.css">

        <title> Cadastro de Marcas </title>

    </head>

    <body>

        <fieldset>

            <div id="container">

                <legend style="color: #FFFFFF; font-weight: bolder"> Cadastro de Marcas </legend>

                <form method="post" action="/marca/cadastro/salvar" id="form">

                    <input type="hidden" name="id" value="<?= $model[0]->id ?>">

                    <label for="nome"> Marca: </label>
                    <input type="text" name="nome" value="<?= $model[0]->nome ?>" maxlength="40" required>

                    <label for="fabricante"> Fabricante: </label>
                    <Select name="fabricante" required>

                        <option value="<?= NULL ?>"> Selecione </option>

                        <?php foreach($model[1] as $fabricante): ?>

                            <?php if(isset($_GET["id"]) && $model[0]->fk_fabricante != NULL  && $fabricante->id == $model[0]->fk_fabricante): ?>

                                <option value="<?= $fabricante->id ?>" selected> <?= $fabricante->descricao ?> </option>

                            <?php else: ?>

                                <option value="<?= $fabricante->id ?>"> <?= $fabricante->descricao ?> </option>

                            <?php endif ?>

                        <?php endforeach ?>

                    </Select>

                    <button type="submit"> SALVAR </button>

                </form>

                <div id="others">

                    <button id="btn_voltar"> <a href="/"> VOLTAR </a> </button>

                    <button id="btn_listagem"> <a href="/marca/listagem"> LISTAGEM </a> </button>

                </div>

            </div>

        </fieldset>
        
    </body>

</html>