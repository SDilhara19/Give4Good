let payHereButton=document.querySelector("#payhere");
    payHereButton.addEventListener("click",(e)=>{
        e.preventDefault();
        paymentGateway("cardPayment");
    })

   function paymentGateway(formType) {
    var xhttp = new XMLHttpRequest();
    var params = `form_type=${formType}`;

    xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            console.log(xhttp.responseText);
            var obj = JSON.parse(xhttp.responseText);
            
            // PayHere initialization
            payhere.onCompleted = function onCompleted(orderId) {
                console.log("Payment completed. OrderID: " + obj["order_id"]);
                // document.write("Redirecting")
                showLoading(); 
                successOrder(obj["total_price"], obj["order_id"]);

            };

            payhere.onDismissed = function onDismissed() {
                console.log("Payment dismissed");
            };

            payhere.onError = function onError(error) {
                console.log("Error: " + error);
            };

                var payment = {
                    "sandbox": true,
                    "merchant_id": "1225428",
                    "return_url": "<?php echo URLROOT; ?>/customer/Order",
                    "cancel_url": "<?php echo URLROOT; ?>/customer/Order",
                    "notify_url": "http://sample.com/notify",
                    "order_id": obj["order_id"],
                    "items": obj["items"],
                    "amount": obj["amount"],
                    "currency": obj["currency"],
                    "hash": obj["hash"],
                    "first_name": obj["first_name"],
                    "last_name": obj["last_name"],
                    "email": obj["email"],
                    "phone": obj["phone"],
                    "address": obj["address"],
                    "city": obj["city"],
                    "country": "Sri Lanka",
                    "delivery_address": "No. 46, Galle road, Kalutara South",
                    "delivery_city": "Kalutara",
                    "delivery_country": "Sri Lanka",
                    "custom_1": "",
                    "custom_2": ""
                };  
                payhere.startPayment(payment);
            }
        };
        // AJAX request to retrieve payment details
        xhttp.open("POST", "<?php echo URLROOT; ?>/PurchaseOrder/checkout2" , true);
        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        
        xhttp.send(params);
    }
    function showLoading() {
        var loadingOverlay = document.createElement('div');
        loadingOverlay.setAttribute('id', 'loading-overlay');
        var loadingMessage = document.createElement('div');
        loadingMessage.setAttribute('id', 'loading-message');
        loadingMessage.textContent = 'Redirecting...';
        loadingOverlay.appendChild(loadingMessage);
        document.body.appendChild(loadingOverlay);
}
    function successOrder(totalPrice, orderId) {
    // AJAX request to call the controller function
        var successXhttp = new XMLHttpRequest();
        var successParams = `total_price=${totalPrice}&order_id=${orderId}`;

        successXhttp.onreadystatechange = function () {
            if (successXhttp.readyState == 4 && successXhttp.status == 200) {
                window.location="../../customer/Order"
                // Handle any additional logic after successful order
            }
        };
        // AJAX request to handle successful order
        successXhttp.open("POST", "<?php echo URLROOT; ?>/PurchaseOrder/successCardPaymentOrder", true);
        successXhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

        successXhttp.send(successParams);
    }