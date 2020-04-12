<?php
include "../connect.php";
?>
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
  
   h1
		{
			font-weight: bold;
			font-size: 0.875em;
			color: black;
		}
  </style>
</head>

<body>
<div id="mySidenav" class="sidenav" >
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="../admin/findhome.php">Find the perfect home for you</a>
  <a href="../rent/index.php">Rent your house</a>
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

<?php
	if (isset($_POST['username']))
	{
		$res=mysqli_query($conn,"select * from admin where username='$_POST[username]' and password='$_POST[password]'");
		
		if(mysqli_num_rows($res)>0)
			$connect=1;	
		else
			$connect=0;
	}

	 if ($connect==1)
			echo "<h1>Επιτυχής Σύνδεση , καλωσορίσατε ",$_POST['username']," !</h1>";
	else
		    header("Location: fail_log.php");
?>
</div>
</body>