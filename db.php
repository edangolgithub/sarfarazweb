<?php

$con= new mysqli("localhost","root","","school");

$sql="select * from student";


$result=$con->query($sql);


 while ($row=$result->fetch_assoc())
 {
     echo $row["studentname"];
 }

