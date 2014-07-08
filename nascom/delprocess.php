<?php
	require'connect.inc.php';
	if(!isset($_POST['submit']))
		header('Location:index.php');
	else 
		{
			if(isset($_POST['delno'])) 
			{
					$id=$_POST['delno'];
					$query="DELETE FROM data WHERE id = ".$id."";
					$result = mysql_query($query) or die(mysql_error());
					if($result)
					{
								header('Location:index.php');					
					}
					else 
						echo "Error occured";
			}		
		}
?>