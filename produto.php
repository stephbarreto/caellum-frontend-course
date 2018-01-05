<!DOCTYPE html>
<html>
	<head> 
	<title> Mirror Fashion </title> 
	<meta charset = "uft-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/produto.css">
	<link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)" />

	
	</head>
	<body>
	<?php include ("cabecalho.php"); ?>
	<!-- miolo da pag-->
	<div class="container">
		<div class="produto">
		<h1>Fuzzy Cardigan</h1>
		<p>por apenas R$ 129,00</p>
	
		<form action="checkout.php" method="POST">
			<input type="hidden" name="nome" value="Fuzzy Cardigan">
			<input type="hidden" name="preco" value="129,00">
			<fieldset class="cores">
				<legend>Escolha a cor:</legend>
				
				<input type="radio" name="cor" value="verde" id="verde" checked>
				<label for="verde">
					<img src="img/produtos/foto2-verde.png" alt="verde">
				</label>
				
				<input type="radio" name="cor" value="rosa" id="rosa" checked>
				<label for="rosa">
					<img src="img/produtos/foto2-rosa.png" alt="rosa">
				</label>
				<input type="radio" name="cor" value="azul" id="azul" checked>
				<label for="azul">
					<img src="img/produtos/foto2-azul.png" alt="azul">
				</label>
			<fieldset class="tamanhos">
				<legend>Escolha o tamanho:</legend>
				<input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
				<output for="tamanho" name="valortamanho">42</output>
			     </fieldset>
			</fieldset>
			<input type="submit" class="comprar" value="Comprar">
		</form>
	</div>
	</div>

	<?php include ("rodape.php"); ?>
 	</body>
	</html>