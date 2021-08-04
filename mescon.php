<?php
$con=mysql_connect("localhost","root","")or die("fail to connect").mysql_error();
mysql_select_db("ohrs");
$west=mysql_query("insert into contact values('','$_POST[name]','$_POST[phone]','$_POST[message]')");
if(!$west)
{
echo"message not delivery".mysql_error();
}
else
{
echo'<script>alert("message derivered")</script>';
}
$con=mysql_close();
?>
</div>

<?php
include("messages.php")
?>