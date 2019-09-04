<?php
$nameErr="";
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


    
    

if($_POST)
{

    $name=test_input($_REQUEST['name']);
   
    if(!preg_match("/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$$/", $name)){
        echo "hello";
  $nameErr = "Only letters and white space allowed";
  
   $com=test_input($_REQUEST['comment']);
   echo $name;
   echo $com;
}
}


?>
<style>
.error{
    color:red;
}
</style>
<form method="post" action="">  
  Name: <input type="text" name="name">
  <span class="error"><?php echo $nameErr;?></span>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  
  <input type="submit" name="submit" value="Submit">  
</form>