<?php 


	$tpl = new EngineTpl('views/landing.html');

	$tpl->assignVar('USUARIOS', 100);

	$tpl->printToScreen();


 ?>