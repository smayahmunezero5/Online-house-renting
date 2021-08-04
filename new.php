<?php
include("linkad.php")
?>
<body text="white">
</div>
<div id="center">
</br></br>
<table border='0'width='50%' align='center'>
<tr><td>
<fieldset>
<legend><table border='0'width='30%'height="20%" align='center'><img src='images/adm.png'png'width="100%"height="100"></table></legend>
<form method='post'action='conadmin.php'>
<table border='0'align='center'>
<tr>
<form id="admin" name="login" method="post" action="login.php">
    <table align="center">
  <tr>
      <td><i><font color='black'size='4'><b>first name</font></i></b></td><td>
     <input type='text'name="fname"placeholder='enter firstname'/>
      </td></tr>
	  <tr>
      <td><i><font color='black'size='4'><b>last name</font></i></b></td><td>
      <input type='text'name="lname"placeholder='enter lastname'/>
      </td></tr>
	  <tr>
      <td><i><font color='black'size='4'><b>user name</font></i></b></td><td>
      <input type='text'name="uname"placeholder='enter username'/>
      </td></tr>
	  <tr>
      <td><i><font color='black'size='4'><b>password</font></i></b></td><td>
      <input type='password'name="pwd"placeholder='enter password'/>
      </td></tr>
	  
	  
      <tr>
      <td colspan="2" align="center">
      <input type="submit" name="Submit" value="save" />
      <td colspan="2" align="center">
      <input type="reset"value="cancel" /></tr>
  </form>
</table>
</fieldset>
</td></tr>
</table>
</div>
<div id="body">

</div>




</div>







</body>
</html>
