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
    // seleziona tutti gli elementi con la classe 'cambia_colore'
    let divs = document.getElementsByClassName('cambia_colore');
    // scegli il colore in base al parametro passato
    switch(coloreSfondo){
        case 'red':
            for(let i = 0; i < divs.length; i++){
                // imposta lo sfondo di ogni div su rosso
                divs[i].style.backgroundColor = 'red';
            }
            break;
        case 'yellow':
            for(let i = 0; i < divs.length; i++){
                // imposta lo sfondo di ogni div su giallo
                divs[i].style.backgroundColor = 'yellow';
            }
            break;
        case 'blue':
            for(let i = 0; i < divs.length; i++){
                // imposta lo sfondo di ogni div su blu
                divs[i].style.backgroundColor = 'blue';
            }
            break;
        case 'green':
            for(let i = 0; i < divs.length; i++){
                // imposta lo sfondo di ogni div su blu
                divs[i].style.backgroundColor = 'green';
            }
            break;
        case 'orange':
            for(let i = 0; i < divs.length; i++){
                // imposta lo sfondo di ogni div su blu
                divs[i].style.backgroundColor = 'orange';
            }
            break;
    }

}

function alternaSfondoDiv(){
    // seleziona tutti gli elementi con la classe 'cambia_colore'
    let divs = document.getElementsByClassName('cambia_colore');
    // ciclo con passo 3: imposta i div in posizione 0,3,6,... su rosso
    for(let i = 0; i < divs.length; i+= 3){
        // posizione modulo 3 == 0 -> rosso
        divs[i].style.backgroundColor = 'red';
    }
    // ciclo con passo 3: imposta i div in posizione 1,4,7,... su giallo
    for(let i = 1; i < divs.length; i+= 3){
        // posizione modulo 3 == 1 -> giallo
        divs[i].style.backgroundColor = 'yellow';
    }
    // ciclo con passo 3: imposta i div in posizione 2,5,8,... su blu
    for(let i = 2; i < divs.length; i+= 3){
        // posizione modulo 3 == 2 -> blu
        divs[i].style.backgroundColor = 'blue';
    }
}

