<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<div>>, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootstrap css cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!-- bootstrap js cdn -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <title>Document</title>
    <style>
        p {
            color: black;
            text-decoration: none;
        }

        a {
            text-decoration: none;
        }

        .a {
            background-color: black;
           
        }

        .b {
           
            text-align:center;
            text-transform:capitalize;
            

        }

        .c {
            width: 40%;
        }

        .discount {
            text-decoration: line-through;

            color: gray;
        }

        .dis2 {
           
            color: gray;
            font-size:18px;
        }

        .wrapper {
            display: grid;
            grid-template-columns: 318px 318px 318px 318px;
            margin:auto;
        }

        .wrapper .id {
            
            box-shadow: 1px 1px 5px 1px gray;
            align-content: center;
            margin: 2%;

padding: 3%;

        }

        .wrapper .id:hover {

            box-shadow: 1px 1px 7px 2px gray;

        }

        .s {
           
            box-sizing: border-box;


        }

        .bt {
            margin-left:40%;
        }
        .bt2{
            margin-left:57%;
        }
    </style>
</head>

<body>
<div class="wrapper">
<?php
require_once "db.php";



// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql="select * from item";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        ?>


 
        <div class="id">
            <a href="details.html">
                <div class="a">
                    <div class="b" style="color: white;text-transform: capitalize;"><?php echo $row['name'] ?></div>
                </div>
                <div style="text-align:center">

                    <img class="c" src="images/<?php echo $row['image'] ?>" alt="<?php echo $row['name'] ?>">

                </div>
                <div>
                    <span class="dis2"><b>$<?php echo $row['price'] ?></b></span> <span class="discount"> $<?php echo $row['discount'] ?></span>
                    <span class="bt">
                        <a href="index.html">
                            <button class="btn btn-primary btn-sm" style="background-color: lightblue;font-size: 15px;">DETAILS</button>
                        </a>
                    </span>
                </div>
                <div style="margin-left:40px;color:black;font-size:15px">-50%</div>
                <div>
                <a href="cart.php"><button  class="btn btn-primary btn-sm bt2" style="background-color: sandybrown;font-size: 15px;">ADD TO
                                        CART</button>
                </a>
                </div>
                <div>
                <a href="details.html">
                        <p style="font-size:13px;text-transform:capitalize"><?php echo $row['offer'] ?> <span class="s">
                                
                                </span><br><?php echo $row['offer2'] ?></p>
                </a>
                </div>

                
            </a>

        </div>
       
  

        <?php
    }
} else {
    echo "0 results";
}
$conn->close();


?>
      </div>
    
</body>

</html>