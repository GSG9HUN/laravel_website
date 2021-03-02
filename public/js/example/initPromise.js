var input = document.querySelector("#phone");
var statusElement = document.querySelector("#status");

var iti = window.intlTelInput(input, {
  utilsScript: "../phone/utils.js?<%= time %>",
});
iti.promise.then(function() {
  statusElement.innerHTML = "Initialised!";
});
