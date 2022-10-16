
<!DOCTYPE HTML>
<html lang="pl">
<head>
<meta charset="utf-8"/>
<title>data base</title>

<style type="text/css">

}
</style>

<?php session_start(); ?>
<?php

function Insert(){
$servername = "db";
$username = "admin";
$password = "test";
$dbname = "database";
$user = $_SESSION['user'];

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


  $ins = mysqli_query($conn, "INSERT INTO oder SET date='$date', days = '$day_am', adult = '$adult_price', child = '$child_price', swimm = '$swimm_price', spa = '$spa_price', sauna = '$sauna_price',    total = '$total', user = '$user'") or die (mysqli_error($conn));
   

   
    

$last_id = mysqli_insert_id($conn);
$all = mysqli_query($conn, "select * from oder where ID = '$last_id'") or die (mysqli_error($conn));
  
  echo 'Summury</br><br/><table style="border: 1px solid black;"><tr ><th>ID</th><th>Date</th><th>Days</th><th>Adults</th><th>Children</th><th>Swimming pool</th><th>Spa</th><th>Sauna</th><th>Total</th></tr>';
while  ($showall= mysqli_fetch_assoc($all)) {
     echo "<tr><td>{$showall['ID']}</td><td>{$showall['date']}</td><td>{$showall['days']}</td><td>{$showall['adult']}</td><td>{$showall['child']}</td><td>{$showall['swimm']}</td><td>{$showall['spa']}</td><td>{$showall['sauna']}</td><td>{$showall['total']}</td></tr>";
}
echo '</table>';
Drop();

}

  }
  
  
 
  




function Drop(){
	 $servername = "db";
$username = "admin";
$password = "test";
$dbname = "database";


$conn = mysqli_connect($servername, $username, $password, $dbname);
$last_id = mysqli_insert_id($conn);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
   
if(isset($_GET['drop'])){
 $delete = mysqli_query($conn, "DELETE FROM `oder` WHERE ID=(SELECT MAX(ID) FROM oder)") or die (mysqli_error($conn));
echo "Order dropped <br />";

}
else{
echo '<form id = "delete" action="'.$_SERVER["PHP_SELF"]. ' " method="GET">
   <input id = "drop" type="submit" name="drop" value="Delete">
   </form>';
}
  
 }
 
 
 function Find(){
  $servername = "db";
$username = "admin";
$password = "test";
$dbname = "database";


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
  }
  
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

//Find();

echo '<br/>';

 
?>


</head>


<body style="background-color:#f6e1f9">

<img src="Grand Budapest Hotel1.jpg" width="200px"/>
</br>
</br>
<div style="float:left">
<?php
Insert();
echo "<p><a href=\"index.php\">Return to main page</a></p>"; 
?>
</div>

 

</body>
</html>



