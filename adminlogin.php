<?php
include("linkho.php")
?>
<body text="white">
<div id="center">
<fieldset>
<legend><table border='0'width='30%'height="20%" align='center'><img src='images/adm.png'width="100%"height="70"></table></legend>
<form method='POST'action='adcon.php'>
<table border='0'align='center'> 
<?php 
	if(isset($_REQUEST['incorect'])){
		echo"<tr><td><font color='red' align='center'><blink>
	    Username or Password incorect!</blink</font></td></tr>";
	}
	?>

<tr>
<td><font color='black'size='4'><b><i>Username</font></i></td><td>
<input type='text'name='user'placeholder='plz enter username'/></td></tr>
      <tr><td><i><b><font color='black'size='4'>Password</font></b></i></td><td>
      <input type="password"name='password'placeholder='plz input password'/>
      </td></tr>
      <tr>
      <td colspan="2" align="center">
      <input type="submit" name="Submit" value="Login" />
	
  </form>
</table>
</fieldset>
</div>
</BODY>
</html>