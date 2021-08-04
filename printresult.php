<title>:::.. print your bill</title>

</br>
<?php
$con=mysql_connect("localhost","root",'') or die("failed to connect").mysql_error();
mysql_select_db("ohrs");
?>
<body onLoad="printpage()" background="images/back5.jpg">
<SCRIPT LANGUAGE="JavaScript"> 
if (window.print) {
document.write('<form><input type=button name=print value="Print Page"onClick="window.print()"></form>');

}
</script>
<table border="0"width="50%"align="center">
<table border="0"width="50%"align="center">


<td>
<tr>



 </br></td></td></tr>
</table>
</br>
<?php
$con=mysql_connect("localhost","root",'') or die("failed to connect").mysql_error();
mysql_select_db("ohrs");
?>
<table>
<form >
<a href="check.php"><img src="images/flesh.png">
</from>
</table>
<table border='4' align='center'>
<tr>
<th><u><i>Id nbr</i></u></th>
<?php
$sql=mysql_query("select * from allow where fullnames='$_POST[id]'");
if(mysql_num_rows($sql)){
while($row=mysql_fetch_array($sql))
{
echo"<td align='center'>".$row['ID']."</td>";
}}
else
{
echo"<td style='text-align:center;'>uknown</td>";
}
mysql_close($con);
?>
<?php
$con=mysql_connect("localhost","root",'') or die("failed to connect").mysql_error();
mysql_select_db("ohrs");
?>
</th><tr/>
<tr>
<th><u><i>full names:</i></u></th>
<?php
$sql=mysql_query("select * from allow where fullnames='$_POST[id]'");
if(mysql_num_rows($sql)){
while($row=mysql_fetch_array($sql))
{
echo"<td align='center'>".$row['fullnames']."</td>";
}}
else
{
echo"<td style='text-align:center;'>uknown</td>";
}
mysql_close($con);
?>
<?php
$con=mysql_connect("localhost","root",'') or die("failed to connect").mysql_error();
mysql_select_db("ohrs");
?>
</th>
<tr/>
<tr>
<th><u><i>Telephone</i></u></th>
<?php
$sql=mysql_query("select * from allow where fullnames='$_POST[id]'");
if(mysql_num_rows($sql)){
while($row=mysql_fetch_array($sql))
{
echo"<td align='center'>".$row['phone']."</td>";
}}
else
{
echo"<td style='text-align:center;'>uknown</td>";
}
mysql_close($con);
?>
<?php
$con=mysql_connect("localhost","root",'') or die("failed to connect").mysql_error();
mysql_select_db("ohrs");
?>
</th>
<tr/>
<tr>
<th><u><i>Address:</i></u></th>
<?php
$sql=mysql_query("select * from allow where fullnames='$_POST[id]'");
if(mysql_num_rows($sql)){
while($row=mysql_fetch_array($sql))
{
echo"<td align='center'>".$row['address']."</td>";
}}
else
{
echo"<td style='text-align:center;'>uknown</td>";
}
mysql_close($con);
?>
<?php
$con=mysql_connect("localhost","root",'') or die("failed to connect").mysql_error();
mysql_select_db("ohrs");
?>
</th>
</tr>
<tr>
<th><u><i>nationality:</i></u></th>
<?php
$sql=mysql_query("select * from allow where fullnames='$_POST[id]'");
if(mysql_num_rows($sql)){
while($row=mysql_fetch_array($sql))
{
echo"<td align='center'>".$row['nation']."</td>";
}}
else
{
echo"<td style='text-align:center;'>uknown</td>";
}
mysql_close($con);
?>
<?php
$con=mysql_connect("localhost","root",'') or die("failed to connect").mysql_error();
mysql_select_db("ohrs");
?>
</th>
</tr>
<tr>
<th><u><i>Date:</i></u></th>
<?php
$sql=mysql_query("select * from allow where fullnames='$_POST[id]'");
if(mysql_num_rows($sql)){
while($row=mysql_fetch_array($sql))
{
echo"<td align='center'>".$row['A_date']."</td>";
}}
else
{
echo"<td style='text-align:center;'>uknown</td>";
}
mysql_close($con);
?>
<?php
$con=mysql_connect("localhost","root",'') or die("failed to connect").mysql_error();
mysql_select_db("ohrs");
?>
</th>
</tr>
<tr>
<th><u><i>Time:</i></u></th>
<?php
$sql=mysql_query("select * from allow where fullnames='$_POST[id]'");
if(mysql_num_rows($sql)){
while($row=mysql_fetch_array($sql))
{
echo"<td align='center'>".$row['A_time']."</td>";
}}
else
{
echo"<td style='text-align:center;'>uknown</td>";
}
mysql_close($con);
?>
<?php
$con=mysql_connect("localhost","root",'') or die("failed to connect").mysql_error();
mysql_select_db("ohrs");
?>
</th>
</tr>
<tr>
<th><u><i>Operation Date:</i></u></th>
<?php
$sql=mysql_query("select * from allow where fullnames='$_POST[id]'");
if(mysql_num_rows($sql)){
while($row=mysql_fetch_array($sql))
{
echo"<td align='center'>".$row['operation_date']."</td>";
}}
else
{
echo"<td style='text-align:center;'>uknown</td>";
}
mysql_close($con);
?>
<?php
$con=mysql_connect("localhost","root",'') or die("failed to connect").mysql_error();
mysql_select_db("ohrs");
?>
</th>
</tr>
<tr>
<th><u><i>house</i></u></th>
<?php
$sql=mysql_query("select * from allow where  fullnames='$_POST[id]'");
if(mysql_num_rows($sql)){
while($row=mysql_fetch_array($sql))
{
echo"<td>"."<img src='".$row['image']."'height='40%'width='100%'</td>";
}}
else
{
echo"<td style='text-align:center;'>uknown</td>";
}
mysql_close($con);

?>
</th>
</tr>
</table>
</font>
</body>
