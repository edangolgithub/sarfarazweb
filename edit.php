<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- bootstrap css cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- bootstrap js cdn -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</head>
<body>

<?php
if($_GET)
{
   $sid=$_REQUEST['sid'];
    
    $con= new mysqli("localhost","root","","school");

$sql="select * from student where studentid=?";
$stmt=$con->prepare($sql);
$stmt->bind_param("i",$sid);
$stmt->execute();
$result=$stmt->get_result();
$row=$result->fetch_assoc();



}



if($_POST)
{
    $hi=$_REQUEST['hi'];
    $uname=$_REQUEST['sname'];
    $aid=$_REQUEST['aid'];
    
    $con= new mysqli("localhost","root","","school");

$sql="update student set studentname=?, addressid=? where studentid=?";
$stmt=$con->prepare($sql);
$stmt->bind_param("sii",$uname,$aid,$sid);
$stmt->execute();




header('location:database.php');


}

?>

<div class="container jumbotron m-5 p-5">
<h1 class="text-center">Add Student </h1>
<form action="" class="was-validated" method="post">
  <div class="form-group">
    <label for="uname">Username:</label>
    <input type="text" class="form-control" value="<?php echo $row["studentname"];?> " id="uname" placeholder="Enter studentname" name="sname" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="pwd">Aid:</label>
    <input type="text" class="form-control" id="pwd" value="<?php echo $row["addressid"];?>"  placeholder="Enter Aid" name="aid" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <input type="hidden" name="hi" value="<?php echo $sid;?>">
  <button type="submit" class="btn btn-primary">Update</button>

</form> 
</div>


</body>
</html>

