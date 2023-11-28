<?php 

	$tpl = new EngineTpl('views/detalle.php');

	$tpl->assignVar("USUARIO", $_SESSION[APP_NAME]["user_name"]);

	$tpl->printToScreen();

 ?>