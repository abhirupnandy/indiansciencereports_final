<?php
	include 'scripts/config.php';

## Read value
	$draw = $_POST['draw'];
	$row = $_POST['start'];
	$rowperpage = $_POST['length']; // Rows display per page
	$columnIndex = $_POST['order'][0]['column']; // Column index
	$columnName = $_POST['columns'][$columnIndex]['data']; // Column name
	$columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
	$searchValue = $_POST['search']['value']; // Search value
	$min = $_POST['min'];
	$max = $_POST['max'];
	$searchArray = array();

## Search
	$searchQuery = " ";
	if($searchValue != ''){
		$searchQuery = " AND (inst LIKE :inst  ) ";
		$searchArray = array(
			'inst'=>"%$searchValue%"
		);
	}
#SELECT inst, sum(tp) as TP,sum(tc) as TC,(SUM(tc)/sum(tp)) as ACCP,(SUM(tp)/sum(india)) as INDIA,(SUM(tp)/sum(world)) as WORLD FROM year_wise WHERE tp>0 and tc>0 GROUP by inst LIMIT '.$pagelength.' ');
## Total number of records without filtering
	$stmt = $conn->prepare("SELECT COUNT(*) FROM year_wise GROUP BY inst");
	$stmt->execute();
	$totalRecords = $stmt->rowCount();


## Total number of records with filtering
	$stmt = $conn->prepare("SELECT COUNT(*) FROM year_wise  WHERE 1 ".$searchQuery." GROUP by inst");
	$stmt->execute($searchArray);
	$totalRecordwithFilter = $stmt->rowCount();

## Fetch records
	$stmt = $conn->prepare("SELECT inst, sum(tp) as TP,sum(tc) as TC,(SUM(tc)/sum(tp)) as ACCP,(SUM(tp)/sum(india)) as INDIA,(SUM(tp)/sum(world)) as WORLD FROM year_wise WHERE  1 ".$searchQuery." AND year>=".$min." and year<=".$max." and tp>0 and tc>0 GROUP by inst  ORDER BY ".$columnName." ".$columnSortOrder."  LIMIT :limit,:offset");
///
// $stmt = $conn->prepare("SELECT * FROM employee WHERE 1 ".$searchQuery." ORDER BY ".$columnName." ".$columnSortOrder." LIMIT :limit,:offset");Bind values
	foreach($searchArray as $key=>$search){
		$stmt->bindValue(':'.$key, $search,PDO::PARAM_STR);
	}
	
	$stmt->bindValue(':limit', (int)$row, PDO::PARAM_INT);
	$stmt->bindValue(':offset', (int)$rowperpage, PDO::PARAM_INT);
	$stmt->execute();
	$empRecords = $stmt->fetchAll();
	
	$data = array();
	
	foreach($empRecords as $row){
		$data[] = array(
			"inst"=>$row['inst'],
			"tc"=>$row['TC'],
			"tp"=>$row['TP'],
			"accp"=>$row['ACCP'],
			"india"=>$row['INDIA'],
			"world"=>$row['WORLD']
		);
	}

## Response
	$response = array(
		"draw" => intval($draw),
		"iTotalRecords" => $totalRecords,
		"iTotalDisplayRecords" => $totalRecordwithFilter,
		"aaData" => $data
	);
	
	echo json_encode($response);
