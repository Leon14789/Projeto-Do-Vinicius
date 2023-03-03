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
			<h2 class="txt">SELECIONE O FUNCIONARIO</h2>
			<div class="split style2">



			<table>
										<thead>
											<tr>
												<th>ID</th>
												<th>Nome</th>
												<th>CPF</th>
												<th>Telefone</th>
												<th>Edições</th>
											</tr>
										</thead>
										<tbody>
											@foreach($employees as $employee)
												<tr>
													<td>{{$employee->id}}</td>
													<td>{{$employee->name}}</td>
													<td>{{$employee->cpf}}</td>
													<td>{{$employee->cell}}</td>
													<td>
                                                        <a href="#" data-toggle="modal" data-target="#exampleModalLong">VIZUALIZAR</a> 
													</td>
												</tr>
											@endforeach
										</tbody>
									</table>
			

		<!-- Modal Funcionario -->
		<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
			aria-labelledby="exampleModalLongTitle" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle">Funcionario {{$employee->name}}</h5>
						
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