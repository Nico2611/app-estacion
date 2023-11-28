<?php 

	$tpl = new EngineTpl('views/panel.html');

	$tpl->assignVar("USUARIO", $_SESSION[APP_NAME]["user_name"]);

	$tpl->printToScreen();

 ?>