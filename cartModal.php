<!-- Modal -->
<?php include('loginOutButton.php');?>

<div class="modal fade" id="exampleModal1" style="max-height: 350px;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="padding: 5px !important">
        <h5 style="margin-left: 175px;" class="modal-title" id="exampleModalLabel">Shopping Cart</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body" style="padding-top: 7px !important;">
        <div class="container" style="padding-bottom: 7px;">
          <div class="row">
              <div id="foodItem" class="col mr-2 bg-success text-white" style="cursor: pointer">
                  <a class="login">Food Items</a>
              </div>
              <div id="Reservation" class="col ml-2" style="cursor: pointer">
                  <a class="register">Reservations</a>
              </div>
          </div>
        </div>
        <table class="table" id="foodItemDisplay">
            <thead>
                <tr>
                <th scope="col">Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                </tr>
            </thead>
            <tbody id="tbody">

            </tbody>
            <thead>
                <tr>
                  <th scope="col">Total</th>
                  <th scope="col">Amount</th>
                  <th total="0" id="TotalPrice" scope="col">0</th>
                </tr>
            </thead>
        </table>
        <table class="table hidden" id="reservations">
            <thead>
                <tr>
                <th scope="col">Name</th>
                <th scope="col">Branch</th>
                <th scope="col">Availability</th>
                </tr>
            </thead>
            <tbody id="tboddy">

            </tbody>
        </table>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-outline-success" <?php echo $checkOut ?>>Checkout</button>
      </div>
    </div>
  </div>
</div>