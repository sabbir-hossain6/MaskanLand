<?php
   $title = "Address"; 
   include ('header.php') ;
   $btn_action = "payment.php";
   $btn_name = "Proceed to Checkout";
  ?>
<div class="container">
    <ol class="breadcrumb">
    <li><a href="cart.php">Cart</a></li>
    <li class="active">Address</li>
    <li><a href="#">Payment</a></li>
    <li><a href="#">Delivery</a></li>
  </ol>
</div>
 
<div class="container">


  <div class="col-lg-8">
    <table class="table table-bordered">
       <tr class="warning">
                <td><h2>Delivery Address:</h2></td>
              </tr>

       <tr class="warning">
          <td>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <p>First Name:</p>
              <input type="text" name="first-name">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                      <p>Last Name:</p>
              <input type="text" name="last-name">
            </div>
          </td>
        </tr>

        <tr class="warning">
          <td>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <p>Telephone:</p>
              <input type="text" name="telephone">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
               <p>Cell Phone:</p>
              <input type="text" name="cell">
            </div>
          </td>
        </tr>

        <tr class="warning">
          <td>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <p>Address*:</p>
              <input type="text" name="address" class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            </div>
          </td>
        </tr>

        <tr class="warning">
          <td>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <p>Address 2:</p>
              <input type="text" name="address2" class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            </div>
          </td>
        </tr>

        <tr class="warning">
          <td>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <p>State:</p>
              <select>
                <option value="Please Select">Please Select</option>
                <option value="Dhaka">Dhaka</option>
                <option value="Chittagong">Chittagong</option>
                <option value="Khulna">Khulna</option>
                <option value="Barishal">Barishal</option>
                <option value="Mymensingh">Mymensingh</option>
                <option value="Sylhet">Sylhet</option>
                <option value="Rajshahi">Rajshahi</option>
                <option value="Rangpur">Rangpur</option>
            </select>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <p>City:</p>
              <select>
                  <option value="Please Select">Please Select</option>

            </select>
            </div>
          </td>
        </tr>
    </table>
  </div>





<!-- Calculation Panel -->
  <?php include ('calc.php') ?>
  <!-- Calculation panel End -->
</div>

<?php include ('footer.php') ?>

