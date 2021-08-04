<?php
include("linkho.php")
?>
<body text="white">


<div id="center">

<form action="mescon.php" method="POST">
  <center><p>Name:
    <input id="contact_name"type="text" size="35" value="" class="required" tabindex="10"  name="name" />
  </p>
  <p>
    Phone:
    <input id="contact_telephone" name="phone" size="35" value="" class="required" tabindex="30" type="text" maxlength="10" />
  </p>
  <p>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your Message Here:
    <textarea id="contact_request" name="message" rows="10" cols="30" tabindex="40"></textarea>
  </p>
  <p>
    <input name="submit" type="submit" value="Send" />
  </p>
</form>




</body>
</html>



  </body></html>