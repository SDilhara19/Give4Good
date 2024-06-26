
function merchPaymentGateway() {
    console.log("merch")
    var price = document.getElementById('priceOne').value;
    var quantity = document.getElementById('theInput').value;
    var total = price * quantity
    var merch_id = document.getElementById('merch_id').value;

    // Create a FormData object

    var formData = new FormData();
    formData.append('price', price);
    formData.append('quantity', quantity);
    formData.append('total', total);
    formData.append('merch_id', merch_id);

    console.log("price:", price);
    console.log("total Amount:", total);
    console.log("quantity:", quantity);
    console.log("merch_id:", merch_id);
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = () => {


        if (xhttp.readyState == 4 && xhttp.status == 200) {
            alert(xhttp.responseText);
            var obj = JSON.parse(xhttp.responseText);

            console.log("PayJS Open")
            // Payment completed. It can be a successful failure.
            payhere.onCompleted = function onCompleted(orderId) {
                console.log("Payment completed. OrderID:" + orderId);
                showLoading();
                successMerchOrder(obj["order_id"], obj["merch_id"], obj["amount"], obj["quantity"]);
                console.log("success");
                // Note: validate the payment and show success or failure page to the customer
            };

            // Payment window closed
            payhere.onDismissed = function onDismissed() {
                // Note: Prompt user to pay again or show an error page
                console.log("Payment dismissed");
            };

            // Error occurred
            payhere.onError = function onError(error) {
                // Note: show an error page
                console.log("Error:" + error);
            };




            // Put the payment variables here
            var payment = {
                "sandbox": true,
                "merchant_id": "1226076",    // Replace your Merchant ID
                "return_url": "http://localhost/give4good/Merchandise/paydone",     // Important
                "cancel_url": "http://localhost/give4good/Merchandise/paydone",     // Important
                "notify_url": "http://localhost/give4good/Merchandise/paydone",
                "order_id": obj["order_id"],
                "items": "Door bell wxireles",
                "amount": obj["amount"],
                "currency": obj["currency"],
                "merch_id": obj["merch_id"],
                "hash": obj["hash"], // *Replace with generated hash retrieved from backend
                "first_name": "Saman",
                "last_name": "Perera",
                "email": "samanp@gmail.com",
                "phone": "0771234567",
                "address": "No.1, Galle Road",
                "city": "Colombo",
                "country": "Sri Lanka",
                "delivery_address": "No. 46, Galle road, Kalutara South",
                "delivery_city": "Kalutara",
                "delivery_country": "Sri Lanka",
                "custom_1": "",
                "custom_2": "",
                "price": obj["price"],
                "quantity": obj["quantity"],

            };
            payhere.startPayment(payment);
        }
    }
    xhttp.open("POST", "http://localhost/give4good/Merchandise/payment", true);
    xhttp.send(formData);
}
// // Call the paymentGateway function with the stored values
// document.getElementById("donateBtn").addEventListener("click", function() {
//   paymentGateway(donateAmount, contributeAmount);
// });

function showLoading() {
    var loadingOverlay = document.createElement('div');
    loadingOverlay.setAttribute('id', 'loading-overlay');
    var loadingMessage = document.createElement('div');
    loadingMessage.setAttribute('id', 'loading-message');
    loadingMessage.textContent = 'Redirecting...';
    loadingOverlay.appendChild(loadingMessage);
    document.body.appendChild(loadingOverlay);
}

function successMerchOrder(payment_id, merch_id, total, quantity) {
    console.log("function")
    var successData = new FormData();


    successData.append('payment_id', payment_id);
    successData.append('merch_id', merch_id);
    successData.append('total', total);
    successData.append('quantity', quantity);

    var successXhttp = new XMLHttpRequest();
    // var successParams = `total_price=${totalPrice}&order_id=${orderId}`;
    console.log("1")
    // debugger;
    successXhttp.onreadystatechange = function () {
        if (successXhttp.readyState == 4 && successXhttp.status == 200) {
            console.log("function")
            console.log(payment_id)
            console.log(merch_id)
            console.log(total)
            console.log(quantity)
            var payConfirmURL = '../../Merchandise/payConfirm/' +
                '?payment_id=' + encodeURIComponent(payment_id) +
                '&merch_id=' + encodeURIComponent(merch_id) +
                '&total=' + encodeURIComponent(total) +
                '&quantity=' + encodeURIComponent(quantity);

            // Redirect to the payConfirm page with parameter
            console.log(payConfirmURL)
            window.location.href = payConfirmURL


        }
    };
    // AJAX request to handle successful order
    successXhttp.open("POST", "http://localhost/give4good/Merchandise/paydone", true);
    // successXhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    successXhttp.send(successData);
}
