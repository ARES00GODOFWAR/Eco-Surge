@extends('layouts.app')


@section('checkout-styles')

<style>

.row{
    margin-top: 50px;
    margin-right: 0%;
}
.billing-info{
    margin-left: 100px;
}

.cart-details{
    margin-left: 50px;
}


</style>
    
@endsection


@section('content')

<body>
 

 

<div class="row">
    
    <!-- <div class="col-md-4 order-md-2 mb-4 cart-details">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
        <span class="badge badge-secondary badge-pill">3</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Product name</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$12</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Second product</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$8</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Third item</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$5</span>
        </li>
        <li class="list-group-item d-flex justify-content-between bg-light">
          <div class="text-success">
            <h6 class="my-0">Promo code</h6>
            <small>EXAMPLECODE</small>
          </div>
          <span class="text-success">-$5</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span>Total (USD)</span>
          <strong>$20</strong>
        </li>
      </ul>

      <form class="card p-2">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Promo code">
          <div class="input-group-append">
            <button type="submit" class="btn btn-secondary">Redeem</button>
          </div>
        </div>
      </form>
    </div> -->

    <!-- Shipping & payment -->
    <div class="billing-info">
      <h1>Select a shipping address</h1>
      <p>Is the address you'd like to use displayed below? If so, click the corresponding "Deliver to this address" button. Or you can enter a new shipping address.</p>

      <hr>


      <h4 class="mb-3">Add a new address</h4>
      <p>Be sure to click "Deliver to this address" when done.</p>

      <form method="POST" action="{{route('shipping.store')}}" class=" col-md-7 col-sm-6 needs-validation" novalidate="">
        {{csrf_field()}} 
        <!-- <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div> -->

        <div class="mb-3">
          <label for="name">Name</label>
          <div class="input-group">
            <input type="text" class="form-control" name="name" id="name"  required="">
            <div class="invalid-feedback" style="width: 100%;">
              Valid name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="addressline1">Address line 1:</label>
          <div class="input-group">
            <input type="text" class="form-control" name="address1" id="address1" placeholder="Street address, P.O. box, company name, c/o" required="">
            <div class="invalid-feedback" style="width: 100%;">
              Your address is required.
            </div>
          </div>
        </div>

        <!-- <div class="mb-3">
          <label for="email">Email <span class="text-muted">(Optional)</span></label>
          <input type="email" class="form-control" id="email" placeholder="you@example.com">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div> -->

        <!-- <div class="mb-3">
          <label for="address">Address</label>
          <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div> -->

        <div class="mb-3">
          <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
          <input type="text" class="form-control" name="address2" id="address2" placeholder="Apartment or suite">
        </div>

        <div class="mb-3">
          <label for="city">City:</label>
          <input type="text" name="city" class="form-control" id="city">
        </div>

        <div class="mb-3">
          <label for="parish">Parish/State/Province/Region:</label>
          <select class="custom-select d-block w-100" name="parish" id="parish">
            <option value="">Choose...</option>
            <option>Kingston</option>
            <option>St. Andrew</option>
            <option>St. Catherine</option>
            <option>Clarendon</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="zip">Zip</label>
          <input type="text" class="form-control" name="zip" id="zip" placeholder="" required="">
          <div class="invalid-feedback">
            Zip code required.
          </div>
        </div>

        <div class="mb-3">
          <label for="country">Country/Region:</label>
          <select class="custom-select d-block w-100" name="country" id="country">
            <option value="">Choose...</option>
            <option>Kingston</option>
            <option>St. Andrew</option>
            <option>St. Catherine</option>
            <option>Clarendon</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="phoneNum">Phone Number</label>
          <input type="text" class="form-control" name="phoneNum" id="phoneNum" placeholder="" required="">
        </div>

        <div class="mb-3">
          <label for="deliveryInstruct">Add delivery instructions (optional)</label><br>
          <p>Do we need additional instructions to find this address?</p>
          <textarea name="deliveryInstruct" id="deliveryInstruct" cols="72" rows="3" placeholder="Please provide details such as building description, nearby landmark, or other navigation instructions"></textarea>
        </div>

        



     
        <button class="btn btn-primary btn-lg btn-block " id="deliver-btn" type="submit">Deliver to this address</button> -->
      </form>
    </div>
  </div>

  

  <!-- <script>
    paypal.Buttons().render('#paypal-button-container');
    // This function displays Smart Payment Buttons on your web page.
  </script> -->

  <!-- <script>
    paypal.Buttons({
      createOrder: function(data, actions) {
        // This function sets up the details of the transaction, including the amount and line item details.
        return actions.order.create({
          purchase_units: [{
            amount: {
              value: '0.01'
            }
          }]
        });
      }
    }).render('#paypal-button-container');
  </script> -->


  <script>
    paypal.Buttons({
      createOrder: function(data, actions) {
        // This function sets up the details of the transaction, including the amount and line item details.
        return actions.order.create({
          purchase_units: [{
            amount: {
              value: '0.01'
            }
          }]
        });
      },
      onApprove: function(data, actions) {
        // This function captures the funds from the transaction.
        return actions.order.capture().then(function(details) {
          // This function shows a transaction success message to your buyer.
          alert('Transaction completed by ' + details.payer.name.given_name);
        });
      }
    }).render('#paypal-button-container');
    //This function displays Smart Payment Buttons on your web page.
  </script>

  <!-- <script>paypal.Buttons().render('body');</script> -->
  </body>
    
@endsection