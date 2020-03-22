<!DOCTYPE html>
<html>
	<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> Realizar login </title>
        
        <link rel="stylesheet" href="css/signin.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">

	</head>
	<body>
        <form class="form-signin" action="verificaLogin.php" method="post">
            <img src="site/img/busdesenho.png" width="300px" class="form-image"/>
            <br><br>
            <h5>Para acessar o Site, primeiro efetue o seu Login:</h5>
            <br>
            <label for="inputLogin" class="sr-only">Login </label>
            <input type="text" id="inputLogin" name="txtLogin" class="form-control" placeholder="Informe seu Login" required autofocus>
            <br>
            <label for="inputSenha" class="sr-only">Senha </label>
            <input type="password" id="inputSenha" name="txtPass" class="form-control" placeholder="Informe sua Senha" required>
            Não possui cadastro? <a href="cadastro.php">Cadastre-se aqui!</a>
            <br><br>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>		
	</body>
</html>