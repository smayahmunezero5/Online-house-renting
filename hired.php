<?php
include("linkad.php")
?>
<body text="white">
<?php
$con=mysql_connect("localhost","root","")or die("fail to connect").mysql_error();
mysql_select_db("ohrs");
?>
<table border='1'width='90%'align='center'>
<tr>
<thead bgcolor='grey'>
<th>id</th>
<th>Full names</th>
<th>House ID</th>
<th>phone</th>
<th>Nation</th>
<th>action</th>
</thead>
</tr>
<?php
$sql=mysql_query("select * from hire");
if(mysql_num_rows($sql)){
while($row=mysql_fetch_array($sql))
{
echo"<tr>";
echo"<td>".$row['ID']."</td>";
echo"<td>".$row['fullnames']."</td>";
echo"<td>".$row['house_id']."</td>";
echo"<td>".$row['phone']."</td>";
echo"<td>".$row['nation']."</td>";
echo"<td><a href='act.php?ID=".$row['ID']."&act'>delete</a>
<a href='update.php?ID=".$row['ID']."&complete'>complete</a></td>";
echo"</tr>";
}}
else
{
echo"<tr><td colspan='10' style='text-align:center;'><b><i>No People has been rented</i></b></td></tr>";
}
mysql_close($con);
?>
</table>
</BODY>
</html>