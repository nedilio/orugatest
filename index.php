
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">
	<title>Oruga</title>
</head>
<body>
	<div class="container">
	<h1>formulario concurso</h1>
		<form method="post" action="savedata.php">
			<div class="row">
				<div class="form-group col-sm-6">
				  <!-- <label for="exampleInputEmail1">Email address</label> -->
				  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre y Apellido" required>
				</div>
				<div class="form-group col-sm-4">
				  <!-- <label for="exampleInputPassword1">Password</label> -->
				  <input type="number" class="form-control" id="cedula" name="cedula" min="1" max="99999999" placeholder="Cedula de Identidad" required>
				  <div class="col-sm-1">
						<label>
						    <input type="radio" name="nacionalidad" id="nacionalidad" value="V" required>
							    V
					  </label>
    			  </div>
				  <div class="col-sm-1">
						<label>
							 <input type="radio" name="nacionalidad" id="nacionalidad" value="E">
							    E
						</label>
				  </div>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-6">
					Fecha de Nacimiento: <input type="date" id="fechadenac" name="fechadenac" required>
					<p id="mensaje"></p>
				</div>
			</div>
		  
		  <div class="form-group">
		  	<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo de la Obra">
		  </div>
		  <div class="form-group">
		  	<textarea class="form-control" rows="3" id="descripcion" name="descripcion" placeholder="Descripcion de la Obra"></textarea>
		  </div>
		  <div class="form-group">
		    <!-- <label for="exampleInputFile">File input</label> -->
		    <input type="file" id="archivo" name="archivo" accept="image/gif, image/jpeg" required>
		    <p class="help-block">Imagen jpg max 600kb</p>
		  </div>
		  <button type="submit" class="btn btn-default">Enviar</button>
		</form>		
	</div>

	<div>
<!-- <?php
// Conectar a MySQL
$link = mysql_connect('localhost', 'root', 'root');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo '<p>Conectado a </p>';

// Conectar a la base de datos (concurso)
$db_selected = mysql_select_db('concurso', $link);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}
echo '<p>Conectado a la base de datos: concurso</p>';

$sql = "SELECT nombreapellido, cedula, nacionalidad FROM concurso";
$result = $conn->query($sql);

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);
echo $result;
if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
     }
} else {
     echo "0 results";
}
// Cerrando conección
mysql_close($link);
?> -->

	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script>
		$( "#fechadenac" ).blur(function() {
  			var fecha = $("#fechadenac").val();
  			var datevar = new Date (fecha);
  			var edad = 2016-datevar.getFullYear();
  			console.log(edad);
  			if (edad >= 20 && edad<=25 ) {
				    msg = "Usted tiene mas posibilidades de ganar";
				} 
				else if (isNaN(edad)) {
					msg = "Introduzca una fecha valida"
				}
				else {
				    msg = "Usted es muy viejo o muy joven";
				} 
  			$("#mensaje").html(msg);
		});

	</script>
</body>
</html>

