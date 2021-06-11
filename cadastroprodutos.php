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

       $sql = "INSERT INTO `produtos`(`Código`,`Nome`,`Preço`) VALUES ( '$nome', '$mae', '$dn')";
      
       if(mysqli_query($conexao,$sql)) echo "<h1>Dados cadastrados com sucesso</h1>";
       else echo "<h1>Não foi possível realizar o seu cadastro</h1>";

       echo "<fieldset class='geral'>";
       echo "<p>Código: $nome";
       echo "<p>Nome: $mae";
       echo "<p>Preço: $dn";
       echo "</fieldset>";

    ?>


   <p><a href="cadastroprodutos.html" > <input id = 'botao' type="submit" value="Voltar" id = "ivoltar" > </a></p>

</div>
 </body>
 </html>