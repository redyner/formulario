<!DOCTYPE html>
 <html lang="pt-br">
 <head>
   <link rel="stylesheet" href="style.css"/>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Formulário</title>
 </head>
 <body>
 <div>
    <?php

      include "conexao.php";

       $nome = $_GET["nnome"];

       $mae = $_GET["nmae"];
     
       $dn = $_GET["ndn"];
     
       $rua = $_GET["nrua"];
      
       $numero = $_GET["nnumero"];
       
       $tel = $_GET["ntel"];
      
       $cns = $_GET["ncns"];
       
       $cpf = $_GET["ncpf"];
      
       $sexo = $_GET["nsexo"];

       $login= $_GET["nlogin"];

       $senha1 = $_GET["nsenha1"];
      
       $senha2 = $_GET["nsenha2"];

       if (isset($senha1 ) && isset($senha2) && $senha1 == $senha2){

       $sql = "INSERT INTO `cadastro`(`Nome`, `Login`, `Mãe`, `DN`, `Rua/Av`, `Número`, `Tel`, `CNS`, `CPF`, `Sexo`, `Senha`) VALUES ( '$nome', '$login', '$mae', '$dn', '$rua', '$numero', '$tel', '$cns', '$cpf', '$sexo', MD5('$senha1'))";
      
       if(mysqli_query($conexao,$sql)) echo "<h1>Dados cadastrados com sucesso</h1>";
       else echo "<h1>Não foi possível realizar o seu cadastro</h1>";

       }else echo "<h1>As senhas não são correspondentes tente novamente</h1>";

       echo "<fieldset class='geral'>";
       echo "<p>Nome: $nome";
       echo "<p>Mãe: $mae";
       echo "<p>Data de Nascimento: ".date('d/m/Y',strtotime($dn));
       echo "<p>Rua/AV: $rua ";
       echo "Nº $numero";
       echo "<p>Telefone: $tel";
       echo "<p>Cartão SUS: $cns";
       echo "<p>CPF: $cpf";
       echo "<p>Sexo: $sexo";
       echo "</fieldset>";

    ?>


   <p><a href="cadastro.html" > <input id = 'botao' type="submit" value="Voltar" id = "ivoltar" > </a></p>

</div>
 </body>
 </html>