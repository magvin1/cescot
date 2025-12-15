//eventuale js
function cambiaColoreDiv(coloreSfondo){
    // seleziona tutti gli elementi con la classe 'cambia_colore'
    let divs;
    // scegli il colore in base al parametro passato
    switch(coloreSfondo){
        case 'first_red':
            divs = document.getElementsByClassName('primo_gruppo');
            for(let i = 0; i < divs.length; i++){
                // imposta lo sfondo del primo div su rosso
                divs[i].style.backgroundColor = 'red';
            }
            break;
        case 'second_red':
            divs = document.getElementsByClassName('secondo_gruppo');
            for(let i = 0; i < divs.length; i++){
                // imposta lo sfondo del primo div su rosso
                divs[i].style.backgroundColor = 'red';
            }
            break;
        case 'every_red':
             divs = document.getElementsByClassName('primo_gruppo');
            for(let i = 0; i < divs.length; i++){
                // imposta lo sfondo di ogni div su blu
                divs[i].style.backgroundColor = 'red';
            }
            divs = document.getElementsByClassName('secondo_gruppo');
            for(let i = 0; i < divs.length; i++){
                // imposta lo sfondo del primo div su rosso
                divs[i].style.backgroundColor = 'red';
            }
            break;
        case 'first_blue':
            divs = document.getElementsByClassName('primo_gruppo');
            for(let i = 0; i < divs.length; i++){
                // imposta lo sfondo del primo div su rosso
                divs[i].style.backgroundColor = 'blue';
            }
            break;
        case 'second_blue':
            divs = document.getElementsByClassName('secondo_gruppo');
            for(let i = 0; i < divs.length; i++){
                // imposta lo sfondo del primo div su rosso
                divs[i].style.backgroundColor = 'blue';
            }
            break;
        case 'every_blue':
             divs = document.getElementsByClassName('primo_gruppo');
            for(let i = 0; i < divs.length; i++){
                // imposta lo sfondo di ogni div su blu
                divs[i].style.backgroundColor = 'blue';
            }
            divs = document.getElementsByClassName('secondo_gruppo');
            for(let i = 0; i < divs.length; i++){
                // imposta lo sfondo del primo div su rosso
                divs[i].style.backgroundColor = 'blue';
            }
            break;
        default:
            for(let i = 0; i < divs.length; i++){
                // imposta lo sfondo di ogni div su blu
                divs[i].style.backgroundColor = 'green';
            }
    }

}