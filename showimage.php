<?php

mysql_connect("localhost","jakeodon","0u!0fash0E");
mysql_select_db("jakeodon_login");

if(isset($_GET['id']))
{
	$id = mysql_real_escape_string($_GET['id']);
	$query = mysql_query("SELECT * FROM `images` WHERE `id` = '$id'");
	while($row = mysql_fetch_assoc($query))
	{
		$imageDate = $row["image"];	
	}
	header("content-type: image/jpeg");
	echo $imageDate;
}
else
{
	echo"Error!";
}
?>