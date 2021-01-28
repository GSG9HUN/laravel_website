var inputHome = document.querySelector("#home");
var inputMobile = document.querySelector("#mobile");

window.intlTelInput(inputHome, {
  initialCountry: 'gb',
  placeholderNumberType: 'FIXED_LINE',
  utilsScript: "../utils.js?<%= time %>" // just for formatting/placeholders etc
});
window.intlTelInput(inputMobile, {
  initialCountry: 'gb',
  placeholderNumberType: 'MOBILE',
  utilsScript: "../phone/utils.js?<%= time %>"
});
