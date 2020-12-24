<?php 

    if(isset($_POST['search'])){
      $search_data = $_POST['searchData'];
      include('connect.php');
      $query = "Select * from food where category like '%$search_data%'";
      $result = mysqli_query($con,$query);
    }

?>

<?php include('header.php') ?>

<style>
  .foodFocus:hover{
    color: #ffffff !important;
  } 
</style>
    
  <div class="container" style="min-height: 371px">
    <form action="foodSearchByCat.php" method="POST" style="padding-top:10px">
        <div class="form-group">
          <div class="container">
            <div class="row">
              <div class="col-md-9">
                    <input type="text" name="searchData" class="form-control" placeholder="Search for food..." class="w-100">
              </div>
              <div class="col-md-3">
                    <button type="submit" name="search" class="btn btn-success w-100">Search</button>
              </div>
            </div>
          </div>
        </div>
      </form>

  <div class="container">
    <h3>Search result for <?php echo '"' . $search_data . '"' ?></h3>

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


<?php include('footer.php') ?>
