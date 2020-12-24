<?php
    include('loginOutButton.php');
    include('connect.php');
    if($ratingModal){
      $userid = $_SESSION['username'];
    }else{
      $userid = 'random';
    }
    $query = "Select * from user where username = '$userid'";
    $result = mysqli_query($con,$query);
    $rows = mysqli_fetch_assoc($result);
?>
<div class="modal fade" id="ratingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Give Rating (<small>Out of 10</small>)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="server.php" method="POST">
            <div class="form-group">
                <label for="taste"  class="col-form-label">Taste</label>     
                <input name="taste" class="w-100" type="number" min="1" max="10" value="10" lass="form-control" id="Taste" required>
            </div>
            <div class="form-group">
                <label for="interior"  class="col-form-label">Interior</label>     
                <input name="interior" class="w-100" type="number" min="1" max="10" value="10" lass="form-control" id="Interior" >
            </div>
            <div class="form-group">
                <label for="food_quality"  class="col-form-label">Food Quality</label>     
                <input name="food_quality" class="w-100" type="number" min="1" max="10" value="10" lass="form-control" id="FoodQuality" >
            </div>
            <div class="form-group">
                <label for="cost"  class="col-form-label">Cost</label>     
                <input name="cost" class="w-100" type="number" min="1" max="10" value="10" lass="form-control" id="Cost" required>
            </div>
            <div class="form-group">
                <label for="service"  class="col-form-label">Service</label>     
                <input name="services" class="w-100" type="number" min="1" max="10" value="10" lass="form-control" id="Service" required>
            </div>
            <input id="resRating" name="restaurant" class="w-100" type="text" lass="form-control" id="" style="display: none" value="">
            <input name="user_id" class="w-100" type="text" lass="form-control" id="" style="display: none" value="<?php echo $rows['id'] ?>">
            <button name="rating" type="submit" class="btn btn-success float-right">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>