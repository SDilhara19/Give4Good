
function paymentGateway() {
    console.log("fd")
    var donationAmount = document.getElementById('donate').value;
    var contributionAmount = document.getElementById('contribute').value;
    var fundraiser_id = document.getElementById('fundraiser_id').value;

    // Create a FormData object

    var formData = new FormData();
    formData.append('donationAmount', donationAmount);
    formData.append('contributionAmount', contributionAmount);
    formData.append('fundraiser_id', fundraiser_id);

    console.log("Doonate Amount:", donationAmount);
    console.log("Contribute Amount:", contributionAmount);
    console.log("fundraiser_id:", fundraiser_id);
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
                successOrder(obj["order_id"], obj["fundraiser_id"], obj["donateAmount"], obj["contributeAmount"]);
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
                "return_url": "http://localhost/give4good/Donate/paydone",     // Important
                "cancel_url": "http://localhost/give4good/Donate/paydone",     // Important
                "notify_url": "http://localhost/give4good/Donate/paydone",
                "order_id": obj["order_id"],
                "items": "Door bell wxireles",
                "amount": obj["amount"],
                "currency": obj["currency"],
                "fundraiser_id": obj["fundraiser_id"],
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
                "donateAmount": obj["donateAmount"],
                "contributeAmount": obj["contributeAmount"],

            };
            payhere.startPayment(payment);
        }
    }
    xhttp.open("POST", "http://localhost/give4good/Donate/payG", true);
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

function successOrder(payment_id, fundraiser_id, donated_amount, contribution_amount) {

    var successData = new FormData();


    successData.append('payment_id', payment_id);
    successData.append('fundraiser_id', fundraiser_id);
    successData.append('donated_amount', donated_amount);
    successData.append('contribution_amount', contribution_amount);

    var successXhttp = new XMLHttpRequest();
    // var successParams = `total_price=${totalPrice}&order_id=${orderId}`;

    successXhttp.onreadystatechange = function () {
        if (successXhttp.readyState == 4 && successXhttp.status == 200) {
            var payConfirmURL = '../../Donate/payConfirm' +
                '?payment_id=' + encodeURIComponent(payment_id) +
                '&fundraiser_id=' + encodeURIComponent(fundraiser_id) +
                '&donated_amount=' + encodeURIComponent(donated_amount) +
                '&contribution_amount=' + encodeURIComponent(contribution_amount);

            // Redirect to the payConfirm page with parameters
            window.location.href = payConfirmURL
            // window.location = '../../Donate/payConfirm'

        }
    };
    // AJAX request to handle successful order
    successXhttp.open("POST", "http://localhost/give4good/Donate/paydone", true);
    // successXhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    successXhttp.send(successData);
}


