<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Alteração de Registros</title>
    <?php

include 'conexao.php';
$cd = $_GET['cd_altera']; // botão ou link altera

    // carregando o SELECT com o nome cargo de acordo com o registro.
    //.Carregando todos os outros  campos 'cargo' para atualizar.

     $consultaCargo = $cn->query("SELECT Cargo FROM tbempregos WHERE registro='$cd' UNION SELECT 
     cargo FROM tbempregos WHERE registro!='$cd'");

    //carregando o campo SELECT com o nome da area de acordo com o registro e os outros campos da area para atualizar se necessario.

    $consultaArea = $cn->query("SELECT Area FROM tbempregos WHERE Registro='$cd' UNION SELECT
    area FROM tbempregos WHERE Registro!='$cd'");

    // fazendo a busca por todos os campos segundo o numero do regsitro
    $consultaCampos = $cn->query("SELECT * FROM tbempregos where registro='$cd'");
    $exibeCampos = $consultaCampos->fetch(PDO :: FETCH_ASSOC);
?>
</head>
<body>
   <div>
        <label for="salario">Salário</label>
        <input type="text" id="salario" name="txtSalario" value="<?php echo $exibeCampos['salario'];?>">
   </div>
   <div>
       <label>Status</label>
       <label>
           <?php if($exibeCampos['status']=="Ativo"){ ?>
            <input type="radio" name="rdbStatus" value="Ativo" checked>Ativo
        </label>
        <label>
            <input type="radio" name="rdbStatus" value="Inativo" checked>Inativo
        </label>
          <?php } else { ?>
            <input type="radio" name="rdbStatus" value="Ativo">Ativo
          </label>
          <label>
              <input type="radio" name="rdbStatus" value="Inativo" checked>Inativo
          </label>
       <?php } ?>
   </div>

            <button type="submit" name="submit">Alterar</button>
          </fieldset>
        </form>
</body>
</html>