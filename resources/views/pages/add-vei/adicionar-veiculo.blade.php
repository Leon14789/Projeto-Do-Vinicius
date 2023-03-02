<!DOCTYPE HTML>
<html>
	<head>
		<title>Sistema Vinicius</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../../../assets-sistema/css/main.css" />
		<noscript><link rel="stylesheet" href="../../../assets-sistema/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Sidebar -->
		<section id="sidebar">


<x-menu />

</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->
					
						
								<div class="main">
									<h1 class="txt">ADICIONAR VEICULO</h1>
									<div class="split style2">
										
											<form method="post" action="{{ route('criar') }}"  class="form-ini-trab">
											@csrf
												<div class="fields">
													<div class="field half">
														<label for="name">Modelo do Veiculo</label>
														<input type="text" name="name" id="name" />

													</div>
													<div class="field half">
														<label for="tag">Tag do Sem Parar</label>
														<input type="text" name="tag" id="tag" />

													</div>
													
												</div>
												<ul class="actions">
													<li><a href="" class="button submit">Salvar</a></li>
												</ul>
											</form>
										
									</div>
								</div>
			</div>

			
		
		<!-- Scripts -->
			<script src="../../../assets-sistema/js/jquery.min.js"></script>
			<script src="../../../assets-sistema/js/jquery.scrollex.min.js"></script>
			<script src="../../../assets-sistema/js/jquery.scrolly.min.js"></script>
			<script src="../../../assets-sistema/js/browser.min.js"></script>
			<script src="../../../assets-sistema/js/breakpoints.min.js"></script>
			<script src="../../../assets-sistema/js/util.js"></script>
			<script src="../../../assets-sistema/js/main.js"></script>
			<script src="../../../assets-sistema/js/cpf.js"></script>
			.

	</body>
</html>