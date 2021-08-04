<body text="white">
<?php
$con=mysql_connect("localhost","root","")or die("connection failed").mysql_error();
mysql_select_db("ohrs");
$insert=mysql_query("insert into allow values('','$_POST[fullname]','$_POST[houseid]','$_POST[phone]','$_POST[address]','$_POST[nation]','$_POST[date]','$_POST[time]','$_POST[opdate]','$_POST[image]')");
if(!$insert)
{
echo"renting has not been confirm".mysql_error();
}
else
{
echo'<script><blink>alert("renting succesful")</blink></script>'.mysql_error();
}
mysql_close($con);
?>

</body>
</html>

<?php
include("hired.php")
?>