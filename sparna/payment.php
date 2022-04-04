<?php
   $title = "Payment"; 
   include ('header.php') ;
   $btn_action = "delivery.php";
   $btn_name = "Pay Now";
  ?>
<div class="container">
    <ol class="breadcrumb">
    <li><a href="cart.php">Cart</a></li>
    <li><a href="address.php">Address</a></li>
    <li class="active">Payment</li>
    <li><a href="#">Delivery</a></li>
  </ol>
</div>
 
<div class="container">

<form>
  <div class="col-lg-8">
    <table class="table table-bordered">
       <tr class="warning">
         <h2>Please select a payment method</h2>
       </tr>

        <tr class="warning">
          <td>
            <img src="cards/visa.png">
          </td>

          <td>
            <label for="visa">VISA</label>
          </td>

          <td>
            <input type="radio" name="paytype" id="visa">
          </td>
        </tr>

        <tr class="warning">
          <td>
            <img src="cards/mastercard.png">
          </td>

          <td>
            <label for="mastercard">Mastercard</label>
          </td>

          <td>
            <input type="radio" name="paytype" id="mastercard">
          </td>
        </tr>

        <tr class="warning">
          <td>
            <img src="cards/amex.png">
          </td>

          <td>
            <label for="amex">American Express</label>
          </td>

          <td>
            <input type="radio" name="paytype" id="amex">
          </td>
        </tr>

        <tr class="warning">
          <td>
            <img src="cards/bkash.png">
          </td>

          <td>
            <label for="bkash">bKash</label>
          </td>

          <td>
            <input type="radio" name="paytype" id="bkash">
          </td>
        </tr>

        <tr class="warning">
          <td>
            <img src="cards/rocket.png">
          </td>

          <td>
            <label for="rocket">Rocket (DBBL Mobile Banking)</label>
          </td>

          <td>
            <input type="radio" name="paytype" id="rocket">
          </td>
        </tr>

        <tr class="warning">
          <td>
            <img src="cards/cash.png">
          </td>

          <td>
            <label for="cash">Cash on delivery</label>
          </td>

          <td>
            <input type="radio" name="paytype" id="cash">
          </td>
        </tr>



    </table>
  </div>
</form>




<!-- Calculation Panel -->
  <?php include ('calc.php') ?>
  <!-- Calculation panel End -->
</div>

<?php include ('footer.php') ?>