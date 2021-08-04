<?php
include("linkcl.php")
?>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("mysql", $con);
$con = mysql_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("ohrs", $con);
//$sql="select * from student";
if(isset($_REQUEST['complete'])){
$ed=$_REQUEST['house_id'];
$result = mysql_query("select * from house where house_id='$ed'");
while($rowval = mysql_fetch_array($result))
 {
$house= $rowval['house_id'];


}}
mysql_close($con);
?>
<body text="white"><br>
<div id="center">
In this form you will have to provide house id,your name,valid email,valid phone number,address and nationality <br>
After this form you will see your details and you be able to keep them,<br>you can use them when its in need.
       
<form method="post" action="hicon.php">

<center>
<br><br>
<table ><tr><td>
<tr><td> Full names</td><td><input type="text" name="fullname" required></td></tr>
<tr><td> HOUSE ID</td><td><input type="text" name="houseid" required></td></tr>
<tr><td> Telephone </td><td><input type="text" name="phone"required maxlength="10"></td></tr>
<tr><td> address </td><td><input type="text" name="address" required></td></tr>
<tr><td>nationality</td><td><input type="text" name="nation" required></td></tr>
<tr><td><input type="submit" value="SUBMIT"></a></td></tr></table></center> </center></form>
</body></html>