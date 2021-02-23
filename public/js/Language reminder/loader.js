window.addEventListener('load',function(){
    load();
})


function load(){
    const lang_set = localStorage.getItem("language")
    if(lang_set==null){
        document.body.className="hu";
        return;
    }
    if(lang_set==="hu")
    {
            document.body.className=lang_set

    }
    else if (lang_set==="en")
    {
        document.body.className=lang_set
    }
    else{
            document.body.className=lang_set
    }


}
