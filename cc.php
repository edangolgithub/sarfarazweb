<?php
echo $_COOKIE['user'];

echo $_COOKIE['newuser'];
?>
<?php 
setcookie("user","",time()-3600);
?>