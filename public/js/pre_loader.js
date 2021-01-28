

$("#content_wrap_f_preloader").hide()
        $(window).on("load",function(){
            $(".holder").fadeOut("slow");
            $("#content_wrap_f_preloader").show();
});