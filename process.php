<?php
$a="sarfaraz";
$b="12345";
if($a==$_GET["uname"]&&$b== $_GET["pswd"]){
echo"sucess";

?>
 <script>
   setTimeout("location.href = 'success.php';", 000);
    </script>  
<?php
}
else{
    echo "the password is i9ncpreetc";
    include "form.html";
    ?>



                                     
<?php 

}

?>
