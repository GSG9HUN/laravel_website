
document.addEventListener('DOMContentLoaded',(event)=>{
    bgcolor_loader();
    document.getElementById('darkmode').onclick=function (){
        let bgColor = window.getComputedStyle(document.body, null).getPropertyValue('background-color');
        setBackground(bgColor.length);
        bgcolor_saver();
    }

})



function setBackground(bgColor){

    if(bgColor===18)
    {document.body.style.backgroundColor = 'rgb(34,34,34)';
        document.body.style.color = "#d0d0d0";
        document.getElementById("nav_dark_skip").style.color="rgb(34, 34, 34);";
        document.getElementById("language").style.color="white";
    }
    else
    {
        document.body.style.backgroundColor= "#d0d0d0";
        document.body.style.color = "black";

    }
}






function bgcolor_saver(){
    let value = window.getComputedStyle(document.body, null).getPropertyValue('background-color')
    localStorage.setItem("color",value)
}

function bgcolor_loader(){
    let body_color = localStorage.getItem("color");
    if(body_color==null){
        return;
    }
    if(body_color.length===18)
    {
        document.body.style.backgroundColor= "#d0d0d0";
        document.body.style.color = "black";
    }
    else
    {
        document.body.style.backgroundColor = 'rgb(34,34,34)';
        document.body.style.color = "#d0d0d0";
        document.getElementById("nav_dark_skip").style.color="rgb(34, 34, 34);";
        document.getElementById("language").style.color="white";

    }
}
