<?php
$destination="sarfa/".$_FILES['pic']['name'];
echo $_FILES['pic']['name']."<br>";

echo $_FILES['pic']['error']."<br>";

echo $_FILES['pic']['size']."<br>";

echo $_FILES['pic']['tmp_name']."<br>";

echo $_FILES['pic']['type']."<br>";


print_r($_FILES['pic']);

$type= $_FILES['pic']['type'];

$fpart=substr($type,0,strpos($type,"/"));
echo $fpart;
if ($fpart=="image") {
    move_uploaded_file($_FILES['pic']['tmp_name'],$destination);
}
else{
    echo "no image";
}

?>