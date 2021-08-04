<?php
include("linkad.php")
?>
<body text="white">
</div>
<div id="center">
</br></br></br>
<?php
$con=mysql_connect("localhost","root","")or die("fail to connect").mysql_error();
mysql_select_db("ohrs");
$cycy=mysql_query("select* from contact");
echo"<table border='1'width='90%'align='center'>
<tr>
<thead bgcolor='grey'>
<th>id</th>
<th>full names</th>
<th>telephone</th>
<th>message</th>
</thead>
</tr>";
while($row=mysql_fetch_array($cycy))
{
echo"<tr>";
echo"<td>".$row['id']."</td>";
echo"<td>".$row['fullnames']."</td>";
echo"<td>".$row['contact']."</td>";
echo"<td>".$row['message']."</td>";
echo"</tr>";
}
echo"</table>";
mysql_close($con);
?>
</div>

<div id="body">

</div>




</div>







</body>
</html>
