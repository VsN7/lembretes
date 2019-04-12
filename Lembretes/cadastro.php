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
	<?php include_once('processo.php');?>
	<div class="row justify-content-center">
	<form method = "POST" action="processo.php">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<h1>Cadastro de usuário</h1>
		<div class = "form-group">
		<label>Nome</label>
		<input type="text" name="nome" class="form-control" value="<?php echo $nome; ?>" />
		</div>
		<div class = "form-group">
		<label>Data de Nascimento</label>
		<input type="Date" name="data" class="form-control" value="<?php echo $dataNascimento; ?>">
		</div>
		<div class = "form-group">
		<label>Sexo: </label>
		<input type="radio" name="sexo" value="M" checked /> Masculino
		<input type="radio" name="sexo" value="F"/> Feminino
		</div>
		<div class = "form-group">
		<label>E-mail</label>
		<input type="email" name="email" class="form-control" value="<?php echo $email; ?>" required>
		</div>
		<div class = "form-group">
		<label>Endereço</label>
		<input type="text" name="endereco" class="form-control" value="<?php echo $endereco; ?>" required>
		</div>
		<div class = "form-group">
		<label>Numero</label>
		<input type="number" name="numero" class="form-control" value="<?php echo $numero; ?>" required>
		</div>
		<div class = "form-group">
		<label>Bairro</label>
		<input type="text" name="bairro" class="form-control" value="<?php echo $bairro; ?>"required>
		</div>
		<div class = "form-group">
		<label>CEP </label>    
		<input type="number" name="cep" class="form-control" value="<?php echo $cep; ?>" required>
		</div>
		<div class = "form-group">
		<label>Cidade</label>
		<input type="text" name="cidade" class="form-control" value="<?php echo $cidade; ?>" required>
		</div>
		<div class = "form-group">
		<label>Estado</label>
		<input type="text" name="estado" class="form-control" value="<?php echo $estado; ?>" required>
		</div>
		

	<h2>Dados de Login</h2>
	<div class = "form-group">
	     <label>Usuario </label>
		<input type = "text" name = "usuario" class="form-control" value="<?php echo $usuario; ?>"required/>
		</div>
		<div class = "form-group">
		<label>Digite a Senha </label>
		<input type = "password" name = "senha1" class="form-control" value="<?php echo $senha; ?>" required>
		</div>
		<div class = "form-group">
		<label>Confirme a Senha</label>
		<input type = "password" name = "senha2" class="form-control" required>
		</div>
		<div class = "form-group">
			<?php
				if($atualiza == true):
			 ?>

		<button type="submit" class="btn btn-info" name="atualizar">Atualizar Cadastro</button>
		<?php else: ?>
			<button type="submit" class="btn btn-primary" name="cadastrar">Cadastrar</button>
		<?php endif; ?>
		</div>		

	</form>
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="CSS/jquery/dist/jquery.js"></script>
    <script src="CSS/popper/dist/umd/popper.js"></script>
    <script src="CSS/bootstrap/dist/js/bootstrap.js"></script>

</body>
</html>