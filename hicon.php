<body text="white">
<?php
$con=mysql_connect("localhost","root","")or die("connection failed").mysql_error();
mysql_select_db("ohrs");
$insert=mysql_query("insert into hire values('','$_POST[fullname]','$_POST[houseid]','$_POST[phone]','$_POST[address]','$_POST[nation]')");
if(!$insert)
{
echo'<script>alert("renting has not been sent")</script>'.mysql_error();
}
else
{
echo'<script>alert("renting has been succesful,You may check your renting After 3 Hours")</script>';
}
mysql_close($con);
?>


</body>
</html>

<?php
include("hire.php")
?>

