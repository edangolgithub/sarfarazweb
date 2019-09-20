<?php session_start(); ?>
<!-- bootstrap css cdn -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!-- bootstrap js cdn -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
       
      
    </style>
<?php

require_once "db.php";

$items=array();
if(!isset($_SESSION['items']))
{
    echo "no items in cart";
    die();
}
for($i = 0;$i < count($_SESSION['items']);$i++){
    $items[$i] = $_SESSION['items'][$i];
  }

  //echo "<h1>".array_count_values($items)."</h1>";

  ?>
<div class="wrapper">        
  <table class="table table-primary">
    <thead>
      <tr>
        <th>item</th>
        <th>qty</th>
        <th>price</th>
      </tr>
    </thead>
    <tbody>


  <?php

  foreach (array_count_values($items) as $key => $value) {
      echo $key.$value;
 
  
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
     // $itemstring=implode(",", $items);


     // echo $itemstring;
      //$sql="select * from item where itemid in (".$itemstring.")";
      $sql="select * from item where itemid = ".$key;
      $result = $conn->query($sql); ?>

<?php
    $row = $result->fetch_assoc();
        ?>



      <tr>
        <td><?php echo $row['name'] ;?></td>
        <td><?php echo $value; ?></td>
        <td><?php echo $row['price'] ;?></td>
      </tr>
      
    
        
       
  

        <?php
        
    }
    $conn->close();
?>
</tbody>
  </table>
</div>



<?php unset($_SESSION['items']); ?>