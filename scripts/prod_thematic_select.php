<?php
	include 'config.php';
	
	$disc = $_POST['disc'];
	
	$stmt = $conn->prepare("SELECT ThematicAreas AS theme FROM discipline_thematic_areas WHERE Disciplines LIKE '%".$disc."%'");
	$stmt->execute();
	$results = $stmt->fetchAll();
	$html = '';
	foreach ($results as $row){
		$html.= '<option>'.$row["theme"].'</option>';
	}
	echo $html;
