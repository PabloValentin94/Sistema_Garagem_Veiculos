function Verificar_Campos()
{

    const numero_chassi = document.getElementById("numero_chassi").innerHTML;

    const modelo = document.getElementById("modelo").innerHTML;

    const cor = document.getElementById("cor").innerHTML;

    const campos = [numero_chassi, modelo, cor];

    //const tamanhos_campos = [numero_chassi.length];

    /*const ano = document.getElementById("ano");

    const quilometragem = document.getElementById("quilometragem");*/

    var indice = 0;

    for(i = 0; i < 3; i++)
    {

        indice++;

        const resultado = Verificacao_Individual(campos[i], campos[i].length);

        if(resultado == true)
        {

            /*if(indice == 1)
            {

                document.getElementById("numero_chassi").innerHTML = "";

                document.getElementById("numero_chassi").innerHTML += "Dado não definido.";

            }

            else if(indice == 2)
            {

                document.getElementById("numero_chassi").innerHTML = "Dado não definido.";

                document.getElementById("modelo").innerHTML = "Dado não definido.";

            }

            else
            {

                document.getElementById("numero_chassi").innerHTML = "Dado não definido.";

                document.getElementById("modelo").innerHTML = "Dado não definido.";

                document.getElementById("cor").innerHTML = "Dado não definido.";

            }*/

            alert("Preencha todos os campos do formulário corretamente! Não são permitidos campos preenchidos com espaços em branco.");

            break;

        }

        else
        {

            alert("Teste");

        }

    }
    
}

function Verificacao_Individual(campo, tamanho_campo)
{

    const caracteres = [];

    for(i = 0; i < tamanho_campo; i++)
    {

        caracteres.push(campo[i]);

    }

    var numero_campos_brancos = 0;

    for(j = 0; j < tamanho_campo; j++)
    {

        if(caracteres[j] == "")
        {

            numero_campos_brancos++;

        }

    }

    if(numero_campos_brancos == tamanho_campo)
    {

        return true;

    }

    else
    {

        return false;

    }

}