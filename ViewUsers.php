<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "b142a678", "Taer4eiN", "b142a678");

if ($mysqli->connect_errno) 
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
else
{
	$query = "SELECT user_id FROM Users";
	echo "<table>";
	echo "<table border=\"3\">";	
	if ($entity = $mysqli->query($query)) 
	{
  		echo ('<tr>');
    			while ($row = $entity->fetch_assoc()) 
			{
        			echo ('<td><center>'.$row["user_id"].'</td>');
       				echo ('</tr>');
    			}
    			$entity->free();
	}
}
$mysqli->close();
?>