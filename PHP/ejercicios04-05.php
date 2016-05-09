<?php
require_once('validacion.php');

$secciones = ['Deportes', 'Sociales', 'Policiales', 'Economía'];
$errores = [];
if ($_POST)
{
	$errores = validar($_POST);
	if(!count($errores))
	{
		header('location: felicitaciones.html');
		exit;
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Digital House PHP 101</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" crossorigin="anonymous">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="container">
		<h1>Registración</h1>
		<?php if (count($errores))
		{ ?>
			<div class="alert alert-danger alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong>Error!</strong><br/>
				<?php foreach($errores as $field => $message) {
					echo '<b>' . $field . ': </b>' . $message . '<br/>';
				} ?>
			</div>
		<?php } ?>
		<form class="container" method="post" action="">
			<div class="form-group <?php echo (isset($errores['nombre']) ? 'has-error' : '') ?>">
				<label for="exampleInputEmail1">Nombre</label>
				<input type="text" name="nombre" value="<?php echo(isset($_POST['nombre']) ? $_POST['nombre'] : '') ?>" class="form-control" id="exampleInputEmail1" placeholder="Nombre">
				<div><?php echo (isset($errores['nombre']) ? $errores['nombre'] : '') ?></div>
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Apellido</label>
				<input type="text" name="apellido" class="form-control" id="exampleInputEmail1" placeholder="Apellido">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">Email</label>
				<input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password Confirm</label>
				<input type="password" name="pass_confirm" class="form-control" id="exampleInputPassword1" placeholder="Password">
			</div>
			<label>Secciones</label>
			<?php foreach ($secciones as $key => $seccion){ ?>
				<div class="checkbox">
					<label>
						<?php if(isset($_POST['secciones']) && in_array($key, $_POST['secciones'])) { ?>
							<input type="checkbox" value="<?php echo $key; ?>" name="secciones[]" checked="checked"> <?php echo $seccion; ?>
						<?php } else { ?>
							<input type="checkbox" value="<?php echo $key; ?>" name="secciones[]"> <?php echo $seccion; ?>
						<?php } ?>
					</label>
				</div>
			<?php } ?>
			<label>Fecha de Nacimiento</label>
			<div class="form-group">
				<select name="dia">
					<option value="">Día</option>
					<?php for ($i = 1; $i <= 31; $i++):
						if (isset($_POST['dia']) && $_POST['dia'] == $i)
						{ ?>
							<option value="<?php echo $i; ?>" selected="selected"><?php echo $i; ?></option>
							<?php
						}
						else
						{ ?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php
						}
					endfor; ?>
				</select>
				<select name="mes">
					<option value="">Mes</option>
					<?php for ($i = 1; $i <= 12; $i++)
					{ ?>
						<option value="<?php echo $i; ?>" <?php echo(isset($_POST['mes']) && $_POST['mes'] == $i ? 'selected="selected"' : '') ?>><?php echo $i; ?></option>
					<?php } ?>
				</select>
				<select name="anio">
					<option value="">Año</option>
					<?php for ($i = date('Y'); $i >= 1900; $i--): ?>
						<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
					<?php endfor; ?>
				</select>
			</div>
			<label>Descripción</label>
			<div class="form-group">
				<textarea cols="50" rows="10" name="description"></textarea>
			</div>
			<div class="checkbox">
				<label>
					<input type="checkbox" name="terminos" value="1" <?php echo(isset($_POST['terminos']) ? 'checked="checked"' : '') ?>> Acepto los Términos y condiciones
				</label>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-default">Registrarme</button>
			</div>
		</form>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
	</div>
</body>
</html>
