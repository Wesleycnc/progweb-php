<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tabela do Brasileiro</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container mt-3 mb-3">
		<form class="form-inline" onsubmit="return false;">
			<div class="form-group">
				<select id="time1" class="form-control mr-3"></select>

				<input class="form-control mr-3" type="text" id="pla1" name="placar1"/>
				<label class="mr-3"><strong>VS</strong></label>
				<input class="form-control mr-3" type="text" id="pla2" name="placar2"/>
				
				<select class="form-control mr-3" id="time2"></select>

				<input class="btn btn-dark" type="submit" value="Confirmar" onclick="resultado()">
			</div>
		</form>
	</div>

	<div class="container tabela">
		<table class="table table-sm">
			<thead class="table-dark">
				<th></th>
				<th>CLUBE</th>
				<th>PTS</th>
			</thead>
			<tbody id="myTable">
				
			</tbody>
		</table>
	</div>

	<script type="text/javascript" src="script.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>