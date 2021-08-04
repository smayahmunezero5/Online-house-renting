<?php
include("linkcl.php")
?>
<body bgcolor="c0c0c0">
<div id="center">
<center><table border=""  width="" bgcolor="grey" >


						<th width=""> HOUSE IMAGE </th>
						<th width=""> HOUSE ID </th>
                          <th width=""> DESCRPITION </th>
                        <th width=""> HIRING </th>
					</tr>
				
					
						<?php
							include('connectee.php');
							$result = $db->prepare("SELECT * FROM house");
							$result->execute();
							for($i=0; $row = $result->fetch(); $i++){
						?>
                        																																																																																
                      
						<tr>
                        <td><img src="id/<?php echo $row['image']; ?>" width="300" height="200"></td>
                        <td><?php echo $row['ID'];?> </td>

                        <td><?php echo $row['description'];?> </td>
                        <td><a  href="hire.php"> CHOOSE YOUR  HOUSE </a></td>

                       
                        <?php
							}
							?>
			</div>			