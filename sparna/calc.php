  <div class="col-lg-4">
    <h4>Coupons</h4>
    <input class="btn btn-default" type="submit" value="Apply Coupons">
    <br>
    <h4>Gift Wrap</h4>
    <label>
          <input type="checkbox"> Wrap as a gift for BDT 25 Only
      </label>
      <br>
    <table class="table table-bordered">
      <thead>
        <tr class="warning">
          <td><b>PRODUCT DESCRIPTION</b></td>
          <td><b>PRICE</b></td>
        </tr>
      </thead>
      <tbody>
        <tr class="warning">
          <td>
            Cart Total
          </td>
          <td>
            BDT <span id="total-price">780</span>
          </td>
        </tr>
        <tr class="warning">
          <td>
            Cart Discount
          </td>
          <td>
            BDT <span id="discount-price">690</span>
          </td>
        </tr>
        <tr class="warning">
          <td>
            Estimated VAT/CST
          </td>
          <td>
            BDT <span id="total-vat">120</span>
          </td>
        </tr>
        <tr class="warning">
          <td>
            Coupon Discount
          </td>
          <td>
            BDT <span id="total-coupon">250</span>
          </td>
        </tr>
        <tr class="warning">
          <td>
            Delivery Charge
          </td>
          <td>
            BDT <span id="delivery-charge">70</span>
          </td>
        </tr>
        <tr class="warning">
          <td>
            Gift Wrap Charge
          </td>
          <td>
            BDT <span id="gift-charge">25</span>
          </td>
        </tr>
        <tr class="warning">
          <td>
            <b>Order Total</b>
          </td>
          <td>
            <b>BDT <span id="total-price">5000</span></b>
          </td>
        </tr>
      </tbody>
    </table>
    <form method="GET" action="<?php echo $btn_action ?>">
      <button type="submit" class="btn btn-success center-block"><?php echo $btn_name ?></button>
    </form>
  </div>