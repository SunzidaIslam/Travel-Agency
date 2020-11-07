<?php session_start();
  if(!isset($_SESSION['id_number'])){
    header('location:admin_login.php');
  }
  ?>




<style>
	.table{
		width: 100%;
		background color: : #717171;
		font-size: 18px;
		font-family: 'Josefin Sans';
	}

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
}


</style>