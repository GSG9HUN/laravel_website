var input = document.querySelector("#phone");
window.intlTelInput(input, {
  hiddenInput: "full_phone",
  utilsScript: "../phone/utils.js?<%= time %>" // just for formatting/placeholders etc
});
