<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="<?= FAVICON ?>">

        <link rel="stylesheet" type="text/css" href="/View/Modules/Veiculo/CSS/Cadastro.css">

        <title> Cadastro de Veículos </title>

    </head>

    <body>

        <fieldset>

            <div id="container">

                <legend style="color: #FFFFFF; font-weight: bolder"> Cadastro de Veículos </legend>

                <form method="post" action="/veiculo/cadastro/salvar" id="form">

                    <input type="hidden" name="id" value="<?= $model[0]->id ?>">

                    <div class="line-text">

                        <div class="field-text">

                            <label for="numero_chassi"> Número do chassi: </label>
                            <input type="text" name="numero_chassi" value="<?= $model[0]->numero_chassi ?>" minlength="17" maxlength="17" required>

                        </div>

                        <div class="field-text">

                            <label for="marca"> Marca: </label>
                            <select name="marca">

                                <option value="<?= NULL ?>"> Selecione </option>

                                <?php foreach($model[1] as $marca): ?>

                                    <?php if(isset($_GET["id"]) && $model[0]->fk_marca != NULL  && $marca->id == $model[0]->fk_marca): ?>

                                        <option value="<?= $marca->id ?>" selected> <?= $marca->nome ?> </option>

                                    <?php else: ?>

                                        <option value="<?= $marca->id ?>"> <?= $marca->nome ?> </option>

                                    <?php endif ?>

                                <?php endforeach ?>

                            </select>

                        </div>

                    </div>

                    <div class="line-text">

                        <div class="field-text">

                            <label for="modelo"> Modelo: </label>
                            <input type="text" name="modelo" value="<?= $model[0]->modelo ?>" required>

                        </div>

                        <div class="field-text">

                            <label for="cor"> Cor: </label>
                            <input type="text" name="cor" value="<?= $model[0]->cor ?>">

                        </div>

                    </div>

                    <div class="line-text">

                        <div class="field-text">

                            <label for="ano"> Ano: </label>
                            <input type="number" name="ano" min="1886" max="2100" value="<?= $model[0]->ano ?>" required>

                        </div>

                        <div class="field-text">

                            <label for="quilometragem"> Quilometragem: </label>
                            <input type="number" name="quilometragem" value="<?= $model[0]->quilometragem ?>" required>

                        </div>

                    </div>

                    <div class="line-text">

                        <div class="field-text">

                            <label for="tipo"> Tipo: </label>
                            <select name="tipo">

                                <option value="<?= NULL ?>"> Selecione </option>

                                <?php foreach($model[2] as $tipo): ?>

                                    <?php if(isset($_GET["id"]) && $model[0]->fk_tipo != NULL && $tipo->id == $model[0]->fk_tipo): ?>

                                        <option value="<?= $tipo->id ?>" selected> <?= $tipo->descricao ?> </option>

                                    <?php else: ?>

                                        <option value="<?= $tipo->id ?>"> <?= $tipo->descricao ?> </option>

                                    <?php endif ?>

                                <?php endforeach ?>

                            </select>

                        </div>

                        <div class="field-text">

                            <label for="combustivel"> Combustível: </label>
                            <select name="combustivel">

                                <option value="<?= NULL ?>"> Selecione </option>

                                <?php foreach($model[3] as $combustivel): ?>

                                    <?php if(isset($_GET["id"]) && $model[0]->fk_combustivel != NULL  && $combustivel->id == $model[0]->fk_combustivel): ?>

                                        <option value="<?= $combustivel->id ?>" selected> <?= $combustivel->descricao ?> </option>

                                    <?php else: ?>

                                        <option value="<?= $combustivel->id ?>"> <?= $combustivel->descricao ?> </option>

                                    <?php endif ?>

                                <?php endforeach ?>

                            </select>

                        </div>

                        <div class="field-text">

                            <label for="fabricante"> Fabricante: </label>
                            <select name="fabricante">

                                <option value="<?= NULL ?>"> Selecione </option>

                                <?php foreach($model[4] as $fabricante): ?>

                                    <?php if(isset($_GET["id"]) && $model[0]->fk_fabricante != NULL  && $fabricante->id == $model[0]->fk_fabricante): ?>

                                        <option value="<?= $fabricante->id ?>" selected> <?= $fabricante->descricao ?> </option>

                                    <?php else: ?>

                                        <option value="<?= $fabricante->id ?>"> <?= $fabricante->descricao ?> </option>

                                    <?php endif ?>

                                <?php endforeach ?>

                            </select>

                        </div>

                    </div>

                    <div class="line-checkbox">

                        <div class="field-checkbox">

                            <label for="revisao"> Revisado? </label>

                            <?php if($model[0]->revisao == 1): ?>

                                <input type="checkbox" name="revisao" checked>

                            <?php else: ?>

                                <input type="checkbox" name="revisao">

                            <?php endif ?>

                        </div>

                        <div class="field-checkbox">

                            <label for="sinistro"> Sinistrado? </label>
                            
                            <?php if($model[0]->sinistro == 1): ?>

                                <input type="checkbox" name="sinistro" checked>

                            <?php else: ?>

                                <input type="checkbox" name="sinistro">

                            <?php endif ?>

                        </div>

                        <div class="field-checkbox">

                            <label for="roubo_furto"> Roubado? / Furtado? </label>
                            
                            <?php if($model[0]->roubo_furto == 1): ?>

                                <input type="checkbox" name="roubo_furto" checked>

                            <?php else: ?>

                                <input type="checkbox" name="roubo_furto">

                            <?php endif ?>

                        </div>

                    </div>

                    <div class="line-checkbox">

                        <div class="field-checkbox">

                            <label for="aluguel"> Aluga-se? </label>
                            
                            <?php if($model[0]->aluguel == 1): ?>

                                <input type="checkbox" name="aluguel" checked>

                            <?php else: ?>

                                <input type="checkbox" name="aluguel">

                            <?php endif ?>

                        </div>

                        <div class="field-checkbox">

                            <label for="venda"> Vende-se? </label>
                            
                            <?php if($model[0]->venda == 1): ?>

                                <input type="checkbox" name="venda" checked>

                            <?php else: ?>

                                <input type="checkbox" name="venda">

                            <?php endif ?>

                        </div>

                        <div class="field-checkbox">

                            <label for="particular"> Veículo particular? </label>
                            
                            <?php if($model[0]->particular == 1): ?>

                                <input type="checkbox" name="particular" checked>

                            <?php else: ?>

                                <input type="checkbox" name="particular">

                            <?php endif ?>

                        </div>

                    </div>

                    <input type="hidden" name="observacoes" value="<?= $model[0]->observacoes ?>">

                    <button type="submit"> SALVAR </button>

                </form>

                <div id="others">

                    <button id="btn_voltar"> <a href="/"> VOLTAR </a> </button>

                    <button id="btn_listagem"> <a href="/veiculo/listagem"> LISTAGEM </a> </button>

                </div>

            </div>

        </fieldset>
        
    </body>

</html>