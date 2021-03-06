<?php 
if (isset($_GET['cadastro'])){
  return redirect()->route('cadastro');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Tela de Login</title>
</head>
<body class="bg-secondary">
    <div class="jumbotron text-white mt-3 mb-1">
      <h1 class="display-4" style="text-align: center;">Olá, seja bem vindo!</h1>
      <p class="lead" style="text-align: center;">Cadastre-se para ter acesso a página completa</p>
    </div>
    <div class="container">
      <div class="row">
        <center>
        <div class="col-4 mt-2 pt-5">
          <form method="POST">
            @CSRF
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Email</label>
                <input type="email" name='email' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu e-mail">
                <div id="emailHelp" class="form-text text-white login-obs">Você nunca deve compartilhar seu e-mail com ninguém</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label text-white">Senha</label>
                <input type="password" name='senha' class="form-control" id="exampleInputPassword1" placeholder="Digite sua senha">
              </div>
              <button type="submit" class="btn btn-warning" style="width: 250px">Cadastrar</button>
          </form>
        </div>
      </center>
      </div>
    </div>
</body>
<footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</footer>
</html>