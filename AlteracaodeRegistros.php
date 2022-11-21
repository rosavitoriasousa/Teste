<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Alteração de Registros</title>
    <?php
    include 'conexao.php';
    $cd = $_GET['cd_altera']; // recebendo o botao o link de altera

// carregando o campo select com os cargos de acordo com o registro e os outros campos para atualizar
    $consultaCargo = $cn->query("select cargogo from tbEmpregosetimb where registro='$cd' 
    union selct cargo from tbEmpregosetimb where registro!='$cd'");

//fazendo a mesma coisa com a area
    $consultaArea = $cn->query("select cargogo from tbEmpregosetimb where registro='$cd' 
    union selct area from tbEmpregosetimb where registro!='$cd'");

    // buscando os campos de acorso com o numero do registro
    $consultaCampos = $cn->query("select*from tbEmpregosetimb where registros='$cd'");
    $exibeCampos = $consultaCampos->fetch(PDO:: FETCH_ASSOC);
    ?>
</head>
<body>
   <div>
    <label for="registro">Registro</label>
    <input type="text" id="nome" name="txtRegistro" readonly value="<?php echo $exibeCampos['registro']; ?>">
    </div>
    <div>
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="txtnome" value="<?php $exibeCampos['nome']; ?>">
</div>
<div>
    <label for="cargo">Cargo</label>
    <select name="SltCargo" id="cargo">
        <?php
            while($exibecargo = $consultaCargo->fetch(PDO::FETCH_ASSOC)){       
    ?>
        <option value="<?php echo $exibecargo['cargo'];?>"><?php echo
        $exibecargo['cargo'];?></option>;
        <?php } ?>
    </select>
        </div>
    <div>
        <label for="salario">Salário</label>
        <input type="text" id="salario" name="txtSalario" value="<?php echo
        $exibeCampos['salario']; ?>">
        </div>
        <div>
            <label>Status</label>
            <label>
                <?php if($exibeCampos['status'] == "Ativo") { ?>
                    <input type="radio" name="rdbStatus" value="Ativo" checked>Ativo
                </label>
                <label>
                    <input type="radio" name="rdbStatus" value="Inativo">Inativo
                </label>
                <?php } else { ?>
                    <input type="radio" name="rdbSattus" value="Ativo">Ativo
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