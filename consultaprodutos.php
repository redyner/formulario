<!DOCTYPE html>
 <html lang="pt-br">
 <head>
   <link rel="stylesheet" href="style.css"/>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Formulário</title>
  
 </head>
  <link rel="stylesheet" href="style.css">
 <body>
 <div>
    <?php

include "conexao.php";
      


$nome = $_GET["nnome"];
$nome = $nome != "" ?  "AND `Código` LIKE '$nome'" : $nome; 
$mae = $_GET["nmae"];
$mae = $mae != "" ?  "AND Nome LIKE '$mae%'" : $mae; 
$dn = $_GET["ndn"];
$dn = $dn != "" ?  "AND `Preço` = '$dn'" : $dn; 



$sql = "SELECT * FROM `produtos` WHERE `Código` is not null ".$nome.$mae.$dn;
$sql = ($sql=="SELECT * FROM `produtos` WHERE `Código` is not null ") ||  ($sql=="SELECT * FROM `produtos` WHERE `Código` is not null ") ? ($sql="SELECT * FROM `produtos` WHERE `Código` is not null LIMIT 100"): $sql;

      if($resultado=mysqli_query($conexao,$sql)) echo "<h1>Resultado da consulta: </h1>";
      else echo "<h1>Não foi possível realizar sua consulta</h1>";

      echo "<fieldset id='busca'>";
      echo "<table border = 1>";
      echo "<tr>";
      echo"<th><h2>Código</h2></th>";
      echo"<th><h2>Nome</h2></th>";
      echo"<th><h2>Preço</h2></th>";
      echo"<tr>";

      while ($registro = mysqli_fetch_array($resultado))
      {
        $nome = $registro['0'];
        $mae = $registro['1'];
        $dn  = $registro['2'];

      
        echo "<tr>";
        echo"<td><p>".$nome."</p></td>";
        echo"<td><p>".$mae."</p></td>";
        echo"<td><p>".$dn."</p></td>";
        

        echo "<tr>";
      }


      
    mysqli_close($conexao);

    echo "</table>";
    echo "</fieldset>";

    ?>

   <p><a href="consultaprodutos.html" > <input id = 'botao'  type="submit" value="Voltar" id = "ivoltar" > </a></p>

</div>
 </body>
 </html>