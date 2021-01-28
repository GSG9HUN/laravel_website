window.onload = function () {
    let xhr = new XMLHttpRequest();
    let username = document.querySelector("#username");
    let username_exist = document.getElementById("username_exist");
    let username_empty = document.getElementById("username_empty");
    let username_less_than = document.getElementById("username_less_than");
    let button = document.getElementById("submit");
    let felkiallto = document.getElementById("username_felkiallto");
    username.addEventListener('blur',
    function () {
        let data_username = {username:username.value};
        if (username.value.length !== 0) {

            if (username.value.length < 6 && username.value!==0) {
                username_exist.style.display="none";
                username_empty.style.display="none";
                username_less_than.style.display="block";
                felkiallto.style.display="flex";
                username.style.borderColor='red';
                button.disabled=true;

            }
            else{

                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        if (this.responseText !== "") {
                            username_less_than.style.display="none";
                            username_empty.style.display="none";
                            username_exist.style.display="block"
                            felkiallto.style.display="flex";
                            username.style.borderColor='red';
                            button.disabled=true;
                        } else {
                            username_exist.style.display="none";
                            username_less_than.style.display="none";
                            username_empty.style.display="none";
                            felkiallto.style.display="none";
                            username.style.borderColor='black';
                            button.disabled=false;
                        }
                    }
                };

                xhr.open("POST", 'http://localhost/website/process.php', true);

                xhr.setRequestHeader("Content-type", "process.php");
                let json = JSON.stringify(data_username)
                xhr.send(json);


            }


        }
        else if(username.value.length === 0){
            username_less_than.style.display="none";
            username_empty.style.display="block";
            username_exist.style.display="none";
            felkiallto.style.display="flex";
            username.style.borderColor='red';
            button.disabled=true;
        }


    });


    let xhr1 = new XMLHttpRequest();
    let email = document.getElementById("email");
    let email_used = document.getElementById('email_already_used');
    let span_email_mondotary = document.getElementById('mandatory_email');
    let felkiallto_email = document.getElementById("email_felkiallto");
    email.addEventListener('blur', function () {
        let data_email= {email:email.value};
        if ( email.value.length !== 0) {
            xhr1.onreadystatechange = function () {
                if (xhr1.readyState === 4 && xhr1.status === 200) {
                    if (this.responseText !== "") {
                        span_email_mondotary.style.display="none"
                        email_used.style.display="block"
                        felkiallto_email.style.display="flex";
                        email.style.borderColor='red';
                        button.disabled=true;
                    } else {
                        felkiallto_email.style.display="none";
                        email_used.style.display="none"
                        span_email_mondotary.style.display="none"
                        email.style.borderColor='black';
                        button.disabled=false;
                    }
                }
            };

            xhr1.open("POST", 'http://localhost/website/process.php', true);

            xhr1.setRequestHeader("Content-type", "process.php");
            let json = JSON.stringify(data_email)
            xhr1.send(json);


        }else if(email.value.length === 0){
            span_email_mondotary.style.display="block";
            email_used.style.display="none";
            felkiallto_email.style.display="flex";
            email.style.borderColor='red';
            button.disabled=true;
        }
    });
}

