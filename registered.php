<?php
include("linkad.php")
?>
<body text="white">
<?php
$con=mysql_connect("localhost","root","")or die("fail to connect").mysql_error();
mysql_select_db("ohrs");
$cycy=mysql_query("select* from client");
echo"<table border='1'width='90%'align='center'>
<tr>
<thead bgcolor='grey'>
<th>id</th>
<th>first name</th>
<th>last name</th>
<th>e-mail</th>
<th>phone</th>
<th>username</th>
<th>password</th>
<th>action</th>
</thead>
</tr>";
while($row=mysql_fetch_array($cycy))
{
echo"<tr>";
echo"<td>".$row['ID']."</td>";
echo"<td>".$row['firstname']."</td>";
echo"<td>".$row['lastname']."</td>";
echo"<td>".$row['email']."</td>";
echo"<td>".$row['phone']."</td>";
echo"<td>".$row['username']."</td>";
echo"<td>".$row['password']."</td>";
echo"<td><a href='action.php?ID=".$row['ID']."&act'>delete</a></td>";  
echo"</tr>";
}
echo"</table>";
mysql_close($con);
?>


</BODY>
</html>