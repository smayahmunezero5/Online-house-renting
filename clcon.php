<?php
	
	$con=mysql_connect("localhost","root","")or die("connection failed").mysql_error();
mysql_select_db("ohrs");
$login = $_POST['user'];
$password =$_POST['password'];
$qry="SELECT * FROM client WHERE Username='$login' AND Password='$password'";
$result=mysql_query($qry);
	if($result)
	{
		if(mysql_num_rows($result) > 0) {
			//Login Successful
			
			$expire=time()+60*60*24*30;//1 month
		    setcookie("username", $_REQUEST['user'], $expire);
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_Username'] = $member['ID'];
			$_SESSION['SESS_Password'] = $member['Password'];
			session_write_close();
			//if ($level="admin"){
			header("location: http://localhost/ohrs/ho.php");
			exit();
			//}
			//else{
			//header("location: front.php");
			//exit();
			//}
		}else {
			//Login failed
			header("location: http://localhost/ohrs/home.php");
			exit();
		}
	}else {
		die("Query failed");
	}
?>