<?php
	include_once 'crud.php';
	
	$crud = new crud();
	
	$id = $_GET['id'];
	
	if($crud->delete($id,"book")){
		header("location:show_book.php");
	}


?>