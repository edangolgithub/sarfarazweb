<?php

require_once "db1.php";

$obj= new database();
$con=$obj->GetConnection();
$result=$obj->GetResult("select * from login");

while($row=$result->fetch_assoc())
{
    echo $row["username"];
}

?>