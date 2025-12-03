/*mo ci scriviamo qualcosa*/
function sfondoDivRosso(){
let mioDiv = document.getElementsByClassName('cambia_colore');
for(let i=0; i< mioDiv.length; i++){
mioDiv[i].style.backgroundColor = 'red';
}
}
