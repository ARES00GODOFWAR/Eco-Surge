@extends('layouts.app')

@section('payment-styles')

<style>
    .row {
        margin-top: 50px;
        margin-right: 0%;
    }

    .payment-info {
        margin-left: 100px;
        width: 60%;
    }

    form {
        margin-bottom: 500px;
    }

    .payment-info P {
        white-space: nowrap;
    }

    .name-input {
        padding: 15px 15px;
        border: 1px solid rgb(0, 0, 0, .7);
        border-radius: 4px;
        width: 400px;
    }

    .email-input {
        padding: 15px 15px;
        border: 1px solid rgb(0, 0, 0, .7);
        border-radius: 4px;
        width: 400px;
    }

    .product-input {
        padding: 15px 15px;
        border: 1px solid rgb(0, 0, 0, .7);
        border-radius: 4px;
        width: 400px;
    }

    #lock {
        font-size: 20px;
        margin-left: 0%;
        color: black
    }

    .display-product {
        position: relative;
        top: 100px;
        right: 30px;
        width: 30%;
        white-space: nowrap;
    }

    .product-face {
        padding: 80px 80px;
        border: 0.5px solid lightgray;
        width: 180px;
        border-radius: 4px;
        color: lightgray;

    }

    .product-face:focus {
        outline: none;
    }


    .product-name {
        position: absolute;
        left: 210px;
        top: 100px;
        padding: 5px 5px;
        border: none;
        border-bottom: 0.5px solid rgb(0, 0, 0, .7);
        width: 180px;
    }

    .product-name:focus {
        outline: none;
    }


    .product-type {
        position: absolute;
        left: 210px;
        top: 180px;
        padding: 5px 5px;
        border: none;
        border-bottom: 0.5px solid rgb(0, 0, 0, .7);
        width: 180px;
    }

    .product-type:focus {
        outline: none;
    }


    .product-cost {
        position: absolute;
        left: 210px;
        top: 250px;
        padding: 5px 5px;
        border: none;
        border-bottom: 0.5px solid rgb(0, 0, 0, .7);
        width: 180px;
    }

    .product-cost:focus {
        outline: none;
    }


    .discount {
        padding: 5px 5px;
        border: none;
        border-bottom: 0.5px solid rgb(0, 0, 0, .7);
        width: 180px;
        color: black;
    }

    .discount:focus {
        outline: none;
    }


    .total {
        padding: 5px 5px;
        border: none;
        border-bottom: 0.5px solid rgb(0, 0, 0, .7);
        width: 180px;
        color: black;
    }

    .total:focus {
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
                <p>Is the payment method you'd like to use displayed below? so, <br>click the corresponding "Deliver to
                    this address" button.</p>

                <hr>

                <input type="checkbox" name="cashondelivery" id="cashondelivery" required="">
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

            <h2>Paypal</h2>
            <hr>

            <div id="paypal-button-container"></div>
            <br>
            <br>
        
        </form>
    </div>

    <div class="display-product">
    
        <div class="col-md-12 order-md-4 mb-4 cart-details">
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
        </div>
</div>

<script
    src="https://www.paypal.com/sdk/js?client-id=AeDAGPmyWBCX3nwiM_S-lvVMbU2ueqhQrhX-9AFyrwkftNFt17TT6tVoMGoyUktBjiLjzk-jep_edrtC">
</script>

<script>
    paypal.Buttons({
        createOrder: function (data, actions) {
            // This function sets up the details of the transaction, including the amount and line item details.
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: '0.01'
                    }
                }]
            });
        },
        onApprove: function (data, actions) {
            // This function captures the funds from the transaction.
            return actions.order.capture().then(function (details) {
                // This function shows a transaction success message to your buyer.
                alert('Transaction completed by ' + details.payer.name.given_name);
            });
        }
    }).render('#paypal-button-container');
    //This function displays Smart Payment Buttons on your web page.

</script>

@endsection
