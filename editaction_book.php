<?php
	
	include_once 'crud.php';
	
	$Crud = new crud();
	
	if(isset($_POST['update'])){
	$id = $_POST['id'];
       $f_name=$_POST['first'];
       $l_name=$_POST['last'];
       $mobile=$_POST['mobile'];
       $email = $_POST['email']; 
       $Person=$_POST['Person'];
       $date=$_POST['date'];
		
		$result = $Crud->execute("Update book SET First_Name='$f_name',Last_Name='$l_name',Mobile_Number='$mobile',Email='$email',Person='$Person',Date='$date' where id=$id");
		
		if($result){
			header("Location:show_book.php");
		}else{
			echo "Insertion Problem!";
		}
		
	}
	
	
?>
