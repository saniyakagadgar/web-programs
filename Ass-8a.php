<?php
	  $result = '';
	  $oprand1 = '';
	  $oprand2 = '';
	  if(isset($_POST['op'])) {
	    $oprand1 = $_POST['opr1'];
	    $oprand2 = $_POST['opr2'];
	    switch($_POST['op']) {
	      case '+':
	        $result = $oprand1 + $oprand2;
	        break;
	      
      case '-':
	        $result = $oprand1 - $oprand2;
	        break;
	      case '*':
	        $result = $oprand1 * $oprand2;
	        break;
	      case '/':
	        $result = $oprand1 / $oprand2;
	        break;
	    }
    }
	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta charset="UTF-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <title>Eight a</title>
	</head>
	<body>
	  <form action="" method="post">
	    Operator 1: <input type="text" name="opr1"  value="<?=$oprand1 ?>"><br><br>
	    Operator 2: <input type="text" name="opr2"  value="<?=$oprand2 ?>"><br><br>
	    <input type="submit" value="+" name="op">
	    <input type="submit" value="-" name="op">
	    <input type="submit" value="*" name="op">
	    <input type="submit" value="/" name="op">
	  </form>
	  <div><?=$result ?></div>	</body> </html
