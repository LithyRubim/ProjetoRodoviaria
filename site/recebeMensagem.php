<?php
    include_once('../conexao.php');
    
    if($_POST['txtNome'] == ''){
        ?>
            <script>
                alert("Nome não pode ser vazio!");
                window.location.href="index.php#contato";
            </script>
        <?php
    }else{        
        $nome = $_POST['txtNome'];        
    }
    if($_POST['txtEmail'] == ''){
        ?>
            <script>
                alert("Email não pode ser vazio!");
                window.location.href="index.php#contato";
            </script>
        <?php
    }else{        
        $email = $_POST['txtEmail'];        
    }
    if($_POST['txtMensagem'] == ''){
        ?>
            <script>
                alert("Mensagem não pode ser vazio!");
                window.location.href="index.php#contato";
            </script>
        <?php
    }else{
        $mensagem = addslashes($_POST['txtMensagem']);
                
    }

    $conn = new conexao();

    $sql = "INSERT INTO mensagens(nome, email, mensagem) VALUES('$nome', '$email', '$mensagem')";

    $result = $conn->executaQuery($sql);

    if($result){
        ?>
            <script>
                alert("Mensagem enviada com sucesso!");
                window.location.href="index.php";
            </script>
        <?php
    }else{
        ?>
            <script>
                alert("Erro ao enviar a mensagem!");
                window.location.href="index.php#contato";
            </script>
        <?php
    }

?>