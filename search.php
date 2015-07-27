<?php
include('db.php');
// SEARCH TERM
$searchTerm = '%' . $_GET['term'] . '%';

// SQL QUERY FOR SEARCH BOX
$query = $db->prepare("SELECT DISTINCT location FROM population WHERE location LIKE :searchTerm");
// BIND PARAMETER
$query->bindParam(':searchTerm', $searchTerm);
// EXECUTE PREPARED STATEMENT
$query->execute();
// SEARCH DATABASE PUSH INTO ARRAY
$queryResult = $query->fetchAll();
$resultArray = array();
foreach ($queryResult as $row) {
	$result = $row[0];
	array_push($resultArray, $result);
}

$json = json_encode($resultArray);
echo $json;
?>
