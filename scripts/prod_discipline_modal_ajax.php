<?php
include 'config.php';

# Range
$disc = $_POST['discipline'];
$inst = $_POST['inst'];

#Query
$stmt = $conn->prepare("SELECT year, tp, tc,india, world FROM Productivity WHERE inst='".$inst."' AND discipline='".$disc."'");
$stmt->execute();
$result = $stmt->fetchAll();
$html = '';
$tmin = 2010;
foreach ($result as $row){
	$html.= '<tr><td>'.$tmin++.'</td>';
	$html.= '<td>'.$row['tp'].'</td>';
	$html.= '<td>'.$row['tc'].'</td>';
	$html.= '<td>'.$row['india'].'</td>';
	$html.= '<td>'.$row['world'].'</td>';
	$html.= '</tr><br>';
}
echo $html;
