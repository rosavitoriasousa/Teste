<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscapé</title>

    <style>
        body{
            box-sizing: none;
            padding:0;
            margin: 0;
        }
        select{
            color: black;
        }
        .em{
            color:blue;
            text-decoration: none;
        }
        .cima{
            color:red;
            text-decoration: none;
        }
        .abrirphp{
            display:flex;
            margin-top: 40px;
            
        }
        .nu{
            display:flex;
            justify-content: center;
        }
        .arrume{
            display:flex;
            margin-top:-30px;
        }
    </style>    

<?php
include 'conexaobanco.php';
$Carrega_Cargo=$cn->query('select Cargo from tbl_Empregos group by Cargo');
$Carrega_Area=$cn->query('select Area from tbl_Empregos group by Area');
$consulta=$cn->query('select * from tbl_Empregos');
?>
</head>

<body>
    <div class="head">
     <img src="SERASA.png" width=160px class="arrume">
    </div>
    <div class=nu>
    <form name="buscando" method="get" action="busca.php"> 
        <center><h4>Pesquisar</h4></center>

        <select name="SltCargo"><option value="">Selecione o cargo</option>
        <?php while($exibe_cargo=$Carrega_Cargo->fetch(PDO::FETCH_ASSOC)){?>
        <option value= "<?php echo $exibe_cargo['Cargo'];?>"> <?php echo $exibe_cargo['Cargo'];?></option>
    <?php } ?>

        </select>

  <select name="SltArea"><option value="">Selecione a area</option>
  <?php while($exibe_area=$Carrega_Area->fetch(PDO::FETCH_ASSOC)){?>

  <option value= "<?php echo $exibe_area['Area'];?>"> <?php echo $exibe_area['Area'];?>
    </option>

  <?php } ?>
  </select>
            <button>Buscar</button>
  </form>        
  </div>    
            
            <div class="abrirphp">
                <?php if(!isset($_GET['SltCargo']) and !isset($_GET['SltArea'])){
                echo "deixa tudo em branco msm!!";
                }
                else{
                    $cargo = $_GET['SltCargo'];
                    $area = $_GET['SltArea'];
                    echo "<table border ='1' width = '80%'><tr>";
                    echo "<td width='8%'>Registro</td><td width='22%'>Nome</td> 
                     <td width='10%'>Cargo</td><td width='10%'>Área</td>
                     <td width='10%'>Salário</td><td width='8%'>Status</td>
                     <td width='6%'><img src='alterar.png' width=20px>Alterar</td>
                     <td width='6%'><img src='lixo.png' width=20px>Excluir</td></tr>";
                     
                     $consulta = $cn->query("select * from tbl_empregos where Cargo='$cargo' and Area='$area'"); 
                     while($resultado=$consulta->fetch(PDO::FETCH_ASSOC)){
                         echo "
                         <tr>
                         <td> $resultado[Registro]</td>
                         <td> $resultado[Nome] </td>
                         <td> $resultado[Cargo] </td>
                         <td> $resultado[Area] </td>
                         <td> $resultado[Salario] </td>
                         <td> $resultado[Status] </td>
                         <td><a href='alterar.php?CD_ALT=$resultado[Registro]' class='em'>Alterar</a></td>
                         <td><a href='excluir.php?CD_EXCLUIR=$resultado[Registro]' class='cima'>Excluir</a></td>
                     </tr>";
                     }
                     echo "<table>";
                }    
                ?>
</div>
</body>
</html>