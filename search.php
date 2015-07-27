<?php
if(!isset($_REQUEST['term']))
exit();
require('db.php');
$term =
$rs = mysql_query('
	SELECT * FROM population
	WHERE location
	LIKE "'.ucfirst($_REQUEST['term']).'%"
	ORDER BY population ASC
	LIMIT 0,10', $dblink
);
$data = array();
while($row = mysql_fetch_array($rs, MYSQL_ASSOC)){
	$data[] = array(
		'label' => $row['location'],
		'value' => $row['location'],
	);
}
echo json_encode($data);
flush(); // Vide les tampons de sorti
