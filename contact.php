
<form action="contact.php" method = "POST">
<head>
	<link rel="stylesheet" type="text/css" href="style1.css"></link>
</head>
<body>
	<div class="title">
		<h1>CONTACT US</h1>
		
	</div>
	<div class="box">
		<form class="fix">
			<input type="text" name="name" class="control" placeholder="Enter Your Name" required><br>
			<input type="email" name="email" class="control" placeholder="Enter Your Email" required><br>
			<textarea name="message" class="control" placeholder="Message" rows="4" required></textarea><br>
			<input type="submit" name="submit" class="control1" value="Send Message">
			<a href="home.php" color="#fff"><b>Back</b></a>
		</form>
	</div>
</form>

</body>
<?php

include_once 'crud.php';
   $crud = new crud();

   if(isset($_POST['submit'])){
       $name=$_POST['name'];
       $email=$_POST['email'];
       $message=$_POST['message'];
       

       $res = $crud->execute("insert into contact1(Name,Email,Message) values('$name','$email','$message')");

       if($res){
        

           echo("Successful!!!");
           echo("<br/>");
       }
       else{
           echo("OOPPS!!! Something wrong");
           echo("<br/>");
       }

   }

?>


