<?php

	include 'classes/Categoria.Class.php';


	$categoria = new Categoria;

	foreach ($categoria->getAll() as $value) {
		print $value->categoria."<br />";
	}; 
?>