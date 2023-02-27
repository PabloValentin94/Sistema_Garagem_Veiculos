<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="<?= FAVICON ?>">

        <link rel="stylesheet" type="text/css" href="/View/Modules/Veiculo/CSS/Observacoes.css">

        <title> Observações do Veículo </title>

    </head>

    <body>

        <fieldset>

            <div id="container">

                <legend style="color: #FFFFFF; font-weight: bolder"> Observações do Veículo <?= $_GET["id_veiculo"] . " (Número do Chassi: " . $model->numero_chassi . ")" ?> </legend>

                <form method="post" action="/veiculo/cadastro/salvar" id="form">

                    <input type="hidden" name="id_veiculo" value="<?= $_GET["id_veiculo"] ?>">

                    <input type="hidden" name="id" value="<?= $model->id ?>">

                    <input type="hidden" name="numero_chassi" value="<?= $model->numero_chassi ?>">

                    <input type="hidden" name="modelo" value="<?= $model->modelo ?>">

                    <input type="hidden" name="ano" value="<?= $model->ano ?>">

                    <input type="hidden" name="cor" value="<?= $model->cor ?>">

                    <input type="hidden" name="quilometragem" value="<?= $model->quilometragem ?>">

                    <input type="hidden" name="revisao" value="<?= $model->revisao ?>">

                    <input type="hidden" name="sinistro" value="<?= $model->sinistro ?>">

                    <input type="hidden" name="roubo_furto" value="<?= $model->roubo_furto ?>">

                    <input type="hidden" name="aluguel" value="<?= $model->aluguel ?>">

                    <input type="hidden" name="venda" value="<?= $model->venda ?>">

                    <input type="hidden" name="particular" value="<?= $model->particular ?>">

                    <label for="observacoes"> Observações: </label>
                    <textarea name="observacoes" cols="30" rows="10" maxlength="255"> <?= $model->observacoes ?> </textarea>

                    <input type="hidden" name="marca" value="<?= $model->fk_marca ?>">

                    <input type="hidden" name="tipo" value="<?= $model->fk_tipo ?>">

                    <input type="hidden" name="combustivel" value="<?= $model->fk_combustivel ?>">

                    <input type="hidden" name="fabricante" value="<?= $model->fk_fabricante ?>">

                    <button type="submit"> SALVAR </button>

                </form>

                <div id="others">

                    <button id="btn_voltar"> <a href="/veiculo/cadastro?id=<?= $_GET["id_veiculo"] ?>"> VOLTAR </a> </button>

                </div>

            </div>

        </fieldset>
        
    </body>

</html>