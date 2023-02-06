<!DOCTYPE HTML>
<html>

<head>
	<title>Sistema Vinicius</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="../../../assets-sistema/css/main.css" />
	<link rel="stylesheet" href="../../../assets-sistema/css/bootstrap.css" />
	<noscript>
		<link rel="stylesheet" href="../../../assets-sistema/css/noscript.css" />
	</noscript>
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
			<h2 class="txt">SELECIONE O FUNCIONARIO OU SEGURADORA</h2>
			<div class="split style2">

				<form method="post" action="#" class="form-ini-trab">
					<div class="fields">
						<div class="main-form">

							<select name="time" id="margin-financeiro">
								<option value="#">Funcionario 1</option>
								<option value= >Funcionario 2</option>
								<option value="#">Funcionario 3</option>
								<option value="#teste">Funcionario 4</option>
							</select>
							<button type="button" data-toggle="modal" data-target="#exampleModalLong">
								Vizualizar
							</button>
							<select name="time" id="margin-financeiro">
								<option value="#">Seguradora 1</option>
								<option value= >Seguradora 2</option>
								<option value="#">Seguradora 3</option>
								<option value="#teste">Seguradora 4</option>
							</select>
							<button type="button" data-toggle="modal" data-target="#exampleModalLong">
								Vizualizar
							</button>
						</div>
						
					</div>
				</form>
			</div>
		</div>

		<!-- Button trigger modal -->
		

		<!-- Modal -->
		<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
			aria-labelledby="exampleModalLongTitle" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle">Nome do Funcionario</h5>
						
					</div>
					<div class="modal-body">
						Total de Horas Trabalhadas:
						<br>
						No mes:
					</div>
					<div class="modal-footer">
						<button type="button" class="button submit"  data-dismiss="modal">Vizualidado</button>
					</div>
				</div>
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
	<script src="../../../assets-sistema/js/bootstrap.min.js"></script>


</body>

</html>