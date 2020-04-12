<?php
include "../connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <style>
		 body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;

  background-image: url("vacation.jpg");
  height: 100%; 

  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
  img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  }
  
  	table
		{
			background-color: #9999ff;
			align: center
		}
		h3
		{
			text-align:center;
		}
  </style>
</head>

<body>
<div id="mySidenav" class="sidenav" >
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="../index.php"><b>MAIN MENU</b></a>
  
  </div>
<div id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; <b>MENU</b></span>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>

	
	 <form action='' method=post><h3><caption align='center'><align='center' >Φόρμα Συμπλήρωσης Στοιχείων</caption>  </h3>
	 <table align='center' border='2' width='80%'>
	 <b><tr align='center'><td height='60px'>Πόλη:</td><td><input type=character name=places ></td></tr></b>
		<b><tr align="center"><td height="50px">Από:</td><td><select name=tm> <?php for ($h=1;$h<32;$h++) echo "<option value=$h>$h</option>"; ?></select> </td></tr></b>
		<b><tr align="center"><td height="50px">Έως:</td><td><select name=tm> <?php for ($h=1;$h<32;$h++) echo "<option value=$h>$h</option>"; ?></select> </td></tr></b>
		
	<b><tr><td  align="center" height="70px">
	 <label for="cars">Επισκέπτες:</label>
  <select id="episkeptes" name="episkeptes" >
    <option value="enilikes">Ενήλικες: Ηλικία 18+ </option>  
    <option value="efivoi">Έφηβοι: Ηλικία 12-17</option>
    <option value="paidia">Παιδιά: Ηλικία 5-11</option>
    <option value="vrefi">Βρέφη:  Ηλικία 0-4</option>
  </select></td>
  <td align="center"><select name=tm> <?php for ($h=1;$h<7;$h++) echo "<option value=$h>$h</option>"; ?></select> </td></tr></b>
  

		<b><tr><td colspan='2' align="center" height="70px"><input type="submit"  value='Αναζήτηση' name='assign'></td></tr></b>
		</table> 
	</form>



</div>

</body>