<?php
include("linkho.php")
?>
<div id="center">
<a href="clogin.php">Already have an account</a>
<form method="post" action="regcon.php">
<center>
<br><br>
<table bgcolor="black"><tr><td>
<tr><td> First Name </td><td><input type="text" name="fname" required></td></tr>
<tr><td> Last Name </td><td><input type="text" name="lname" required></td></tr>
<tr><td> Email </td><td><input type="text" name="email"required></td></tr>
<tr><td> Telephone </td><td><input type="text" name="phone"required maxlength="10"></td></tr>
<tr><td> username </td><td><input type="text" name="user" required></td></tr>
<tr><td>password</td><td><input type="password" name="pass" required></td></tr>
<tr><td><input type="submit" value="SEND"></a></td></tr></table></center> </center></form>
</body></html>