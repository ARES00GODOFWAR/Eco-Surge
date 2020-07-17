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

    .payment-info P{
        white-space: nowrap;
    }

    .name-input{
        padding: 15px 15px;
        border: 1px solid rgb(0,0,0,.7);
        border-radius: 4px;
        width: 400px;
    }

    .email-input{
        padding: 15px 15px;
        border: 1px solid rgb(0,0,0,.7);
        border-radius: 4px;
        width: 400px;
    }

    .product-input{
        padding: 15px 15px;
        border: 1px solid rgb(0,0,0,.7);
        border-radius: 4px;
        width: 400px;
    }

    #lock{
        font-size: 20px;
        margin-left: 0%;
        color: black
    }

    .display-product{
        position: absolute;
        top: 100px;
        left: 800px;
        white-space: nowrap;
    }

    .product-face{
        padding: 80px 80px;
        border: 0.5px solid lightgray;
        width:180px;
        border-radius: 4px;
        color: lightgray;

    }

    .product-face:focus{
        outline: none;
    }


    .product-name{
        position: absolute;
        left: 210px;
        top: 100px;
        padding: 5px 5px;
        border: none;
        border-bottom: 0.5px solid rgb(0,0,0,.7);
        width: 180px;
    }

    .product-name:focus{
        outline: none;
    }


    .product-type{
        position: absolute;
        left: 210px;
        top: 180px;
        padding: 5px 5px;
        border: none;
        border-bottom: 0.5px solid rgb(0,0,0,.7);
        width: 180px;
    }

    .product-type:focus{
        outline: none;
    }


    .product-cost{
        position: absolute;
        left: 210px;
        top: 250px;
        padding: 5px 5px;
        border: none;
        border-bottom: 0.5px solid rgb(0,0,0,.7);
        width: 180px;
    }

    .product-cost:focus{
        outline: none;
    }


    .discount{
        padding: 5px 5px;
        border: none;
        border-bottom: 0.5px solid rgb(0,0,0,.7);
        width: 180px;
        color: black;
    }

    .discount:focus{
        outline: none;
    }


    .total{
        padding: 5px 5px;
        border: none;
        border-bottom: 0.5px solid rgb(0,0,0,.7);
        width: 180px;
        color: black;
    }

    .total:focus{
        outline: none;
    }

</style>

@endsection


@section('content')


<div class="row">

    <div class="payment-info">
        <form method="POST" class=" col-md-7 col-sm-6 needs-validation" novalidate="" enctype="multipart/form-data">
            <div class="mb-3">
                <h1>Select a payment option</h1>
                <p>Is the payment method you'd like to use displayed below? If so, click the corresponding "Deliver to this address" button.</p>

        <hr>

                <input type="checkbox"  name="cashondelivery" id="cashondelivery"  required="">
                <label for="name">Cash on delivery (cost)</label>
                <br>
                <br>
                <h2 class="banktransfer-header">Bank Transfers</h2>
                <hr>
                        <br>
                        <input type="checkbox" class="checkbox-1" name="NCB">&nbsp;&nbsp;<label>NCB</label>
                        <br>
                        <br>
                        <input type="checkbox" class="checkbox-2" name="NCIB">&nbsp;&nbsp;<label>NCIB</label>
                        <br>
                        <br>
                  <div class="invalid-feedback" style="width: 100%;">
                    Valid name is required.
                  </div>
            </div>

          <hr>

          <h3>Paypal</h3>

          <div id="paypal-button-container"></div>
          <br>
          <br>
          <!--<h1>Shipping option</h1>
          <hr>
                  <br>
                  <input type="text" class="name-input" name="name" placeholder="Zip">
                  <br>
                  <br>
                  <input type="email" class="email-input" name="email" placeholder="city">
                  <br>
                  <br>
                  <input type="text" class="product-input" name="product" placeholder="Country">
                  <br>
                  <br>-->
            <div class="display-product">
                <h1>Cart</h1>
            <hr>
                <input type="text" class="product-face" >
                <input type="text" class="product-name" placeholder="Product Name">
                <br>
                <input type="text" class="product-type" placeholder="Type">
                <br>
                <input type="text" class="product-cost" placeholder="Cost">

                <h4>Discount %</h4>
            <hr>
                <input type="text/number" class="discount" value="5%">
                <br>
                <br>
                <br>
                <h4>Total Cost:</h4>

                <input type="number" class="total">




            </div>

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
