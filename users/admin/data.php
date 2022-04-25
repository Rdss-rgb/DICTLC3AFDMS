<?php

$connect = new PDO("mysql:host=localhost; dbname=dict_try", "root", "");


if(isset($_POST["action"]))
{
	if($_POST["action"] == 'fetch')
	{
		$query = "
		SELECT access, COUNT(id) AS Total 
		FROM filemanage
		GROUP BY access
		";
		$result = $connect->query($query);
		$data = array();
		foreach($result as $row)
		{
			$data[] = array(
				'FileType'		=>	$row["access"],
				'total'			=>	$row["Total"],
				'color'			=>	'#' . rand(100000, 999999) . ''
			); 
		}
		echo json_encode($data);
	}
}
?>
