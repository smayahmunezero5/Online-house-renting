<body text="white">
<?php
$con=mysql_connect("localhost","root","")or die("fail to connect").mysql_error();
mysql_select_db("ohrs");
$gh=mysql_query("insert into admin values('','$_POST[fname]','$_POST[lname]','$_POST[uname]','$_POST[pwd]')");
if(!$con)
{
echo"connection not successfull".mysql_error();
}
else
{
echo'<script>alert("ADMIN ADDED")</script>';
}
$con=mysql_close();
?>
</div>

<?php
include("new.php")
?>