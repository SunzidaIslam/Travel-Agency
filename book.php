
<form action="book.php" method = "POST" style="border:1px solid #ccc">
  <div class="container">
    <div class="imgcontainer">
   <img src="pic/passenger.jpg" width="100%" height="50%" alt="Avatar" class="avatar">
  </div>
    <center><h2>Tourist Information</h2></center>
    <hr>
<label ><b>First Name</b></label>
    <input type="text" placeholder="Enter Your first name" name="first" required>

    <label ><b>Last Name</b></label>
    <input type="text" placeholder="Enter Your last name" name="last" required>

     <label ><b>Mobile Number</b></label>
    <input type="text" placeholder="Enter Your mobile number" name="mobile" required>

     <label for="email"><b>Email</b></label>
	<input type="text" placeholder="Enter Email" name="email" required>
	
	  <label><b>Person</b></label>
      <select class="select" name="Person">
        <option value="selected"> Select Number of Person </option>
        <option value="1"> 1 </option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
      </select><br>
	  
	<label><b>Departure Date:</b></label>
    <input type="date" name="dept-date" class="date">

    <center><input type="submit" onclick="alert('Booking Successfull')" class="button" value="Book now" name="submit">
     <a href="top_tour.php" class="button">Cancel</a></center>
</form>
<?php

include_once 'crud.php';
   $crud = new crud();

   if(isset($_POST['submit'])){
       $f_name=$_POST['first'];
       $l_name=$_POST['last'];
       $mobile=$_POST['mobile'];
       $email = $_POST['email'];
       $Person=$_POST['Person'];
       $date=$_POST['dept-date'];


       $res = $crud->execute("insert into book(First_Name,Last_Name,Mobile_Number,Email,Person,Date) values('$f_name','$l_name','$mobile', '$email', '$Person','$date')");

       if($res){
        

           echo("Your Booking is Successful");
           echo("<br/>");
       }
       else{
           echo("OOPPS!!! Your Booking is UNsuccessful");
           echo("<br/>");
       }

   }

?>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}


input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  font-size: 1.2rem;
}
img.avatar {
  width: 40%;
  border-radius: 20px;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
.button {
   border-radius: 10px;
  border: 1px solid black;
  background-color: blue;
  color: #FFFFFF;
  font-size: 12px;
  font-weight: bold;
  padding: 20px 150px;
  letter-spacing: 1px;
  text-transform: uppercase;
  transition: transform 80ms ease-in;
}

.button:hover {
  opacity:5;
}
.date{
  width: 100%;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  font-family: 'PT Sans', sans-serif;
  font-size: 1.2rem;
  display: block;
  padding: 0.5rem 1rem;
}
.imgcontainer {
  text-align: center;
  margin: 15px 0 10px 0;
}

.select{
   width: 40%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  font-size: 1.2rem;
}
.date{
  width: 100%;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  font-family: 'PT Sans', sans-serif;
  font-size: 1.2rem;
  display: block;
  padding: 0.5rem 1rem;
}
