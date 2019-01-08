<html>
<head>
    <script src="https://khalti.com/static/khalti-checkout.js"></script>
</head>
<body>
    ...
    <!-- Place this where you need payment button -->
    <button id="payment-button" style="background:purple;padding:10px;border-radius:5px;">Pay with Khalti</button>
    <!-- Place this where you need payment button -->
    <!-- Paste this code anywhere in you body tag -->
    <script>
        var config = {
            // replace the publicKey with yours
            "publicKey": "test_public_key_dc74e0fd57cb46cd93832aee0a390234",
            "productIdentity": "1234567890",
            "productName": "Dragon",
            "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
            "eventHandler": {
                onSuccess (payload) {
                    // hit merchant api for initiating verfication
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
            checkout.show({amount: 1000});
        }
    </script>
    <!-- Paste this code anywhere in you body tag -->
    ...
</body>
</html>

<!-- import KhaltiCheckout from "khalti-web";

// for dynamic loading  
// import * as KhaltiCheckout from "khalti-web"; TypeScript
// var KhaltiCheckout = require("khalti-web"); CommonJs

let config = {
    // replace this key with yours
    "publicKey": "test_public_key_dc74e0fd57cb46cd93832aee0a390234",
    "productIdentity": "1234567890",
    "productName": "Drogon",
    "productUrl": "http://gameofthrones.com/buy/Dragons",
    "eventHandler": {
        onSuccess (payload) {
            // hit merchant api for initiating verfication
            console.log(payload);
        },
        // onError handler is optional
        onError (error) {
            // handle errors
            console.log(error);
        },
        onClose () {
            console.log('widget is closing');
        }
    }
};

let checkout = new KhaltiCheckout(config);
let btn = document.getElementById("payment-button");
btn.onclick = function () {
    checkout.show({amount: 1000});
} -->