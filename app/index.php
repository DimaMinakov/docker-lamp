
<!DOCTYPE HTML>
<html lang="pl">
<head>
<meta charset="utf-8"/>
<?php session_start(); ?>
<title>Budapest_hotel</title>

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
						  
						  <li>  <a href="account.php">My account</a>  </li>
                </ul>
            </div>
			
			</div>





<div id="oferta1" style="background-color:f6e1f9">



<?php

  

  function input() {

    ?>
	
    <form action="database2.php" method="post">

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
	
<input  type="submit" id = "send" value="SEND" name="submit" /><br /><br />
	 </div>

    </form>  	
    
    	
    <?php

  }

?>

<?php

/*function user(){

if(isset($_GET['user'])){
	
	$user = $_GET['user'];
} return $user;
}*/




echo 'Create account or log in:<br /><br />
<form action="index.php" method="GET">
<br />User:<br />

    <input name="user" value="" /><br /><br />
	
	Password: 
	<br /><input name="pass" type="password" value="" /><br /><br />
   <input type="submit" value="SUBMIT">
   
   </form><br />';

//$user = user();
//echo "$user";




$servername = "db";
$username = "admin";
$password = "test";
$dbname = "database";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if(isset($_GET['user'])){
	
	$user = $_GET['user'];
	
	$_SESSION['user'] = $user;
	
	/*echo '<form method="get" action="account.php">
    <input type="hidden" name="user" value="$user">
    <input type="submit">
</form>';*/
	
	$result = mysqli_query($conn, "select pass from sign_in where user = '$user'") or die (mysqli_error($conn));
	$row = mysqli_fetch_array($result);
	if(isset($row[0])){
	$pass = $row[0];
	}
	}
	
   
if(isset($_GET['pass'])){
	
	$pass1 = isset($_GET['pass']) ? $_GET['pass']: "";

if ($pass1 == "$pass") {
echo '<p>
<b>Choose</b>
   </p>';

input();





}
else {
	echo "Incorrect password!";
}
}
?>







</div>

</br>

</body>
</html>



