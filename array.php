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
$cars=array(45, 9, 1);
for ($i=0; $i <3 ; $i++) { 
   // echo $cars[$i];
}

$age = array("Peter"=>"22", "Ben"=>"37", "Joe"=>"43");

//java c# python javascript 

foreach($age as $sarfaraz=>$anzit)
{
// echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$anzit."    ".$sarfaraz;
}

$arrs=array(
    array("abc","def","ghi"),    //00 01 02
    array("one","two","three"),  //10 11 12
    array("ram","shyam","hari")  //20 21 22
);


for ($row=0; $row < 3; $row++) { 
   for ($col=0; $col < 3; $col++) { 
       if(($col+$row)==2)
       {
      echo $arrs[$row][$col]." ";
       }
   }
   echo "<br><br><br>";
}
$first=array();
$second=array();
   for ($row=0; $row < 3; $row++) { 
        if($row==1)
        {
            $second=$arrs[0];
        }
        if($row==2)
        {
            $first=$arrs[1];
        }
   }
   for ($row=0; $row < 3; $row++) { 
    if($row==1)
    {
       $arrs[0]= $first;
    }
    if($row==2)
    {
      $arrs[1]=  $second;
    }
}
for ($row=0; $row < 3; $row++) { 
    for ($col=0; $col < 3; $col++) { 
        //if(($col+$row)==2)
       // {
       echo $arrs[$row][$col]." ";
       //}
    }
   echo "<br><br><br>";
}
$sum=0;
$num=array(
    array(11,2,3),
    array(4,5,6),
    array(7,8,9),
    array(10,11,12)
);
for ($row=0; $row < 3; $row++) { 
    for ($col=0; $col < 3; $col++) { 
        if($num[$row][$col]%2==0)
        {
$sum=$sum+ $num[$row][$col];
        }
    }
}
echo $sum;
echo "--------------------------------------------------------------------------";

?>
</body>
</html>