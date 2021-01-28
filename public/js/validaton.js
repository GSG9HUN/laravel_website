
window.addEventListener('load',()=>{
  let password = document.getElementById("password");
  let confirm_password = document.getElementById("confirm_password");
  let result = document.getElementById('matching');
  let pw_regex_match = document.getElementById("regex");
  let button = document.getElementById("submit");
  let error_msg = document.getElementById("error-msg");
  let valid_msg = document.getElementById("valid-msg");
  let minimum = document.getElementById('minimum');
  let upper = document.getElementById('upper');
  let lower = document.getElementById('lower');
  let special_or_number = document.getElementById('special_or_number');


  password.addEventListener('keyup',()=>{
    if(confirm_password.value.length>0) 
    {
      checkpw();
    }
    password_cointains();
  });

  confirm_password.addEventListener('keyup',checkpw);

  function checkpw(){
    if(password.value == confirm_password.value)
    {
      button.disabled = false;
    }
    else
    {
      button.disabled=true;
      result.innerText =  'Not Matching';
    }
    
  }


  function password_cointains(){
    let one_upper_letter = new RegExp("^(?=.*[A-Z])");
    let one_lower_letter = new RegExp("^(?=.*[a-z])");
    let one_special =new RegExp("^(?=.*[!@#$%^&*?])");
    let one_digit = new RegExp("^(?=.*[0-9])")
   if( password.value.match(one_lower_letter))
   {
     lower.style.backgroundColor="green";
   }else
   {
     lower.style.backgroundColor="red";
   }

    if( password.value.match(one_upper_letter))
    {
      upper.style.backgroundColor="green";
    }
    else
    {
      upper.style.backgroundColor="red";
    }
    if( password.value.match(one_special) || password.value.match(one_digit))
    {
      special_or_number.style.backgroundColor="green";
    }
    else
    {
      special_or_number.style.backgroundColor="red";
    }
    if( password.value.length>=8)
    {
      minimum.style.backgroundColor="green";
    }
    else
    {
      minimum.style.backgroundColor="red";
    }

    if(minimum.style.backgroundColor==="red" || special_or_number.style.backgroundColor==="red"
        ||  upper.style.backgroundColor==="red" || lower.style.backgroundColor==="red"){
      button.disabled=true;
    }
    else
    {
      button.disabled=false;
    }

  }

})



