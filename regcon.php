<?php
include("linkho.php")
?>
<div id="center">

    <td>
<p>
<?php
$con=mysql_connect("localhost","root","")or die("fail to connect").mysql_error();
mysql_select_db("ohrs");
$west=mysql_query("insert into client values('','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[phone]','$_POST[user]','$_POST[pass]')");
if(!$west)
{
echo"not registered".mysql_error();
}
else
{
echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><i><blink>registration successfull</b></i></blink>";
}
$con=mysql_close();
?></td><br/>
<a href="clogin.php">SIGNIN</a>
</BODY>
</html>
