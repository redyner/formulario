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

       $login = $_GET["nlogin"];

       $senha = $_GET["nsenha"];
      

       $sql = "SELECT * FROM `cadastro` WHERE `Login` = '$login' AND Senha = MD5('$senha')";
      
       mysqli_query($conexao,$sql);

       $resultado=mysqli_query($conexao,$sql);     

       if ($resultado ->num_rows != 0){
        echo "<h1>Bem Vindo</h1>";
        echo " <div id = 'margem'></div><p><a href='acessos.html'><input id = 'botao' type='button' value='Iniciar'></p>";          
       }else {
        echo " <div id = 'margem'></div><p><a href='index.html'><input id = 'botao' type='button' value='Login ou Senha Incorretos'></p>";
       }

    ?>

</div>
 </body>
 </html>