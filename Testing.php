<?php

	$con = new mysqli("fdb29.awardspace.net", "3710258_login", "Nn5180779", "3710258_login");
	$Password = md5($Password);
	$sql = "SELECT * FROM PCPatch ";
	$result = mysqli_query($con, $sql);
	if(mysqli_num_rows($result) > 0)
		while($row = mysqli_fetch_assoc($result))
		{
			{			
				echo "|".$row['PatchURL'] . "|".$row['Version']. "|".$row['PatchNumber']. "|".";" ;
			}
		}
	else
	{
		die("No Patch Data");
	}

?>
