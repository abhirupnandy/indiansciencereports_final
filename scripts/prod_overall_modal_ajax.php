<?php
include 'config.php';

# Range
$min = $_POST['min'];
$max = $_POST['max'];
$inst = $_POST['inst'];

#Query
$stmt = $conn->prepare("SELECT year, discipline, tp FROM Productivity WHERE inst='".$inst."' AND year>=".$min." AND year<=".$max);
$stmt->execute();
$result = $stmt->fetchAll();
//echo $stmt->fetch()['tp'];
$html = '[';
foreach ($result as $row){

}
echo $html;
