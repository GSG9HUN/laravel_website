window.onload= function (){
    const english = document.getElementById("en");
    const netherland = document.getElementById("nether");
    const hungarian = document.getElementById("hu");



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
