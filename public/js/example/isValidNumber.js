const input = document.getElementById("phone");
const errorMsg =document.getElementById("error-msg");
const validMsg = document.getElementById("valid-msg");

// here, the index maps to the error code returned from getValidationError - see readme
const errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

// initialise plugin
const iti = window.intlTelInput(input, {
  utilsScript: "../phone/utils.js?<%= time %>"
});
let reset = function() {
  input.classList.remove("error");
  errorMsg.innerHTML = "";
  errorMsg.classList.add("hide");
  validMsg.classList.add("hide");
};

// on blur: validate
input.addEventListener('keyup', function(event) {
  reset();
  console.log(event.key);
  if (input.value.trim()) {
    if (iti.isValidNumber()==null) {
      validMsg.classList.remove("hide");

    } else {
      input.classList.add("error");
      let errorCode = iti.getValidationError();
      errorMsg.innerHTML = errorMap[errorCode];
      errorMsg.classList.remove("hide");
    }
  }
});


// on keyup / change flag: reset
//input.addEventListener('change', reset);
//input.addEventListener('keyup', reset);
