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





<form action='' align='center' method=post><h3><caption align='center'><align='center' >Εξειδικευμένα Φίλτρα</caption>  </h3>
	 <table align='center' border='2' width='80%'>
	
		
	<b><tr><td  align="center" height="70px">
	 <label for="domatia">Δωμάτια και Κρεβάτια:</label>
  <select id="domatia" name="domatia" >
    <option value="mpania">Μπάνια </option>  
    <option value="ypnodwmatia">Υπνοδωμάτια</option>
    <option value="kouzines">Κουζίνες</option>
    <option value="kathistika">Καθιστικά</option>
	<option value="anapsyxi">Χώρους αναψυχής</option>	
  </select></td>
  <td align="center"><select name=tm> <?php for ($h=1;$h<7;$h++) echo "<option value=$h>$h</option>"; ?></select> </td></tr></b>
  

		<b><tr><td colspan='2' align="center" height="70px"><input type=radio align="center" name=epagelamtiko><label>Επαγγελματικό ταξίδι;</label></td></tr></b>
		<b><tr><td colspan='2' align="center" height="70px"><label>Προσβασιμότητα</label><br>
																								<input type="checkbox"  value='amea' name=amea> <label>Είσοδος για άτομα με ειδικές ανάγκες</label>
																								<input type="checkbox"  value='skalopatia' name=skalopatia> <label>Σκαλοπάτια πριν την είσοδο</label><br>
																								<input type="checkbox"  value='asanser' name=asanser> <label>Ασανσέρ</label>
																								<input type="checkbox"  value='garage' name=garage> <label>Γκαράζ</label><br>
																								<input type="checkbox"  value='kipos' name=kipos> <label>Κήπος</label>
																								<input type="checkbox"  value='pisina' name=pisina> <label>Πισίνα</label><br>
																								<input type="checkbox"  value='skala' name=skala> <label>Εσωτερική σκάλα</label>
	    <br></td></tr></b>
		<b><tr><td colspan='2' align="center" height="70px"><label>Ανέσεις</label><br>
																								<input type="checkbox"  value='petsetes' name=petsetes> <label>Είδη μπάνιου(Πετσέτες, οδοντόπαστα κ.τ.λ.)</label><br>
																								<input type="checkbox"  value='sentonia' name=sentonia> <label>Καθαρά σεντόνια</label>
																								<input type="checkbox"  value='wifi' name=wifi> <label>Wi-Fi</label><br>
																								<input type="checkbox"  value='kalorifer' name=kalorifer> <label>Καλοριφέρ</label>
																								<input type="checkbox"  value='klimatismos' name=klimatismos> <label>Κλιματισμός</label><br>
																								<input type="checkbox"  value='plintirio' name=plintirio> <label>Πλυντήριο ρούχων</label>
																								<input type="checkbox"  value='tzaki' name=tzaki> <label>Τζάκι</label><br>
																								<input type="checkbox"  value='pistolaki' name=pistolaki> <label>Πιστολάκι μαλλιών</label>
																								<input type="checkbox"  value='mwro' name=mwro> <label>Κρεβάτι μωρού</label><br>
																								<input type="checkbox"  value='tileorasi' name=tileorasi> <label>Τηλεόραση</label>
																								<input type="checkbox"  value='sidero' name=sidero> <label>Σίδερο</label>
	    <br></td></tr></b>
		<b><tr><td colspan='2' align="center" height="70px"><label>Ειδικοί Κανόνες</label><br>
																								<input type="checkbox"  value='katoikidia' name=katoikidia> <label>Επιτρέπονται κατοικίδια</label><br>
																								<input type="checkbox"  value='kapnisma' name=kapnisma> <label>Επιτρέπεται το κάπνισμα</label><br>
																								<input type="checkbox"  value='prosklisi' name=prosklisi> <label>Επιτρέπεται η πρόσκληση τρίτων στο χώρο</label><br>
																								<input type="checkbox"  value='metrita' name=metrita> <label>Δυνατότητα πληρωμής με μετρητά</label>
																								
	    <br></td></tr></b>
		</table> 
		
	
	
	

	
	
	
	<br><br><h3><input type="submit"  value="Αναζήτηση"></h3>
	</form>



</div>

</body>