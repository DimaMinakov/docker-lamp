
<!DOCTYPE HTML>
<html lang="pl">
<head>
<?php session_start(); ?>
<meta charset="utf-8"/>
<title>Budapest_hotel</title>

<?php

  

  function form() {

    ?>
	
    <form action="account.php" onsubmit="ccpro" method="post">

    <div>

    Name and lastname:<br />

    <input name="name" value="" /><br /><br />

    DNI:<br />

    <input name="dni" value="" /><br /><br />
	
	Data of birth:<br />

    <input name="date_b" value="" /><br /><br />
	
	Phone:<br />

    <input name="tel" value="" /><br /><br />
	
	E-mail:<br />

    <input name="mail" value="" /><br /><br />
	
	User name:<br />

    <input name="user" value="" /><br /><br />
	
	Password:<br />

    <input name="pass" value="" /><br /><br />
	
	<input type="submit" value="UPDATE" onclick = "Update()" name="submit"/><br /><br />
	 </div>

    </form>  
		
    <?php

  }

?>

<style type="text/css">
<!--
		body {

		background-color:f6e1f9;

			

		}
td, th {
border: 1px solid black
}
		#header {
            text-align:center;

			height:260px;
			
			width:100%;

		}

		#cale {
           
			.width:500px;
			.height:390px;

width:65%;
		}

		#menu {
            
			width:300px;
			height:490px;
			float:left;
            margin-left: auto;
            


		}

		#oferta1 {
            
			width:900px;
			height:490px;
			padding:2px;
			font-size:22px;
			font-family:Times New Roman;
			color:#000000;
			float:left;
           
            margin-left: 110px;

		}
            



		#logo h1 {
			margin-top:20px;
			margin-bottom: 30px;
			font-size:90px;
			font-family:Arial;
			color:#626466;
			padding-right: 0px;
			padding-left: 100px;
            
		}

		#logo p {
			margin-top:10px;
			margin-bottom: 0px;
			margin-left: 75px;
			font-size:18px;
			font-family:Arial;
			color:#626466;
            text-align:left;
            
		}

		#menu ul {

			width: 190px;
			padding: 0;
			margin-top:10px;
			margin-left:30px;
            margin-bottom:30px;
		}

		#menu li {

			
			display: block;
			list-style: none;
			margin-left: 5px;
			padding: 0;
            

		}

		
		#menu ul a:link, ul a:visited {
		margin-left: 50px;
			display: block;
			width: 220px;
			
			text-decoration: none;
			padding: 12px;
			
			font-weight: bold;
			background-color: #f6e4f1;
			color: #626466;

			font-family:arial;
			font-size:22px;
		}

		
		#menu ul a:hover {
			width: 220px;
			background-color: #e596d1;
			color: #626466;

		}

		#oferta1 p {
            
			margin-top:5px;
            
			font-size:22px;
			font-family:Times New Roman;
			letter-spacing: 0.5pt
                
		}
		-->
</style>









</head>
<table border="0" width="100%" cellspacing="0" cellpadding="0" background="">


</table>
	<body style="background-color:#f6e1f9">
        
		<div id="header" >
			<div id="logo" style="background-color:f6e1f9">

				<h1><img src= "Grand Budapest Hotel1.jpg" width="200px" style="margin-right:80px">Grand Budapest Hotel</h1>
				<p>
				
				street. Street 123, 12-345 City<br>
				telefon: 123 456 789
				</p>
			</div>
		</div>
        <div id="cale">

            <div id="menu">
			
                <ul>
                    
                    <li>  <a href="#">Offer</a>   </li>
                    <li>  <a href="#">Contact</a>  </li>
                    <li>  <a href="#">How to get</a>  </li>
                    <li>  <a href="sign_in.php">Create account</a>  </li>
						  
						  <li>  <a href="#">My account</a>  </li>
                </ul>
            </div>
			
			</div>





<div id="oferta1" style="background-color:f6e1f9">



<?php

  

  function input() {

    ?>
	
    <form action="account.php" method="post">

    <div>

    Input date:<br />

    <input name="date" value="" /><br /><br />

    	
    Input days ammount:<br />

    <input name="day_am" value="" /><br /><br />

    	
    Adults:<br />

    
    <select name="adult">
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
	</select>
<br /><br />
   Children:<br />

    <select name="child">
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
	</select>
<br /><br />

    	

    <p>
Additional services
<input type="checkbox" name="nazwa" value="wartość" onclick="document.getElementById('identyfikator').style.display = this.checked ? 'block' : 'none'; ">



<div id="identyfikator" style="display: none">

	
	<p>
Swimming pool


<input type="checkbox" name="nazwa2" value="wartość" onclick="document.getElementById('identyfikator2').style.display = this.checked ? 'block' : 'none'; ">



<div id="identyfikator2" style="display: none">
<p>

Persons:
   </p>
	<select name="swimm">
		<option>0</option>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
	</select>

	</div>

	
	<p>
Sauna


<input type="checkbox" name="nazwa2" value="wartość" onclick="document.getElementById('identyfikator3').style.display = this.checked ? 'block' : 'none'; ">



<div id="identyfikator3" style="display: none">






    <p>
Persons:
    </p>
	<select name="sauna">
		<option>0</option>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
	</select>

</div>



<p>
Spa


<input type="checkbox" name="nazwa2" value="wartość" onclick="document.getElementById('identyfikator4').style.display = this.checked ? 'block' : 'none'; ">



<div id="identyfikator4" style="display: none">



<p>


    <p>
Persons:
    </p>
	<select name="spa">
		<option>0</option>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
	</select>

</div>

   </p>
   
   </div>
	
<input  type="submit" id = "send" value="SEND" onclick = "Update2()" name="submit" /><br /><br />
	 </div>

    </form>  	
    
    	
    <?php

  }

?>

<?php


echo 'My profile:<br /><br />';
$servername = "db";
$username = "admin";
$password = "test";
$dbname = "database";
$user = $_SESSION['user'];

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


   
  
  $all = mysqli_query($conn, "select * from sign_in where user = '$user'") or die (mysqli_error($conn));
  
  echo '<table style="border: 1px solid black;"><tr ><th>ID</th><th>Name</th><th>DNI</th><th>Date of birth</th><th>Phone</th><th>Mail</th><th>Username</th></tr>';
while  ($showall= mysqli_fetch_assoc($all)) {
     echo "<tr><td>{$showall['id']}</td><td>{$showall['name']}</td><td>{$showall['dni']}</td><td>{$showall['date_b']}</td><td>{$showall['tel']}</td><td>{$showall['mail']}</td><td>{$showall['user']}</td></tr>";

echo '</table>';
  
  
  
}


//echo "";
echo "<p><a href=\"index.php\">Return to main page</a></p>";


?>

Modify
<input type="checkbox" name="nazwa" value="wartość" onclick="document.getElementById('identyfikator').style.display = this.checked ? 'block' : 'none'; ">

<div id="identyfikator" style="display: none">
<?php


form();

function Update(){
$servername = "db";
$username = "admin";
$password = "test";
$dbname = "database";

$user = $_SESSION['user'];

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['name']) || isset($_POST['dni']) || isset($_POST['date_b']) || isset($_POST['tel']) || isset($_POST['mail']) || isset($_POST['user']) || isset($_POST['pass'])){
$name = $_POST['name'];
$dni = $_POST['dni'];
$date_b = $_POST['date_b'];
$tel = $_POST['tel'];
$mail = $_POST['mail'];
$user = $_POST['user'];
$pass = $_POST['pass'];

  $ins = mysqli_query($conn, "UPDATE sign_in SET name='$name', dni='$dni', date_b = '$date_b', tel = '$tel', mail = '$mail', user = '$user', pass = '$pass' where user = '$user'") or die (mysqli_error($conn));
    
    
}
  
  
  }

Update();

function List_(){
	
	

$servername = "db";
$username = "admin";
$password = "test";
$dbname = "database";
global $user;
$user = $_SESSION['user'];

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
die("Connection failed: " . mysqli_connect_error());}
  
  if(isset($_GET['show'])){ 
  $all = mysqli_query($conn, "select * from oder where user = '$user'") or die (mysqli_error($conn));
  
  echo 'My oders</br><br/><table style="border: 1px solid black;"><tr ><th>ID</th><th>Date</th></tr>';
while  ($showall= mysqli_fetch_assoc($all)) {
     echo "<tr><td>{$showall['ID']}</td><td>{$showall['date']}</td></tr>";
}
echo '</table>';
  }
else{
echo '<form id = "show" action="'.$_SERVER["PHP_SELF"]. ' " method="GET">
   <input id = "show" type="submit" name="show" value="My orders">
   </form>';
}
}

?>
</br></br>
</div>

<div>
</br>
<?php

List_();
?>
</div>

<div>
</br>
<?php

function Find(){
  $servername = "db";
$username = "admin";
$password = "test";
$dbname = "database";
global $inv;

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo '<br/><form action="" method="GET">
<br />Input Your Oder ID:<br/>
   <input type="submit" value="Search">
   <input name="inv" value="" />
   </form>';
if(isset($_GET['inv'])){
$inv = $_GET['inv'];
 $find = mysqli_query($conn, "select * from oder where ID = '$inv'") or die (mysqli_error($conn));
 
  
 
  
  echo '</br><table style="border: 1px solid black;"><tr ><th>ID</th><th>Date</th><th>Days</th><th>Adults</th><th>Children</th><th>Swimming pool</th><th>Spa</th><th>Sauna</th><th>Total</th></tr>';
while  ($showall= mysqli_fetch_assoc($find)) {
     echo "<tr><td>{$showall['ID']}</td><td>{$showall['date']}</td><td>{$showall['days']}</td><td>{$showall['adult']}</td><td>{$showall['child']}</td><td>{$showall['swimm']}</td><td>{$showall['spa']}</td><td>{$showall['sauna']}</td><td>{$showall['total']}</td></tr>";
}
echo '</table>';
}
return $inv;

  }
  Find();

  function Drop(){
	global $inv;
	  	 $servername = "db";
$username = "admin";
$password = "test";
$dbname = "database";
echo "$inv, hola";

$conn = mysqli_connect($servername, $username, $password, $dbname);
$last_id = mysqli_insert_id($conn);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
   

 $delete = mysqli_query($conn, "DELETE FROM `oder` WHERE ID=$inv") or die (mysqli_error($conn));
echo "Order dropped <br />";




/*else{
echo '<form id = "delete" action="'.$_SERVER["PHP_SELF"]. ' " method="GET">
   <input id = "drop" type="submit" name="drop" value="Delete">
   </form>';
}*/
  
 }
 
 if(isset($_GET['drop'])){ Drop(); }
 //Drop();
 ?>
 <a href='account.php?drop=true'>DELETE</a>
 Modify
<input type="checkbox" name="nazwa" value="wartość" onclick="document.getElementById('identyfikator2').style.display = this.checked ? 'block' : 'none'; ">

<div id="identyfikator2" style="display: none">
 
 <?php
 input();
 
 function Update2(){
$servername = "db";
$username = "admin";
$password = "test";
$dbname = "database";
$user = $_SESSION['user'];
global $inv;
echo "$inv";
echo "hola";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['date'])){
$date = $_POST['date'];

$day_am = $_POST['day_am'];

$adult = $_POST['adult'];

$adult_price = $day_am*60*$adult;

$child = $_POST['child'];

$child_price = $day_am*40*$child;

$swimm = $_POST['swimm'];
$swimm_price = $swimm*10;

$spa = $_POST['spa'];
$spa_price = $spa*20;

$sauna = $_POST['sauna'];
$sauna_price = $sauna*15;

$total = $adult_price + $child_price + $swimm_price + $spa_price + $sauna_price;


  $ins = mysqli_query($conn, "update oder SET date='$date', days = '$day_am', adult = '$adult_price', child = '$child_price', swimm = '$swimm_price', spa = '$spa_price', sauna = '$sauna_price',    total = '$total' where ID = $inv") or die (mysqli_error($conn));
   

   
    

$last_id = mysqli_insert_id($conn);
$all = mysqli_query($conn, "select * from oder where ID = $inv") or die (mysqli_error($conn));
  
  echo 'Summury</br><br/><table style="border: 1px solid black;"><tr ><th>ID</th><th>Date</th><th>Days</th><th>Adults</th><th>Children</th><th>Swimming pool</th><th>Spa</th><th>Sauna</th><th>Total</th></tr>';
while  ($showall= mysqli_fetch_assoc($all)) {
     echo "<tr><td>{$showall['ID']}</td><td>{$showall['date']}</td><td>{$showall['days']}</td><td>{$showall['adult']}</td><td>{$showall['child']}</td><td>{$showall['swimm']}</td><td>{$showall['spa']}</td><td>{$showall['sauna']}</td><td>{$showall['total']}</td></tr>";
}
echo '</table>';


}

  }
 
 Update2();
 
?>
</div>

</div>


</body>
</html>



