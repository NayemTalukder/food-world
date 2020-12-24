<?php 
    include('connect.php');
    $query = "Select * from restaurant order by rating DESC";
    $result = mysqli_query($con,$query);

?>
<?php include('header.php') ?>
<?php include('loginOutButton.php') ?>

<style>
  .beforeHidden{
      display: none;
  } 
  .beforeHidden.afterHidden{ 
      display: table-row;
  }
  .resFocus:hover{
    color: #ffffff !important;
  } 
</style>

<div class="container" style="min-height: 371px">
    <h2 style="padding-left: 320px" class="py-2">RESERVE YOUR SUITABLE ONE</h2>

    <div id="drp" class="container">
      <div class="row">
      <div class="col-md-9">
          <h5>Showing restaurants for <span class="branchValue"> "All" </span> branches...</h4>
      </div>
        <div class="col-md-3">
          <div class="dropdown">
          <button style="width: 82%; float: right;" class="mb-2 btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Branches
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="min-width: 13rem !important;">
          <a class="dropdown-item Location" href="#">All</a>
            <?php 
            $branchQuery = "Select branch from restaurant";
            $branch = mysqli_query($con,$branchQuery);
            
            while($rows = mysqli_fetch_assoc($branch))  
              {
            ?>
                <a class="dropdown-item Location" href="#"><?php echo $rows['branch'] ?></a>
            <?php 
                }
            ?>
          </div>
        </div>
        </div>
      </div>
    </div>

    <div class="container">
      <table class="table table-triped table-bordered table-success">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Branch</th>
              <th scope="col">Availability</th>
              <th scope="col">Rating</th>
              <th scope="col">View Food Items</th>
              <th scope="col">Give Rating</th>
              <th scope="col">Reservation</th>
            </tr>
          </thead>
          <tbody>
            <?php while($rows = mysqli_fetch_assoc($result))  
                    {
            ?>
              <tr
                class="<?php echo $rows['branch'] ?> All reserve">
                <td style="vertical-align: middle;"><?php echo $rows['res_name'] ?></td>
                <td style="vertical-align: middle;"><?php echo $rows['branch'] ?></td>
                <td style="vertical-align: middle;"><?php echo $rows['restaurant_aviablity'] ?></td>
                <td style="vertical-align: middle; "><?php echo $rows['rating'] ?></td>
                <td>
                <form action="restaurantSingle.php" method="post">
                  <input name="resName" class="w-100" type="text" value="<?php echo $rows['res_name'] ?>" id="resName" style="display: none">
                  <button
                  style="cursor: pointer; font-size: 15px;"
                  class="btn btn-outline-success w-100 text-dark resFocus" 
                  type="submit" name="restaurantName">Click to View</button>
                </form>
                </td>
                <td><button
                restname="<?php echo $rows['res_name'] ?>"
                check="rating" 
                type="button"
                style="cursor: pointer; font-size: 15px;" 
                class="btn btn-outline-success w-100 text-dark resFocus" 
                data-toggle="modal" 
                data-target="#ratingModal"
                <?php echo $ratingDisabled ?>
                >Add Rating</button></td>
                <td><button
                id="<?php echo $rows['res_name'] ?>" 
                check="notreserve"
                rename="<?php echo $rows['res_name'] ?>"
                rebranch="<?php echo $rows['branch'] ?>"
                reavailabity="<?php echo $rows['restaurant_aviablity'] ?>"
                style="cursor: pointer; font-size: 15px;" 
                class="btn btn-outline-success w-100 text-dark resFocus">Add to Cart</button></td>
              </tr>

            <?php 
                }
            ?>
          </tbody>
      </table>
    </div>
</div>

<?php include('loginModal.php') ?>

<?php include('ratingModal.php') ?>

<?php include('footer.php') ?>