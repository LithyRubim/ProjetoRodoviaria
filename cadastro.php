<!DOCTYPE html>
<html>
	<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> Realizar Cadastro </title>
        
        <link rel="stylesheet" href="css/signin.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">

	</head>
	<body>
        <form class="form-signin" action="recebeCadastro.php" method="post">
            <img src="site/img/logo.png" width="100%" class="form-image"/>
            <br><br>
            <h5>Cadastre-se</h5>
            <br>
            <label for="inputNome" class="sr-only">Nome </label>
            <input type="text" id="inputNome" name="txtNome" class="form-control" placeholder="Digite seu Nome" >
            <br>
            <label for="inputLogin" class="sr-only">Login </label>
            <input type="text" id="inputLogin" name="txtLogin" class="form-control" placeholder="Crie seu Login">
            <br>
            <label for="inputSenha" class="sr-only">Senha </label>
            <input type="password" id="inputSenha" name="txtPass" class="form-control" placeholder="Crie sua Senha">
            <br><br>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Cadastrar</button>
        </form>		
	</body>
</html>