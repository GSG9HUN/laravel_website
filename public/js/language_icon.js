
const variable = document.querySelector('#change_language');

var el = document.getElementById('change_language');

if(variable) 
{
    variable.addEventListener("click" ,(e) => {
       
        
if(document.getElementById("language").style.display === 'none')
        {
            
            document.getElementById("language").style.display="flex";
        }
        else{
            document.getElementById("language").style.display='none';
        }


    })

document.addEventListener("click",target,false);

function target(mouseEvent){
  if(mouseEvent.target !== variable && document.getElementById("language").style.display === 'flex')
  document.getElementById("language").style.display = 'none'
}

}

