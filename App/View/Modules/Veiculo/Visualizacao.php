<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="<?= FAVICON ?>">

        <link rel="stylesheet" type="text/css" href="/View/Modules/Veiculo/CSS/Visualizacao.css">

        <title> Visualização de Veículo </title>

    </head>

    <body>

        <div id="container">

            <div id="exibition">

                <div id="titles">

                    <table id="header">

                        <tr> <th> Número do Chassi </th> <th> Modelo </th> </tr>

                        <tr> <th> Ano </th> <th> Quilometragem </th> </tr>

                        <tr> <th> Cor </th> <th> Revisado? </th> </tr>

                        <tr> <th> Sinistrado? </th> <th> Roubado? / Furtado? </th> </tr>

                        <tr> <th> Aluga-se? </th> <th> Vende-se? </th> </tr>

                        <tr> <th> Veículo Particular? </th> <th> Marca </th> </tr>

                        <tr> <th> Fabricante </th> <th> Tipo </th> </tr>

                        <tr> <th> Combustível </th> <th> Observações </th> </tr>

                        <tr> <th> Botão - Editar </th> <th> Botão - Excluir </th> </tr>

                    </table>
                
                </div>

                <div id="register">

                    <table id="content">

                        <?php if($model[0] == NULL): ?>

                            <tr> <td> Número do Chassi </td> <td> Modelo </td> </tr>

                            <tr> <td> Ano </td> <td> Quilometragem </td> </tr>

                            <tr> <td> Cor </td> <td> Revisado? </td> </tr>

                            <tr> <td> Sinistrado? </td> <td> Roubado? / Furtado? </td> </tr>

                            <tr> <td> Aluga-se? </td> <td> Vende-se? </td> </tr>

                            <tr> <td> Veículo Particular? </td> <td> Marca </td> </tr>

                            <tr> <td> Fabricante </td> <td> Tipo </td> </tr>

                            <tr> <td> Combustível </td> <td> Observações </td> </tr>

                        <?php else: ?>

                            <tr>
                                
                                <td> <?php if($model[0]->numero_chassi != ""): ?> <?= $model[0]->numero_chassi ?> <?php else: ?> Não informado. <?php endif ?> </td>
                                
                                <td> <?php if($model[0]->modelo != ""): ?> <?= $model[0]->modelo ?> <?php else: ?> Não informado. <?php endif ?> </td>
                            
                            </tr>

                            <tr> <td> <?= $model[0]->ano ?> </td> <td> <?= $model[0]->quilometragem ?> Km </td> </tr>

                            <tr>
                                
                                <td> <?php if($model[0]->cor != ""): ?> <?= $model[0]->cor ?> <?php else: ?> Não informada. <?php endif ?> </td>
                                
                                <td> <?php if($model[0]->revisao == 0): ?> <input type="checkbox" disabled checked> <?php else: ?> <input type="checkbox" disabled> <?php endif ?> </td> </td>
                            
                            </tr>

                            <tr>
                                
                                <td> <?php if($model[0]->sinistro == 0): ?> <input type="checkbox" disabled checked> <?php else: ?> <input type="checkbox" disabled> <?php endif ?> </td>
                                    
                                <td> <?php if($model[0]->roubo_furto == 0): ?> <input type="checkbox" disabled checked> <?php else: ?> <input type="checkbox" disabled> <?php endif ?> </td>
                            
                            </tr>

                            <tr>
                                
                                <td> <?php if($model[0]->aluguel == 0): ?> <input type="checkbox" disabled checked> <?php else: ?> <input type="checkbox" disabled> <?php endif ?> </td> </td>
                                
                                <td> <?php if($model[0]->venda == 0): ?> <input type="checkbox" disabled checked> <?php else: ?> <input type="checkbox" disabled> <?php endif ?> </td> </td>
                            
                            </tr>

                            <tr>
                                
                                <td> <?php if($model[0]->particular == 0): ?> <input type="checkbox" disabled checked> <?php else: ?> <input type="checkbox" disabled> <?php endif ?> </td> </td>
                                
                                <td> <?php if($model[1] != NULL): ?> <?= $model[1]->nome ?> <?php else: ?> Não informado. <?php endif ?> </td>
                            
                            </tr>

                            <tr>
                                
                                <td> <?php if($model[4] != NULL): ?> <?= $model[4]->descricao ?> <?php else: ?> Não informado. <?php endif ?> </td>
                                
                                <td> <?php if($model[2] != NULL): ?> <?= $model[2]->descricao ?> <?php else: ?> Não informado. <?php endif ?> </td>
                            
                            </tr>

                            <tr>
                                
                                <td> <?php if($model[3] != NULL): ?> <?= $model[3]->descricao ?> <?php else: ?> Não informado. <?php endif ?> </td>
                                
                                <td style="overflow-y: auto;"> <?php if($model[0]->observacoes != ""): ?> <?= $model[0]->observacoes ?> <?php else: ?> Nenhuma. <?php endif ?> </td>
                            
                            </tr>

                        <?php endif ?>

                        <tr>

                            <?php if($model[0] != NULL): ?>
                            
                                <td> <button> <a href="/veiculo/cadastro?id=<?= $model[0]->id ?>"> EDITAR </a> </button> </td>
                            
                                <td> <button> <a href="/veiculo/deletar?id=<?= $model[0]->id ?>"> EXCLUIR </a> </button> </td>

                            <?php else: ?>

                                <td> <button> <a href=""> EDITAR </a> </button> </td>
                            
                                <td> <button> <a href=""> EXCLUIR </a> </button> </td>
                        
                            <?php endif ?>

                        </tr>

                    </table>

                </div>

            </div>

            <button id="btn_voltar"> <a href="/veiculo/listagem"> VOLTAR </a> </button>

        </div>
        
    </body>

</html>