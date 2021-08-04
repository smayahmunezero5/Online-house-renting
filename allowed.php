<?php
include("linkad.php")
?>
<body text="white"'>
<font color="black" face="times new roman" align='center'><i><b><h1>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
Confirmed Appointment</h1></b></i></font>
<?php
$con=mysql_connect("localhost","root",'') or die("failed to connect").mysql_error();
mysql_select_db("ohrs");
?>
<table border='1' width='90%' height='70' align='center' >
<tr>
<thead bgcolor='#009999'>
<th>ID</th>
<th>Full names</th>
<th>Phone</th>
<th>Address</th>
<th>nation</th>
<th>DATE</th>
<th>TIME</th>
<th>OPERATION DATE</th>
<th>IMAGE</th>
</thead>
</tr>
<?php
$sql=mysql_query("select* from allow");
if(mysql_num_rows($sql)){
while($row=mysql_fetch_array($sql))
{
echo"<tr>";
echo"<td align='center'><b>".$row['ID']."</td>";
echo"<td align='center'><b><i>".$row['fullnames']."</td>";
echo"<td align='center'><b><i>".$row['phone']."</td>";
echo"<td align='center'><b><i>".$row['address']."</td>";
echo"<td align='center'><b><i>".$row['nation']."</td>";
echo"<td align='center'><b><i>".$row['A_date']."</td>";
echo"<td align='center'><b><i>".$row['A_time']."</td>";
echo"<td align='center'><b><i>".$row['operation_date']."</td>";
echo"<td>"."<img src='".$row['image']."'height='70%'width='100%'</td>";
echo"</tr>";
}}
else
{
echo"<tr><td colspan='11' style='text-align:center;'><b><i>No People you have allowed!!</i></b></td></tr>";
}
mysql_close($con);
?>
</body>
</html>