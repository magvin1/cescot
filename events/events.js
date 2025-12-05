
const mioDivs = document.getElementsByClassName('cambia_colore');

const bottoniColore = document.querySelectorAll('[data-colore]');

function cambiaColoreDiv(event) {

    const bottoneCliccato = event.currentTarget;
    
    
    const coloreSelezionato = bottoneCliccato.dataset.colore;
    
  
    for (let i = 0; i < mioDivs.length; i++) {
        mioDivs[i].style.backgroundColor = coloreSelezionato;
        
 
        if (coloreSelezionato === 'blue') {
            mioDivs[i].style.color = 'white';
        } else {
            mioDivs[i].style.color = 'black';
        }
    }
}


bottoniColore.forEach(bottone => {
    bottone.addEventListener('click', cambiaColoreDiv);
});
//si
/*
function sfondoDivRosso(){
    let mioBtn=document.getElementById('btn_colora');

    mioBtn.addEventListener("click",function(){
        let divs =document.getElementsByClassName('cambia_colore');
        for(let i=0; i< mioDiv.length; i++){
        divs[i].style.backgroundColor = 'red';
        }
    })
}
*/