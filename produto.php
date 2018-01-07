￼￼<?php $cabecalho_title = "Produto da Mirror Fashion"; include("cabecalho.php");	?>
<?php $cabecalho_css = '<link rel="stylesheet" href="css/produto.css">'; ?>

<body>
	<!-- miolo da pag-->
	
	  <div class="produto-back">
		<div class="container">
			<div class="produto">
			<h1>Camiseta Skull</h1>
			<p>por apenas R$49,90</p>
		
			<form action="checkout.php" method="POST">
				<input type="hidden" name="nome" value="Camiseta Skull">
				<input type="hidden" name="preco" value="49,90">
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
			￼<div class="detalhes">
			￼<h2>Detalhes do produto</h2>
			￼<p>Esse é o melhor casaco de Cardigã que você já viu. Excelente
			￼material italiano com estampa desenhada pelos artesãos da
			￼comunidade de Krotor nas ilhas gregas. Compre já e receba hoje
			￼mesmo pela nossa entrega a jato.</p>
			
			</div>
			<table>
				<thead>
					<tr>
						<th>Característica</th>
						<th>Detalhe</th></tr>
				</thead>
				<tbody>
					<tr>
						<td>Modelo</td>
						<td>Cardigã 7845</td>
					</tr>
					<tr>
						<td>Material</td>
						<td>Algodão e poliester</td>
				</tr>
					<tr>
						<td>Cores</td>
						<td>Azul, Rosa e Verde</td>
					</tr>
						<tr>
							<td>Lavagem</td>
							<td>Lavar a mão</td>
						</tr>
					</tbody>
			</table>
			
			</div>
		</div>
	</div>

	<?php include ("rodape.php"); ?>
 	</body>
	</html>