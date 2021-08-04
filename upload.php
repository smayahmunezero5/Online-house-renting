<?php
$con=mysql_connect("localhost","root","")or die("fail to connect").mysql_error();
mysql_select_db("ohrs");
$west=mysql_query("insert into house values('$_POST[image]','','$_POST[id]')");
if(!$west)
{
echo"message not delivery".mysql_error();
}
else
{
echo'<script>alert("house added")</script>';

}
$con=mysql_close();
?>
 
 

</div>
</div>


</body>
</html>


	<?php echo'<META http-equiv=refresh content=0;URL=hous.php>'; ?>

