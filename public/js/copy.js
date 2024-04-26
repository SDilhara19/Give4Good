// Function to copy the URL to clipboard
function copyUrl() {
    // Select the URL text
    var urlText = document.querySelector(".link").innerText;

    // Create a temporary textarea element
    var tempInput = document.createElement("textarea");
    tempInput.value = urlText;
    document.body.appendChild(tempInput);

    // Select the text in the temporary input element
    tempInput.select();
    tempInput.setSelectionRange(0, 99999); // For mobile devices

    // Copy the selected text to the clipboard
    document.execCommand("copy");

    // Remove the temporary input element
    document.body.removeChild(tempInput);

    // Log a message to indicate that the text has been copied
    console.log("URL copied to clipboard:", urlText);
}
