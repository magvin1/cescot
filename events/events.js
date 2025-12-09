let divs = document.getElementsByClassName('cambia_colore');
function sfondoDivRosso(){
    
    for(let i = 0; i < divs.length; i++){
        divs[i].style.backgroundColor = 'red';
    }
}

function sfondoDivGiallo(){
   
    for(let i = 0; i < divs.length; i++){
        divs[i].style.backgroundColor = 'yellow';
    }
}

function sfondoDivBlu(){
    for(let i = 0; i < divs.length; i++){
        divs[i].style.backgroundColor = 'blue';
    }
}

