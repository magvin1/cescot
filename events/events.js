/*function sfondoDivRosso(){
    let divs = document.getElementsByClassName('cambia_colore');
    for(let i = 0; i < divs.length; i++){
        divs[i].style.backgroundColor = 'red';
    }
}

function sfondoDivGiallo(){
    let divs = document.getElementsByClassName('cambia_colore');
    for(let i = 0; i < divs.length; i++){
        divs[i].style.backgroundColor = 'yellow';
    }
}

function sfondoDivBlu(){
    let divs = document.getElementsByClassName('cambia_colore');
    for(let i = 0; i < divs.length; i++){
        divs[i].style.backgroundColor = 'blue';
    }
}
*/
function cambiaColoreDiv(coloreSfondo){
let divs = document.getElementsByClassName('cambia_colore');
switch(coloreSfondo){
case 'red':
for(let i = 0; i < divs.length; i++){
        divs[i].style.backgroundColor = 'red';
    }
break;
case 'yellow':
for(let i = 0; i < divs.length; i++){
        divs[i].style.backgroundColor = 'yellow';
    }
break;
case 'blue':
for(let i = 0; i < divs.length; i++){
        divs[i].style.backgroundColor = 'blue';
    }
break;
}

}

function alternaSfondoDiv(){
    let divs = document.getElementsByClassName('cambia_colore');
    for(let i = 0; i < divs.length; i+= 3){
        divs[i].style.backgroundColor = 'red';
    }
    for(let i = 1; i < divs.length; i+= 3){
        divs[i].style.backgroundColor = 'yellow';
    }
    for(let i = 2; i < divs.length; i+= 3){
        divs[i].style.backgroundColor = 'blue';
    }
}

