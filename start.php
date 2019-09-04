<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
      for ($i=0; $i <10 ; $i++) { 
         echo $i;
      }
      $a=1;
      while ($a <= 10) {
         echo $a;
         $a++;
      }
      do {
         echo $a;
         $a++;
      } while ($a <= 20);
      echo "<H1>$a<div>"."hell";
 switch($a)
 {
     case 21:
     echo 20;
     break;
     case 30:
     echo 30;
     break;
     case 10:
     echo 10;
     break;
     case 0:
     echo 0;
     break;
     default:
     echo 200;
     break;

 }

    ?>
   
</body>
</html>