<?php

    include('connect.php');

    if(isset($_POST['restaurantName'])){
        $resName = $_POST['resName'];
        $query = "SELECT * from food WHERE restaurant_fk = '$resName' order by food_name";
        $result = mysqli_query($con,$query);
    }
?>

<?php include('header.php') ?>

<div class="container">
    <h3>Search result for <?php echo '"' . $resName . '"' ?></h3>

    <table class="table table-striped table-bordered">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Category</th>
          <th scope="col">Price</th>
          <th scope="col">Availability</th>
          <th scope="col">Restaurant</th>
          <th scope="col">Order Food</th>
        </tr>
      </thead>
      <tbody>
    <?php while($rows = mysqli_fetch_assoc($result))  
            {
    ?>
        <tr foname="<?php echo $rows['food_name'] ?>" 
            focategory="<?php echo $rows['category'] ?>"
            foprice="<?php echo $rows['price'] ?>"
            check="notClicked"
            class="table-success foood">
          <td style="vertical-align: middle;"><?php echo $rows['food_name'] ?></td>
          <td style="vertical-align: middle;"><?php echo $rows['category'] ?></td>
          <td style="vertical-align: middle;"><?php echo $rows['price'] ?></td>
          <td style="vertical-align: middle;"><?php echo $rows['food_availability'] ?></td>
          <td style="vertical-align: middle;"><?php echo $rows['restaurant_fk'] ?></td>
          <td style="vertical-align: middle;"><button 
          foname="<?php echo $rows['food_name'] ?>" 
          focategory="<?php echo $rows['category'] ?>"
          foprice="<?php echo $rows['price'] ?>" 
          foquantity="1" 
          check="notClicked"
          style="cursor: pointer; font-size: 15px;"
          class="btn btn-outline-success w-100 text-dark foodFocus">Add to Cart</button></td>
        </tr>

    <?php 
        }
    ?>
      </tbody>
    </table>
  </div>    
    </div>


<?php include('loginModal.php') ?>

<div class="" style="margin-top: 35px;">
  <?php include('footer.php') ?>
</div>