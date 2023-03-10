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
									<h1 class="txt">VEICULOS PARA EDIÇÃO</h1>
									<div class="split style2">


									<table>
										<thead>
											<tr>
												<th>ID</th>
												<th>pao</th>
												<th>Tag</th>
												
												<th>Edições</th>
											</tr>
										</thead>
										<tbody>
											@foreach($vehicles as $vehicle)
												<tr>
													<td>{{$vehicle->id}}</td>
													<td>{{$vehicle->name}}</td>
													<td>{{$vehicle->tag}}</td>
													
													<td>
														<a href="{{ "/edit-vei/{$vehicle->id}/edition" }}">Edite</a> | 
														<a href="{{ "/edit-vei/{$vehicle->id}/apagar" }}">Deletar</a>
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

	</body>
</html>