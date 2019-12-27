<?php
    require ('head.php');
    require('conexao.php');
    $msgUp = '';

if(isset($_POST['submit'])){
    $nome = $_POST['nome'];
    $data = $_POST['data'];
    $idade = $_POST['idade'];
    $sexo = $_POST['sexo'];
    $local_nascimento = $_POST['local_nascimento'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $escola_origem = $_POST['escola_origem'];
    $motivo = $_POST['motivo'];
    $curso = $_POST['curso'];

    $data = [$nome ,$data ,$idade, $sexo, $local_nascimento, $endereco, $telefone, $escola_origem, $motivo, $curso];

    $upar_matricula = $pdo->prepare("INSERT INTO matriculas(nome, data, idade, sexo, local_nascimento, endereco, telefone, escola_origem, motivo, curso) VALUES (?,?,?,?,?,?,?,?,?,?)");
    $upar_matricula->execute($data);

    if($upar_matricula->rowCount()>0){
        $msgUp = "MATRÍCULA ADICIONADA COM SUCESSO!";
    }else{
        $msgUp = "DESCULPE, HOUVE UM ERRO AO ADICIONAR A MATRÍCULA";
    }
}


?>

<form method="post" class="envia_form">
    <label for="nome">NOME DO ALUNO</label>
    <input type="text" name="nome"> <br>

    <label for="data">DATA DE NASCIMENTO</label>
    <input type="date" name="data"> <br>

    <label for="idade">IDADE</label>
    <input type="text" name="idade"> <br>

    <label for="sexo">SEXO</label>
    <input type="text" name="sexo"> <br>

    <label for="local_nascimento">LOCAL DE NASCIMENTO</label>
    <input type="text" name="local_nascimento"> <br>
    
    <label for="endereco">ENDEREÇO COMPLETO</label>
    <input type="text" name="endereco"> <br>

    <label for="telefone">FONE/CELULAR</label>
    <input type="text" name="telefone"> <br>

    <label for="escola_origem">ESCOLA DE ORIGEM</label>
    <input type="text" name="escola_origem"> <br>

    <label for="curso">QUAL CURSO DESEJADO?</label>
    <input type="text" name="curso"> <br>

    <label for="motivo">POR QUE ESCOLHEU ESSE CURSO?</label>
    <input type="text" name="motivo"> <br>

    <button type="submit" class="btn_form btn_envia" name="submit" value="submit" id="submit">Enviar</button>
        <h6 style="display:<?php echo $state?>"><?php echo($msgUp);?></h6>
</form>

