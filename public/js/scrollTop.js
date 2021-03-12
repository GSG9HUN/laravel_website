document.addEventListener("DOMContentLoaded",()=>{
    let upArrow = document.getElementById('up_arrow');

    upArrow.addEventListener('click',()=>{
        window.scrollTo({top:0,behavior:"smooth"})
    })
})



