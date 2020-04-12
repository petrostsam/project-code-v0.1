<?php

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
			color: #0000ff
		}
		h2
		{
			text-align:center;
			color: #000000
		}
textarea {
  width: 100%;
  padding: 40px 10px;
  margin: 8px 4px;
  box-sizing: border-box;
}
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
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





<form action='' align='center' method=post><h3><caption align='center'><align='center' >Πληρωμή</caption>  </h3>
	 <table align='center' border='2' width='80%'>
	
		
	<b><tr><td colspan='2' align="center" height="70px">
	 <label for="Plirwste">Πληρώστε με:</label>
  <select id="plirwmi" name="plirwmi" >
    <option value="metrita">Μετρητά</option>  
    <option value="karta">Πιστωτική Κάρτα</option>
    <option value="tameio">Ταμείο</option>
    
  </select><input type="submit"  value="Επιλογή"></td></tr></b>
  

		
		</table> 
		
		
	
<br>
<br>


<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="">
      
        

          <div class="col-50">
            
            
            <label for="cname">Όνομα Κάρτας</label>
            <input type="text" id="cname" name="cardname" >
            <label for="ccnum">Αριθμός Κάρτας</label>
            <input type="text" id="ccnum" name="cardnumber" >
            <label for="expmonth">Ημερομηνία Λήξης</label>
            <input type="text" id="expmonth" name="expmonth" >
            
                <label for="cvv">CVV</label>
                <input type="number" id="cvv" name="cvv" >
              </div>
            </div>
          </div>
          
        </div>
       
      </form>
    </div>
  </div>
  
</div>



		
	<br><br><h3><input type="submit"  value="Επιβεβαίωση πληρωμής"></h3>
	
	

	
	
	
	
	</form>



</div>

</body>