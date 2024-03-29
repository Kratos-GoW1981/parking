@extends('parkings.layout')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <div class="background">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Online Payment</title>
        <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="form-control">
        <h1 >Online Payment for using our Parking Service</h1>
        <div class="form-control">
            <button id="payment-button">Pay with Khalti</button>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script>
            var config = {
                // replace the publicKey with yours
                "publicKey": "{{ config('app.khalti_public_key') }}",
                "productIdentity": "1234567890",
                "productName": "Dragon",
                "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
                "paymentPreference": [
                    "KHALTI",
                    "MOBILE_BANKING",
                    ],
                "eventHandler": {
                    onSuccess (payload) {
                        // hit merchant api for initiating verfication
                        $.ajax({
                            type : 'POST',
                            url : "{{ route('khalti.verifyPayment') }}",
                            data: {
                                token : payload.token,
                                amount : payload.amount,
                                "_token" : "{{ csrf_token() }}"
                            },
                            success : function(res){
                                $.ajax({
                                    type : "POST",
                                    url : "{{ route('khalti.storePayment') }}",
                                    data : {
                                        response : res,
                                        "_token" : "{{ csrf_token() }}"
                                    },
                                    // success: function(res){
                                    //     console.log('transaction successfull');
                                    // }
                                });
                                console.log(res);
                            }
                        });
                        console.log(payload);
                    },
                    onError (error) {
                        console.log(error);
                    },
                    onClose () {
                        console.log('widget is closing');
                    }
                }
            };
            var checkout = new KhaltiCheckout(config);
            var btn = document.getElementById("payment-button");
            btn.onclick = function () {
                // minimum transaction amount must be 10, i.e 1000 in paisa.
                checkout.show({amount: 10000});
            }
        </script>
        </div>
        </div>
    </body>
</html>
@endsection