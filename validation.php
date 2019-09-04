<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- bootstrap css cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!-- bootstrap js cdn -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
    .error{
        color:red;
    }
    </style>
</head>
<body>
<?php
$namerror="";
 if($_POST)
{
    $name=$_POST['name'];
    echo $name;
    $digit=0;
    $symbol=0;
    $upper=0;
    for ($i=0; $i <strlen($name) ; $i++) 
    { 
      if(is_numeric($name[$i]))
      {
          $digit++;
      }
    $x= strtoupper($name[$i]);
      if(strcmp($x,$name[$i]) == 0&& !is_numeric($name[$i]))
      {
         
          $upper++;
      }
    }

    if($digit==0)
    {
        $namerror="atleast one digit required ,";
    } 
echo $upper;
    if($upper==0)
    {
        $namerror="at least one letter should be in uppercase";
    }

}
 

?>
    <form action="abc.php" method="post">
    <textarea type="text" name="name"  ></textarea>
    <span class="error"><?php echo $namerror;?></span>
    <br>
    <input type="submit" value="ok">
    </form>
    
</body>


</html>