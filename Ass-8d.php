<?php
  // error_reporting(0);
  $a = array();
  $b = array();
  $keyboard = fopen("php://stdin","r");
  print ("No of rows : ");
  $rows = fgets($keyboard,80);
  print ("No of cols  : ");
  $cols = fgets($keyboard,80);
  print 'Enter the elements of first matrix'."\r\n";
  for ( $i = 0; $i < $rows; $i++ ) {
    print 'Enter elements of '.($i + 1).' row'."\r\n"; 
    for ( $j = 0; $j < $cols; $j++ ) {
      $x = fgets($keyboard,80);
      $a[$i][$j] = (int)($x);
    }
  }
  print 'Enter the elements of second matrix'."\r\n"; 
  for ( $i = 0; $i < $rows; $i++ ) {
    print 'Enter elements of '.($i + 1).' row'."\r\n"; 
    for ( $j = 0; $j < $cols; $j++ ) {
      $x = fgets($keyboard,80);
      $b[$i][$j] = (int)($x);
    }
  }
  $result=array();
  for ($i=0; $i < $rows; $i++) {
    for($j=0; $j < $cols; $j++){
      $result[$i][$j] = $a[$i][$j] + $b[$i][$j];
    }
  }
  print 'Enter the elements of result matrix'."\r\n"; 
  for ($row = 0; $row < $rows; $row++) {
    for ($col = 0; $col < $cols; $col++){
      echo " ".$result[$row][$col];
    }
    echo "\n";
  }
?>