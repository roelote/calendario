<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Documentos de prueba</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">		
		<link rel="stylesheet" href="css/disponibilidad.css" charset="utf-8">
		<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
		<script type="text/javascript" src="js/disponibilidad.js"></script>
	</head>
	<body>
		<div class="container">
			<div id="main">
				<div class="row">
					<div class="col-12">
						<h1>Disponibilidad de Ingresos a Machu Picchu 2019</h1>
						<hr>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4 col-md-5">
						<form id="formConsult" action="source/calendario.php">
							<div class="form-group">
								<label for="ruta">Seleccionar Ruta</label>
								<select class="form-control" name="ruta">
									<option value="100" selected="selected">Machupicchu - A partir de las 6:00</option>
									<option value="101">Machupicchu - A partir de las 7:00</option>
									<option value="102">Machupicchu - A partir de las 8:00</option>
									<option value="103">Machupicchu - A partir de las 9:00</option>
									<option value="104">Machupicchu - A partir de las 10:00</option>
									<option value="105">Machupicchu - A partir de las 11:00</option>
									<option value="106">Machupicchu - A partir de las 12:00</option>
									<option value="107">Machupicchu - A partir de las 13:00</option>
									<option value="108">Machupicchu - A partir de las 14:00</option>									
									<option value="120">Machupicchu con montaña Machupicchu - A partir de las 6:00</option>
									<option value="121">Machupicchu con montaña Machupicchu - A partir de las 7:00</option>
									<option value="122">Machupicchu con montaña Machupicchu - A partir de las 8:00</option>
									<option value="110">Machupicchu con montaña Waynapicchu - A partir de las 6:00</option>
									<option value="111">Machupicchu con montaña Waynapicchu - A partir de las 7:00</option>
									<option value="112">Machupicchu con montaña Waynapicchu - A partir de las 8:00</option>
									<option value="1">Ruta 1 (4d/3n) Piscacucho KM82 - 4 dias - 3 noches</option>
									<option value="4">Ruta 5 (directo) Chachabamba KM104 - sin pernocte</option>
								</select>
							</div>

							<div class="form-group">
								<label for="idMes">Seleccionar mes</label>
								<select class="form-control" name="mes">
									<option value="1" selected="selected">Enero</option>
									<option value="2">Febrero</option>
									<option value="3">Marzo</option>
									<option value="4">Abril</option>
									<option value="5">Mayo</option>
									<option value="6">Junio</option>
									<option value="7">Julio</option>
									<option value="8">Agosto</option>
									<option value="9">Septiembre</option>
									<option value="10">Octubre</option>
									<option value="11">Noviembre</option>
									<option value="12">Diciembre</option>
								</select>
							</div>
							<input type="hidden" name="anho" value="2019">							
							<button type="submit" class="btn btn-success btn-lg btn-block">Consultar Disponibilidad</button>
						</form>
					</div>
					<div class="col-sm-8 col-md-7">
						<div id="ikx">
							<!--calendario de  disponibilidad -->							
						</div>				
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
