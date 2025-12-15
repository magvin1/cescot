//eventuale js
function cambiaColoreDiv(coloreSfondo){
    // seleziona tutti gli elementi con la classe 'cambia_colore'
    let divs = document.getElementsByClassName('first_group');
    // scegli il colore in base al parametro passato
    switch(coloreSfondo){
        case 'first_red':
                // imposta lo sfondo del primo div su rosso
                divs[0].style.backgroundColor = 'red';
            break;
        case 'second_red':
                // imposta lo sfondo del secondo div su rosso
                divs[1].style.backgroundColor = 'red';
            break;
        case 'every_red':
            for(let i = 0; i < divs.length; i++){
                // imposta lo sfondo di ogni div su rosso
                divs[i].style.backgroundColor = 'red';
            }
            break;
        case 'first_blue':
                // imposta lo sfondo del primo div su blu
                divs[0].style.backgroundColor = 'blue';
            break;
        case 'second_blue':
                // imposta lo sfondo del secondo div su blu
                divs[1].style.backgroundColor = 'blue';
            break;
        case 'every_blue':
            for(let i = 0; i < divs.length; i++){
                // imposta lo sfondo di ogni div su blu
                divs[i].style.backgroundColor = 'blue';
            }
            break;
    }

}