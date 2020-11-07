<?php
	include_once 'crud.php';
	
	$crud = new crud();
	
	$id = $_GET['id'];
	
	$query = "select * from book where id=$id";
	
	$result = $crud->getData($query);
	
	foreach($result as $res){
		$id = $res['id'];
         $f_name=$res['First_Name'];
       $l_name=$res['Last_Name'];
       $mobile=$res['Mobile_Number'];
       $email = $res['Email'];
       $person=$res['Person'];
       $date=$res['Date'];
	
	}
?>

<form action="editaction_book.php" method="POST">
	<input type="text" name="id" hidden value="<?php echo $id;?>"/>
    <input type="text" name="first" value="<?php echo $f_name;?>"/>
    <input type="text" name="last" value="<?php echo $l_name;?>"/>
	<input type="text" name="mobile" value="<?php echo $mobile;?>"/>
	<input type="text" name="email" value="<?php echo $email;?>"/>
	<input type="text" name="Person" value="<?php echo $person;?>"/>
	<input type="date" name="date" value="<?php echo $date;?>"/>
	<input type="submit" name="update" value="Update"/>
</form>