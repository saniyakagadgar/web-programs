<? php
  error_reporting (0);
  $a = array();
  $b = array();
  $keyboard = fopen("php://stdin","r");
  print ("No of rows of first matrix : ");
  $m = fgets($keyboard,80);
  print ("No of cols of first matrix : ");
  $n = fgets($keyboard,80);
  print ("No of rows of second matrix : ");
  $p = fgets($keyboard,80);
  print ("No of cols of second matrix : ");
  $q = fgets($keyboard,80);
  if ( $n != $p ){
    echo 'Multiplication not possible ...'."\r\n"; 
    exit(0);
  }
  print 'Enter the elements of first matrix'."\r\n";
  for ( $i = 0; $i < $m; $i++ ) {
   print 'Enter elements of '.$i.' row'."\r\n"; 
    for ( $j = 0; $j < $n; $j++ ) {
      $x = fgets($keyboard,80);
      $a[$i][$j] = (int)($x);
    }
  }
  print 'Enter the elements of second matrix'."\r\n"; 
  for ( $i = 0; $i < $p; $i++ ) {
    print 'Enter elements of '.$i.' row'."\r\n"; 
    for ( $j = 0; $j < $q; $j++ ) {
      $x = fgets($keyboard,80);
      $b[$i][$j] = (int)($x);
    }
 }
  echo " The multiplication of matrices: \n";
  $result=array();
  for ($i=0; $i < $m; $i++) {
    for($j=0; $j < $q; $j++){
      $result[$i][$j] = 0;
      for($k=0; $k < $n; $k++){
        $result[$i][$j] += $a[$i][$k] * $b[$k][$j];
      }
    }
  }
  for ($row = 0; $row < $m; $row++) {
    for ($col = 0; $col < $q; $col++){
      echo " ".$result[$row][$col];
    }
    echo "\n";
  }
?>
