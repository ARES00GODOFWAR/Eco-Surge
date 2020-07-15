@extends('layouts.app')

@section('payment-styles')


<style>

    .row{
        margin-top: 50px;
        margin-right: 0%;
    }
    .payment-info{
        margin-left: 100px;
    }
    form{
        margin-bottom: 500px;
    }
</style>

@endsection


@section('content')


<div class="row">

    <div class="payment-info">
        <h1>Select a payment option</h1>
        <p>Is the payment method you'd like to use displayed below? If so, click the corresponding "Deliver to this address" button.</p>
  
        <hr>

        <form method="POST" class=" col-md-7 col-sm-6 needs-validation" novalidate="">
            <div class="mb-3">
                <input type="radio"  name="cashondelivery" id="cashondelivery"  required="">
                <label for="name">Cash on delivery (cost)</label>
                  <div class="invalid-feedback" style="width: 100%;">
                    Valid name is required.
                  </div>
            </div>

          <hr>

          <h3>Paypal</h3>

          <div id="paypal-button-container"></div>

            <!-- <div class="mb-3">
                <input type="radio"  name="cashondelivery" id="cashondelivery"  required="">
                <label for="name">Cash on delivery (cost)</label>
                  <div class="invalid-feedback" style="width: 100%;">
                    Valid name is required.
                  </div>
            </div>

            <div class="mb-3">
                <input type="radio"  name="cashondelivery" id="cashondelivery"  required="">
                <label for="name">Cash on delivery (cost)</label>
                  <div class="invalid-feedback" style="width: 100%;">
                    Valid name is required.
                  </div>
            </div>

            <div class="mb-3">
                <input type="radio"  name="cashondelivery" id="cashondelivery"  required="">
                <label for="name">Cash on delivery (cost)</label>
                  <div class="invalid-feedback" style="width: 100%;">
                    Valid name is required.
                  </div>
            </div> -->




        </form>

        


</div>

<script src="https://www.paypal.com/sdk/js?client-id=AeDAGPmyWBCX3nwiM_S-lvVMbU2ueqhQrhX-9AFyrwkftNFt17TT6tVoMGoyUktBjiLjzk-jep_edrtC"></script>

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
    
@endsection