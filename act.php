<?php
$con=mysql_connect("localhost","root",'') or die("failed to connect").mysql_error();
mysql_select_db("ohrs");
if(isset($_REQUEST['act'])){
$ed=$_REQUEST['ID'];
$que=mysql_query("DELETE FROM hire WHERE ID='$ed'");
if($que){
	$url="hired.php";
    // Jump to login page
    header('Location: '.$url);
}
}
?>