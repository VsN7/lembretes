
<?php 
	session_start();
		if (!$_SESSION['login'] ) {
			header('Location: login.php');
		}	

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

    <link rel="shortcut icon" href="titulo.png" />
    <meta name="description" content="Cadastro de lembretes">
    <meta property="og:image" content="https://vitorportifolio.herokuapp.com/imagens/informacoes.jpg">
	<link rel="shortcut icon" href="titulo.png" />
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header style = "background-color: rgb(50,160,220); color:#eee;padding-top:2%">

	<?php require_once 'lembretesBD.php';  ?>
	<?php
		if (isset($_SESSION['mensagem'])): ?>
			
		<div class="alert alert-<?=$_SESSION['msg']?>">
			<?php 
				echo $_SESSION['mensagem'];
				unset($_SESSION['mensagem']);

			?>
		</div>
	<?php endif ?>

	

<div class="container">

<?php


	$mysqli = new mysqli('localhost', 'root', '', 'aula') or die(mysqli_error($mysqli));

	$ide= $_SESSION['id'];

	$result = $mysqli->query("SELECT * FROM lembretes where id_user = $ide") or die("$mysqli->error");
	

		?>
		<div class="justify-content-end">
			<ul class="nav justify-content-end">
				<li class="nav - item"> <h3>Bem Vindo ,
				 <?php
						echo ucwords($_SESSION['nome']);					 
				 
						?> </h3>
				 </li>
				<li class="nav - item"> <a href="logout.php"> <button type="button" class="btn btn-danger"> Sair</button> </a></li>
				
			</ul>
			
		
		</div>
		<div style="text-align: center; font-size: 190%;">
			<a style="color:#eee" data-toggle="collapse" href="#collapseExample"><i class="fas fa-plus-circle"></i></a>
			
		</div>
	</div>
	</header>
	
	<div class="container">
	<div class="collapse" id="collapseExample">
			<div class="col-md-5">
	<form method = "POST" action="lembretesBD.php">
		<input type="hidden" name="id" value="<?php echo $ide; ?>">
		<!--<input type="hidden" name="nome" value="<?php echo $nome; ?>">-->
		<h1>Cadastro de Lembretes</h1>
		<div class = "form-group">
		<label>Titulo</label>
		<input type="text" name="titulo" class="form-control" value="<?php echo $titulo; ?>" />
		</div>
		<div class = "form-group">
		<label>Resenha</label>
		<textarea type="text" name="resenha" class="form-control" value="<?php echo $resenha; ?>" required></textarea>
		</div>
		<div class = "form-group">
			<?php
				if($atualiza == true):
			 ?>

		<button type="submit" class="btn btn-info" name="atualizar">Atualizar</button>
		<?php else: ?>
			<button type="submit" class="btn btn-primary" name="cadastrar">Cadastrar</button>
		<?php endif; ?>
		</div>		

	</form>
	</div>
			</div>
				<?php 
					while ($row = $result->fetch_assoc()):  ?>
						<form method="POST" action="lembretesBD.php">
						<input type="hidden" name="id" value="<?php echo $ide; ?>">
						<!--<input type="hidden" name="nome" value="<?php echo $nome; ?>">-->
					
							<div class="row justify-content-center">
								<div class="modal-dialog">
         							<div class="modal-content" id="tamanho">
             							<div class="modal-header"id="titulo" >
                				 			<h4 class="modal-title" id="titulo"><?php echo $row['titulo']; ?></h4>
           					  			</div>
            							 <div class="modal-body" id="caixa">
               								  <p id="paragrafo"><?php echo $row['resenha'];?></p>
            							 </div>
            						 <div class="modal-footer">
             								<a class = "lapi" href="cadastroL.php?editar=<?php echo $row['id']; ?>"><i style="color:black; font-size:150%;" class="fas fa-edit"></i></a>
										    <a class="lapi" href="lembretesBD.php?apagar=<?php echo $row['id']; ?>" ><i style="color:black; font-size:150%;" class="fas fa-trash"></i></a>
									 </div>              							
								</div>
							</div>

	</div>

					
					</form>
					<?php endwhile; ?>
	
</div>	

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="CSS/jquery/dist/jquery.js"></script>
    <script src="CSS/popper/dist/umd/popper.js"></script>
    <script src="CSS/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>