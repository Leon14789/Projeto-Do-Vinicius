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
									<h1 class="txt">FUNCIONARIO {{$employee->name}} SELECIONADO</h1>
									<div class="split style2">


									
									
									<form class="form-ini-trab" method="post"  action=" {{ "/edit-fun/{$employee->id}/editar" }} " >
                                                @csrf
												<div class="fields">
													<div class="field half">
														<label for="name">Nome Completo</label>
														<input type="text" name="name" id="name" value="{{$employee->name}}" />

                                                        <label for="cpf">CPF</label>
														<input type="text" name="cpf" id="cpf"  value="{{$employee->cpf}}"/>
													</div>
													<div class="field half">
														<label for="cell">Numero do Telefone</label>
														<input type="text" name="cell" id="cell" value="{{$employee->cell}}"/>

													</div>

												</div>
												<button>Editar </button>
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