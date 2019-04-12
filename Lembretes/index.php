<?php 
    session_start();


 ?>
<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="CSS/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <title>Lembretes</title>

    <link rel="shortcut icon" href="lapis.png" />
    <meta name="description" content="Cadastro de lembretes">
    <meta property="og:image" content="https://vitorportifolio.herokuapp.com/imagens/informacoes.jpg">
    <link rel="shortcut icon" href="imagens/icones/titulo.png" />
	<link rel="stylesheet" type="text/css" href="estilo1.css">
</head>
<body>
<div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div class="box">
                    <div class="shape1"></div>
                    <div class="shape2"></div>
                    <div class="shape3"></div>
                    <div class="shape4"></div>
                    <div class="shape5"></div>
                    <div class="shape6"></div>
                    <div class="shape7"></div>
                    <div class="float">
                        <form class="form" method="POST" action="verifica.php">
                            <div class="form-group">
                                <label for="username" class="text-white" name = 'user'>Usuario:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-white" name = 'senha'>Senha:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Enviar">
                                <a href="cadastro.php" class="btn btn-info btn-md">Cadastrar</a>
                               
                            </div>
                        </form>
                        <p class="text-center text-danger">
                              <?php if(isset($_SESSION['loginErro'])){
                                  echo $_SESSION['loginErro'];
                                 unset($_SESSION['loginErro']);
                                  }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="CSS/jquery/dist/jquery.js"></script>
    <script src="CSS/popper/dist/umd/popper.js"></script>
    <script src="CSS/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>