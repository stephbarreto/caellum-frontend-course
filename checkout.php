<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Checkout Mirror Fashion</title>
		<link rel="stylesheet" href="css/bootstrap-flatly.css">		
		<link rel="stylesheet" href="css/estilos.css">
		<meta name="viewport" content="width=device-width">
	</head>
		
	<body>
	<nav class="navbar navbar-default">
		￼￼<div class="navbar-header">
			￼<a class="navbar-brand" href="index.php">Mirror Fashion</a>
		￼</div>
		￼<ul class="nav navbar-nav">
			￼<li class="active"><a href="sobre.php">Sobre</a></li>
			￼<li><a href="#">Ajuda</a></li>
			￼<li><a href="#">Perguntas frequentes</a></li>
			￼<li><a href="#">Entre em contato</a></li>
		￼</ul>
	</nav>
	<div class="jumbotron">
		<div class="container">
			<h1>Ótima escolha!</h1>
			<p>Obrigado por comprar na Mirror Fashion!
			Preencha seus dados para efetivar a compra.</p>
		</div>
	</div>
	<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2 class="panel-title">Sua compra</h2>
						</div>
			
						<div class="panel-body">
							<img src="img/produtos/foto2-<?= $_POST['cor'] ?>.png" class="img-thumbnail img-responsive" alt="Foto do Produto">
							<dl>
								<dt>Nome</dt>
								<dd><?= $_POST['nome'] ?></dd>
									
								<dt>Preço</dt>
								<dd id="preco">R$ <?= $_POST["preco"] ?></dd>
									
								<dt>Cor</dt>
								<dd><?= $_POST['cor'] ?></dd>

								<dt>Tamanho</dt>
								<dd><?= $_POST['tamanho'] ?></dd>
							</dl>
							
							￼<div class="form-group">
								<label for="qt">Quantidade</label>
							￼	<input id="qt" class="form-control" type="number" min="0" max="99" value="1">
							</div>
							￼￼<div class="form-group">
							￼	<label for="total">Total</label>
								￼<output for="qt preco" id="total" class="form-control">
									<?= $_POST["preco"] ?>
								</output>						
							</div>
					</div>
				</div>
			</div>
				
		<form class="col-sm-8">
			<div class="row">
				<fieldset class="col-sm-6">
					<legend>Dados Pessoais</legend>
				
				<div class="form-group">
					<label for="nome">Nome Completo</label>
					<input type="text" class="form-control" id="nome" name="Nome" required>
				</div>
				<div class="form-group">
					<label for="email" required>E-mail</label>
					<input type="email" class="form-control" id="email" name="Email" placeholder="example@email.com" required>
				</div>
				<div class="form-group">
					<label for="cpf">CPF</label>
					<input type="text" class="form-control" id="cpf" name="cpf" data-mask="999.999.999-99" required>
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox" value="sim" name="spam" checked> 
						Quero receber spam da Mirror Fashion.
					</label>
				</div>


			</fieldset>
			<fieldset class="col-sm-6">
				<legend>Cartão de Crédito</legend>
				<div class="form-group">
					<label for="numero-cartao">Número do Cartão</label>
					<input type="text" class="form-control" id="numero-cartao" name="numero-cartao" data-mask="9999 9999 9999 9999 - 999" required>
				</div>
				￼<div class="form-group">
					￼<label for="bandeira-cartao">Bandeira</label>
					￼<select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
						￼<option value="master">MasterCard</option>
						￼<option value="visa">VISA</option>
				￼		<option value="amex">American Express</option>
					￼</select>
				￼</div>					
				<div class="form-group">
					<label for="validade-cartao">Validade</label>
					<input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
				</div>

			</fieldset>
			<button type="submit" class="btn btn-primary">
			CONFIRMAR
			</button>
		</div>
		</form>
		
	<script src="total.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/inputmask-plugin.js"></script>

	</body>
</html>