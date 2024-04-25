// function share() {
//     // Create a pop-up window
//     var popupWindow = window.open("", "Share via", "width=300,height=200");

//     // Add WhatsApp and Facebook icons to the pop-up window
//     var popupContent = "<h2>Share via:</h2>";
//     popupContent += "<a href='#' onclick='shareViaWhatsApp()'><img src='whatsapp_icon.png' alt='Facebook'></a>";

//     popupContent += "<a href='#' onclick='shareViaFacebook()'><img src='facebook_icon.png' alt='Facebook'></a>";

//     // Set the content of the pop-up window
//     popupWindow.document.body.innerHTML = popupContent;
// }

// // Function to handle sharing via WhatsApp
// function shareViaWhatsApp() {
//     // Replace 'Your message...' and 'Your URL...' with your message and URL
//     var message = encodeURIComponent('Check out this link:');
//     var url = encodeURIComponent('Your URL...');

//     // Construct the WhatsApp share URL
//     var whatsappUrl = 'whatsapp://send?text=' + message + ' ' + url;

//     // Open WhatsApp with the share URL
//     window.location.href = whatsappUrl;
// }

// // Function to handle sharing via Facebook
// function shareViaFacebook() {
//     // Replace 'Your URL...' with your URL
//     var url = encodeURIComponent('Your URL...');

//     // Construct the Facebook share URL
//     var facebookUrl = 'https://www.facebook.com/sharer/sharer.php?u=' + url;

//     // Open Facebook share dialog
//     window.open(facebookUrl, '_blank', 'width=600,height=400');
// }

const shareBtn=document.querySelector('.share-btn');
const shareOptions=document.querySelector('.share-options');

shareBtn.addEventListener('click',()=>{
    shareOptions.classList.toggle('active');
});

function shareViaWhatsApp() {
  var message = encodeURIComponent('Check out this link and help:');
  var url = encodeURIComponent('https://medium.com/@gsplugins/how-do-i-add-social-media-sharing-buttons-to-my-wordpress-posts-3b198d5d6135');
  var whatsappUrl = 'whatsapp://send?text=' + message + ' ' + url;
  window.location.href = whatsappUrl;
}

function shareViaFacebook() {
     var url = encodeURIComponent('https://medium.com/@gsplugins/how-do-i-add-social-media-sharing-buttons-to-my-wordpress-posts-3b198d5d6135');
     var facebookUrl = 'https://www.facebook.com/sharer/sharer.php?u=' + url;
     window.open(facebookUrl, '_blank', 'width=600,height=400');
}