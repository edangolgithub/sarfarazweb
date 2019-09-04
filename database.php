<!-- bootstrap css cdn -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- bootstrap js cdn -->
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<div class="container jumbotron m-5 p-5">
<h1 class="text-center">Student List</h1>
<form action="" method="post">
<input type="text" name="se">
<input type="submit" class="btn btn-success" value="search">
</form>
<table class="table table-hover table-dark table-bordered" >
<tr><th>ID</th><th>Name</th><th>AID</th><th colspan="2" class="text-center mr-5 pr-5">Action</th></tr>
<?php

$con= new mysqli("localhost","root","","school");
if ($_POST) {
    $val=$_REQUEST['se'];
    if(strlen($val)<1)
    {
        $sql="select * from student";
        $result=$con->query($sql);
    }
    else{
        $sql="select * from student where studentname like ?";
        $stmt=$con->prepare($sql);
        $x=$val."%";
        $stmt->bind_param("s", $x);
        $stmt->execute();
        $result=$stmt->get_result();
    }
}
else
{
    

    $sql="select * from student limit 1";
    $result=$con->query($sql);
}
 while($row=$result->fetch_assoc())
 {
?>


<tr>
<td><?php  echo $row["studentid"];?></td>
<td><?php  echo $row["studentname"];?></td>
<td><?php  echo $row["addressid"];?></td>
<td>
<a href="edit.php?sid=<?php echo $row["studentid"];?> "><button class="btn btn-warning">Edit</button></a></td>
<td><a href="delete1.php?sid=<?php echo $row["studentid"];?> "><button class="btn btn-danger">Delete</button></a></td>
</tr>

<?php 
 }

$con->close();
?>

</table>

<a href="addstudent.php" class="btn btn-success">Add Student</a>
</div>