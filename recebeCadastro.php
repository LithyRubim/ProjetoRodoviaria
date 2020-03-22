<?php
    
    include_once('conexao.php');
    
    if($_POST['txtNome'] == ''){
        ?>
            <script>
                alert("Nome não pode ser vazio!");
                window.location.href="cadastro.php";
            </script>
        <?php
    }else{
        $nome = $_POST['txtNome'];        
    }
    if($_POST['txtLogin']==''){
        ?>
            <script>
                alert("Login não poder ser vazio!");
                window.location.href="cadastro.php";
            </script>
        <?php        
    }else{
        $login = $_POST['txtLogin'];
    }
    if($_POST['txtPass'] == ''){
        ?>
            <script>
                alert("Senha não pode ser vazio!");
                window.location.href="cadastro.php";
            </script>
        <?php
    }else{        
        $senha = MD5($_POST['txtPass']);        
    }
    $conn = new conexao();

    $sql = "INSERT INTO logins(nome, login, senha) VALUES('$nome', '$login', '$senha')";

    $result = $conn->executaQuery($sql);

    if($result){
        ?>
            <script>
                alert("Cadastro efetuado com sucesso!");
                window.location.href="index.php";
            </script>
        <?php
    }else{
        ?>
            <script>
                alert("Erro ao efetuar o cadastro!");
                window.location.href="cadastro.php";
            </script>
        <?php
    }
?>