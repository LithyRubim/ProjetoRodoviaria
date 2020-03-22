<?php
    include_once('conexao.php');

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

    $selecao = "SELECT * FROM logins WHERE login = '$login' AND senha = '$senha'";
    $result = $conn->executaQuery($selecao);
    
    if($result->num_rows > 0){
        setcookie('is_logado', 1);
        ?>
            <script>
                window.location.href="./site";
            </script>
        <?php
    }else{
        ?>
            <script>
                alert("Usuário e/ou Senha incorretos!");
                window.location.href="index.php";
            </script>
        <?php
    }

?>