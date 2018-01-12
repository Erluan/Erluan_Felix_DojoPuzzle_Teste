<?php

class statistic {
  private $numbers;

  function __construct($numbers) {
      $this->numbers = $numbers;
  }

  function createElements($numbers) {

    $ints= $this->numbers;
    $elements = array_map('intval', explode(',', $numbers));

    return $elements;
  }

  function minimumValue($elementArray){
    $minVal = min($elementArray);
    return $minVal;
  }

  function maximumValue($elementArray){
    $maxVal = max($elementArray);
    return $maxVal;
  }

  function elementCount($elementArray){
    $element_Count = count($elementArray);
    return $element_Count;
  }

  function averageValue($elementArray){
    $averageValue = array_sum($elementArray)/count($elementArray);
    return $averageValue;
  }

}

?>
