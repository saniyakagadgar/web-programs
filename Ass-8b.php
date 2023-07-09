<?php
	  error_reporting(0);
	  $a = array();
	  $b = array();
	  $keyboard = fopen("php://stdin","r"); 
	  print ("No of rows : ");
	  $rows = fgets($keyboard,80);
	  print ("No of cols : ");
	  $cols = fgets($keyboard,80);
	  print 'Enter the elements of matrix'."\r\n"; 
	  for ( $i = 0; $i < $rows; $i++ ) {
	    print 'Enter elements of '.($i + 1).' row'."\r\n"; 
	    for ( $j = 0; $j < $cols; $j++ ) {
	      $n = fgets($keyboard,80);
	      $a[$i][$j] = (int)($n);
	    }
	  }
	  for ( $i = 0; $i < $rows; $i++ )
	    for ( $j = 0; $j < $cols; $j++ )
	      $b[$j][$i] = $a[$i][$j];
	  for ($row = 0; $row < $rows; $row++) {
	    for ($col = 0; $col < $cols; $col++){
	      echo " ".$b[$row][$col];
	    } 
   echo "\n"; 
