<?php
include_once ('../classes/statistic_class.php');

$newNumbers = $_POST['numbers'];

$stats_results = new statistic($newNumbers);

$elements = $stats_results->createElements($newNumbers);
$minVal = $stats_results->minimumValue($elements);
$maxVal = $stats_results->maximumValue($elements);
$number_Count = $stats_results->elementCount($elements);
$average = $stats_results->averageValue($elements);


$msg = 'Os cálculos foram feitos com sucesso.';

echo json_encode(array(
	"msg"=>$msg,
	"mininumValue"=>$minVal,
	"maximumValue"=>$maxVal,
	"elementCount"=>$number_Count,
	"average"=>$average
	));


?>