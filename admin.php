<?php session_start();
  if(!isset($_SESSION['id_number'])){
    header('location:admin_login.php');
  }
  ?>
<header>
<center><img src="pic/tourist_information.png" style="width:350px;height:250px;"></center>
<center><h1><b>Check Updates</b></h1></center>
		<center><button class="tourist" onclick="$('#showbook').slideUp();" >Tourists Information</button>
		
<?php
 header("Access-Control-Allow-Origin: *");
/*session_start();
if(!isset($_SESSION['email'])){
	header('location:login.php');
}*/
include_once 'Crud.php';

$crud = new Crud();

$query = "Select * from book order by id DESC";

$result = $crud->getData($query);

?>

<div id="showbook">
<center><img src="pic/booked.jpg" style="width:200px;height:200px;"></center>
<center><h1><b>Tour Booking Information</b></h1></center>



<center><table border="1" class="table">

	<tr>
		<td> First Name </td>
		<td> Last Name </td>
		<td> Mobile Number </td>
		<td> Email </td>
		<td> Person </td>
		<td> Date </td>

	</tr>
	<?php

	 foreach($result as $key=>$res){
		 echo "<tr >";
		 echo "<td>".$res['First_Name']."</td>";
		 echo "<td>".$res['Last_Name']."</td>";
		 echo "<td>".$res['Mobile_Number']."</td>";
		 echo "<td>".$res['Email']."</td>";
		 echo "<td>".$res['Person']."</td>";
		 echo "<td>".$res['Date']."</td>";

		  echo "<td> <a href='edit_book.php?id=$res[id]'>Edit</a> | 
               <a href='book_delete.php?id=$res[id]'>Delete</a></td>";
               echo "</tr>";
	 }
	 ?>
</table></center><br/>

<center><button class="button1" onclick="$('#showbook').slideUp();" >slide Up</button>


</div>
		
		
		
		
		
		
		
		
		
		
	<button class="comment" onclick="$('#comment').slideUp();">Comments</button><br/>
		
		<?php
 header("Access-Control-Allow-Origin: *");
/*session_start();
if(!isset($_SESSION['email'])){
	header('location:login.php');
}*/
include_once 'Crud.php';

$crud = new Crud();

$query = "Select * from contact1 order by id DESC";

$result = $crud->getData($query);

?>

<div id="comment">
<center><img src="pic/comments.jpg" style="width:200px;height:200px;"></center>
<center><h1><b> Comments</b></h1></center>



<center><table border="1" class="table">

	<tr>
		<td> Name </td>
		<td> Email </td>
		<td> Message </td>
		

	</tr>
	<?php

	 foreach($result as $key=>$res){
		 echo "<tr >";
		 echo "<td>".$res['Name']."</td>";
		 echo "<td>".$res['Email']."</td>";
		 echo "<td>".$res['Message']."</td>";
	

		 
	 }
	 ?>
</table></center><br/>

<center><button class="button1"  onclick="$('#comment').slideUp();" >slide Up</button>



</div>
		<a href="logout.php"><button >Logout</button></a>
		
</center>


</header>
	


<style>

.button{
  background-color:blue;
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
border-radius: 10px;
  width: 20%;
  align-items: center;
  font-size: 1.2rem;
  font-family: Century Gothic;

}
.button:hover {
  opacity: 1;
  background-color:#1E83E8;
}
.button1{
  background-color:blue;
  border: none;
  color: white;
  padding: 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 50px;
  width: 10%;
  align-items: center;
  font-size: 1.2rem;
  font-family: Century Gothic;
  
	}
.button1:hover {
  opacity: 1;
  background-color:#EF7E0F
}

.table{
		width: 100%;
		background color: : #717171;
		font-size: 18px;
		font-family: 'Josefin Sans';
	}

button{
  background-color:blue;
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 10px;
  width: 20%;
  align-items: center;
  font-size: 1.2rem;
  font-family: Century Gothic;

}
.button:hover {
  opacity: 1;
}
</style>


<script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
	
	
  <script type="text/javascript">
   $(document).ready(function(){
    $('.tourist').click(function(){
      $('#showbook').slideDown();
    })
	
	$('.comment').click(function(){
      $('#comment').slideDown();
    })
   })

  
  
  </script>
