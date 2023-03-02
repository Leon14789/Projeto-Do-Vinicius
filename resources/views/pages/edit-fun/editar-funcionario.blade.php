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
									<h1 class="txt">FUNCIONARIOS PARA EDIÇÃO</h1>
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
														<a href="{{ "/edit-fun/{$employee->id}/edicao" }}">Edite</a>
													</td>
												</tr>
											@endforeach
										</tbody>
									</table>

									
											
										
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