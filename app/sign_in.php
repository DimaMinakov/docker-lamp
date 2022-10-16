
<!DOCTYPE HTML>
<html>
<head>
<?php session_start(); ?>
<meta charset="utf-8"/>
<title>Sign in</title>





<?php

  

  function form() {

    ?>
	
    <form action="sign_in.php" onsubmit="ccpro" method="post">

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
	
	<input type="submit" value="SEND" name="submit"/><br /><br />
	 </div>

    </form>  
		
    <?php

  }

?>

</head>


<body style="background-color:#f6e1f9">

<img src="Grand Budapest Hotel1.jpg" width="200px"/>
</br>
</br>

<?php




echo "<h>Fill the form</h3>";



form();


function Insert(){
  $servername = "db";
$username = "admin";
$password = "test";
$dbname = "database";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['name'])){
$name = htmlspecialchars($_POST['name']);
$dni = $_POST['dni'];
$date_b = htmlspecialchars($_POST['date_b']);
$tel = htmlspecialchars($_POST['tel']);
$mail = htmlspecialchars($_POST['mail']);
$user = $_POST['user'];
$pass = $_POST['pass'];
$chek = true;


if (!preg_match('/^[a-zA-Z\s]+$/', $name)) {
$chek = false;
$mess = "Name must contain only characters!";

}
	if (!preg_match('/^[0-9]{4}-(((0[13578]|(10|12))-(0[1-9]|[1-2][0-9]|3[0-1]))|(02-(0[1-9]|[1-2][0-9]))|((0[469]|11)-(0[1-9]|[1-2][0-9]|30)))$/', $date_b)) {
$chek = false;
	$mess = "Date format must be yyyy-mm-dd!";}


	if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
	$chek = false;
	$mess = "Email is not valid!";
	}
	
	if (!preg_match('/^\d{9}$/', $tel)) {
	$chek = false;	
	$mess = "Phone number is not valid!";
	}

if ($chek == true){
  $ins = mysqli_query($conn, "INSERT INTO sign_in SET name='$name', dni='$dni', date_b = '$date_b', tel = '$tel', mail = '$mail', user = '$user', pass = '$pass'") or die (mysqli_error($conn));
    
    
  
  $all = mysqli_query($conn, "select * from sign_in where user = '$user'") or die (mysqli_error($conn));
  
  echo '<table style="border: 1px solid black;"><tr ><th>ID</th><th>Name</th><th>DNI</th><th>Date of birth</th><th>Phone</th><th>Mail</th><th>Username</th></tr>';
while  ($showall= mysqli_fetch_assoc($all)) {
     echo "<tr><td>{$showall['id']}</td><td>{$showall['name']}</td><td>{$showall['dni']}</td><td>{$showall['date_b']}</td><td>{$showall['tel']}</td><td>{$showall['mail']}</td><td>{$showall['user']}</td></tr>";
}
echo '</table>';
}
else {
	echo '<script language="javascript">alert("Data error!");</script>';
	echo $mess;
	}
  }
}


Insert();
echo "<p><a href=\"index.php\">Return to main page</a></p>";
?>


</br>

</body>
</html>
