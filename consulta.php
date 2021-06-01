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
$nome = $nome != "" ?  "AND Nome LIKE '$nome%'" : $nome; 
$mae = $_GET["nmae"];
$mae = $mae != "" ?  "AND Mãe LIKE '$mae%'" : $mae; 
$dn = $_GET["ndn"];
$dn = $dn != "" ?  "AND DN = '$dn'" : $dn; 
$rua = $_GET["nrua"];
$rua = $rua != "" ?  "AND `Rua/AV` LIKE '$rua%'" : $rua; 
$numero = $_GET["nnumero"];
$numero = $numero != "" ?  "AND Número = '$numero'" : $numero; 
$cns = $_GET["ncns"];
$cns = $cns != "" ?  "AND CNS = '$cns'" : $cns; 
$cpf = $_GET["ncpf"];
$cpf = $cpf != "" ?  "AND CPF = '$cpf'" : $cpf; 
$sexo = isset($_GET["nsexo"]) ? $_GET["nsexo"] : "";
$sexo = $sexo != "" ?  "AND Sexo = '$sexo'" : $sexo; 



$sql = "SELECT * FROM `cadastro` WHERE id is not null ".$nome.$mae.$dn.$rua.$numero.$cns.$cpf.$sexo;
$sql = ($sql=="SELECT * FROM `cadastro` WHERE id is not null ") ||  ($sql=="SELECT * FROM `cadastro` WHERE id is not null ") ? ($sql="SELECT * FROM `cadastro` WHERE id is not null LIMIT 100"): $sql;

      if($resultado=mysqli_query($conexao,$sql)) echo "<h1>Resultado da consulta: </h1>";
      else echo "<h1>Não foi possível realizar sua consulta</h1>";

      echo "<fieldset id='busca'>";
      echo "<table border = 1>";
      echo "<tr>";
      echo"<th><h2>Nome</h2></th>";
      echo"<th><h2>Mãe</h2></th>";
      echo"<th><h2>DN</h2></th>";
      echo"<th><h2>Endereço</h2></th>";
      echo"<th><h2>Telefone</h2></th>";
      echo"<th><h2>RG</h2></th>";
      echo"<th><h2>CPF</h2></th>";
      echo"<tr>";

      while ($registro = mysqli_fetch_array($resultado))
      {
        $nome = $registro['1'];
        $mae = $registro['2'];
        $dn  = $registro['3'];
        $endereço  = $registro['4'];
        $numero = $registro['5'];
        $telefone = $registro['6'];
        $cpf = $registro['7'];
        $cpf = $registro['8'];

      
        echo "<tr>";
        echo"<td><p>".$nome."</p></td>";
        echo"<td><p>".$mae."</p></td>";
        echo"<td><p>".date('d/m/Y',strtotime($dn))."</p></td>";
        echo"<td><p>".$endereço.", $numero"."</p></td>";
        echo"<td><p>".$telefone."</p></td>";
        echo"<td><p>".$cns."</p></td>";
        echo"<td><p>".$cpf."</p></td>";
        

        echo "<tr>";
      }


      
    mysqli_close($conexao);

    echo "</table>";
    echo "</fieldset>";

    ?>

   <p><a href="consulta.html" > <input id = 'botao'  type="submit" value="Voltar" id = "ivoltar" > </a></p>

</div>
 </body>
 </html>