<?php
	include 'config.php';

# Range
	$min = $_POST['min'];
	$max = $_POST['max'];
	$inst = $_POST['inst'];

#Query
	$stmt = $conn->prepare("SELECT icp/tp as iccp FROM year_wise WHERE inst='".$inst."' AND  year>=".$min." and year<=".$max." ");
	$stmt->execute();
	$result = $stmt->fetchAll();
	$html = [];
	$tmin = 2010;
	foreach ($result as $row){
		if ($row['iccp'] == '')
			array_push($html, 0);
		else
			array_push($html, $row['iccp']);
	}
	echo json_encode($html);
