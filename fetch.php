<?php
//fetch.php

if(isset($_POST['action']))
{
	include('database_connection.php');
	$output = '';
	if($_POST["action"] == 'book')
	{
		$query = "
		SELECT nk FROM oppa 
		WHERE book = :book 
		GROUP BY nk
		";
		$statement = $connect->prepare($query);
		$statement->execute(
			array(
				':book'		=>	$_POST["query"]
			)
		);
		$result = $statement->fetchAll();
		$output .= '<option value="">Select Name</option>';
		foreach($result as $row)
		{
			$output .= '<option value="'.$row["nk"].'">'.$row["nk"].'</option>';
		}
	}

	if($_POST["action"] == 'nk')
	{
		$query = "
		SELECT ao FROM oppa 
		WHERE nk = :nk
		";
		$statement = $connect->prepare($query);
		$statement->execute(
			array(
				':nk'		=>	$_POST["query"]
			)
		);
		$result = $statement->fetchAll();
		$output .= '<option value="">Image List</option>';
		foreach($result as $row)
		{
			$output .= '<option value="'.$row["ao"].'">'.$row["ao"].'</option>';
		}
	}

	if($_POST["action"] == 'ao')
	{
		$query = "
		SELECT co FROM oppa 
		WHERE ao = :ao
		";
		$statement = $connect->prepare($query);
		$statement->execute(
			array(
				':ao'		=>	$_POST["query"]
			)
		);
		$result = $statement->fetchAll();
		foreach($result as $row)
		{
			$output .= '<option value="'.$row["co"].'">'.$row["co"].'</option>';
			
		}
	}	

	echo $output;
}

?>