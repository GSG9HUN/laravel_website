var input = document.querySelector("#phone");
window.intlTelInput(input, {
  utilsScript: "../phone/utils.js?<%= time %>" // just for formatting/placeholders etc
});
