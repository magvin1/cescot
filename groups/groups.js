//eventuale js
function cambiaColoreDiv(coloreSfondo){
    // creo la variabile divs, inizializzandola solo all'interno dello switch
    let divs;
    // scegli il colore e il gruppo da colorare in base al parametro passato
    switch(coloreSfondo){
        case 'first_red': // imposta lo sfondo del primo gruppo div su rosso
            divs = document.getElementsByClassName('primo_gruppo');
            for(let i = 0; i < divs.length; i++)
                divs[i].style.backgroundColor = 'red';
            break;
        case 'second_red': // imposta lo sfondo del secondo gruppo div su rosso
            divs = document.getElementsByClassName('secondo_gruppo');
            for(let i = 0; i < divs.length; i++)
                divs[i].style.backgroundColor = 'red';
            break;
            case 'third_red': // imposta lo sfondo del secondo gruppo div su blu
            divs = document.getElementsByClassName('terzo_gruppo');
            for(let i = 0; i < divs.length; i++)
                divs[i].style.backgroundColor = 'red';
            break;
        case 'every_red': //imposta lo sfondo di ogni gruppo su rosso
            divs = document.getElementsByClassName('primo_gruppo');
            for(let i = 0; i < divs.length; i++)
                divs[i].style.backgroundColor = 'red';
            divs = document.getElementsByClassName('secondo_gruppo');
            for(let i = 0; i < divs.length; i++)
                divs[i].style.backgroundColor = 'red';
            divs = document.getElementsByClassName('terzo_gruppo');
            for(let i = 0; i < divs.length; i++)
                divs[i].style.backgroundColor = 'red';
            break;
        case 'first_blue': // imposta lo sfondo del primo gruppo div su blu
            divs = document.getElementsByClassName('primo_gruppo');
            for(let i = 0; i < divs.length; i++)
                divs[i].style.backgroundColor = 'blue';
            break;
        case 'second_blue': // imposta lo sfondo del secondo gruppo div su blu
            divs = document.getElementsByClassName('secondo_gruppo');
            for(let i = 0; i < divs.length; i++)
                divs[i].style.backgroundColor = 'blue';
            break;
        case 'third_blue': // imposta lo sfondo del secondo gruppo div su blu
                divs = document.getElementsByClassName('terzo_gruppo');
                for(let i = 0; i < divs.length; i++)
                    divs[i].style.backgroundColor = 'blue';
            break;
        case 'every_blue': // imposta lo sfondo di ogni div su blu
            divs = document.getElementsByClassName('primo_gruppo');
            for(let i = 0; i < divs.length; i++)
                divs[i].style.backgroundColor = 'blue';
            divs = document.getElementsByClassName('secondo_gruppo');
            for(let i = 0; i < divs.length; i++)
                divs[i].style.backgroundColor = 'blue';
            divs = document.getElementsByClassName('terzo_gruppo');
            for(let i = 0; i < divs.length; i++)
                divs[i].style.backgroundColor = 'blue';
            break;
        case 'first_yellow': // imposta lo sfondo del primo gruppo div su rosso
            divs = document.getElementsByClassName('primo_gruppo');
            for(let i = 0; i < divs.length; i++)
                divs[i].style.backgroundColor = 'yellow';
            break;
        case 'second_yellow': // imposta lo sfondo del secondo gruppo div su blu
            divs = document.getElementsByClassName('secondo_gruppo');
            for(let i = 0; i < divs.length; i++)
                divs[i].style.backgroundColor = 'yellow';
            break;
        case 'third_yellow': // imposta lo sfondo del secondo gruppo div su blu
            divs = document.getElementsByClassName('terzo_gruppo');
            for(let i = 0; i < divs.length; i++)
                divs[i].style.backgroundColor = 'yellow';
            break;
        case 'every_yellow':
            divs =document.getElementsByClassName('primo_gruppo');
            for(let i = 0; i < divs.length; i++)
                divs[i].style.backgroundColor = 'yellow';
            divs =document.getElementsByClassName('secondo_gruppo');
            for(let i = 0; i < divs.length; i++)
                divs[i].style.backgroundColor = 'yellow';
            divs =document.getElementsByClassName('terzo_gruppo');
            for(let i = 0; i < divs.length; i++)
                divs[i].style.backgroundColor = 'yellow';
            break;
        default: // In caso di errori imposta lo sfondo di ogni div su verde
            for(let i = 0; i < divs.length; i++)
                divs[i].style.backgroundColor = 'green';
    }

}