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

    $server = "localhost";
    $user = "root";
    $pass = "elfenlied";
    $bd = "formulario";

   if ($conexao = mysqli_connect($server,$user,$pass,$bd)); //echo "Conectado";  
   else  echo "erro";
    ?>

</div>
 </body>
 </html>