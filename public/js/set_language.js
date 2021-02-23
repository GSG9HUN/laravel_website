window.onload= function (){
    var english = document.getElementById("en");
    var netherland = document.getElementById("nether");
    var hungarian = document.getElementById("hu");

    netherland.addEventListener("click",(e)=>{
        document.body.className = "nether";
    })
    hungarian.addEventListener("click",(e)=>{
        document.body.className = "hu";
    })
    english.addEventListener("click",(e)=>{
        document.body.className = "en";
    })
}
