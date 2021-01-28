window.onload = function () {
    const english_saver = document.getElementById("en");
    const netherland_saver = document.getElementById("nether");
    const hungarian_saver = document.getElementById("hu");

    english_saver.addEventListener("click", function () {
        myfuction("en");
    });

    hungarian_saver.addEventListener("click", function () {
        myfuction("hu");
    });
    netherland_saver.addEventListener("click", function () {
        myfuction("nether")
    })

    function myfuction(el) {


        document.body.className = el;
        console.log(el)
        localStorage.setItem("language", el);
        console.log(localStorage.getItem("language"))


    }
}
