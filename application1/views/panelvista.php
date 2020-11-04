<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Panel de Usuarios</title>
</head>
<body>

<h1>Panel de Usuarios</h1>
<a href="<?php echo base_url(); ?>index.php/usuarios/logout">Cerrar session</a>

<h2>Hola <?php echo $this->session->userdata('login') ?></h2>


</body>
</html>