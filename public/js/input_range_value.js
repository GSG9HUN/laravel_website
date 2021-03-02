
window.onload=function (){
    var input = document.getElementById("input");
    var output = document.getElementById("output");
    output.innerHTML = input.value;
    input.oninput = function() {
        output.innerHTML = this.value;
    }

}

function selectOnlyThis(id) {
    for (var i = 1;i <= 4; i++)
    {
        document.getElementById(i).checked = false;
    }
    document.getElementById(id).checked = true;
}
