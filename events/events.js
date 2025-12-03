function sfondoDivRosso(){
    let mioDiv = document.getElementsByClassName('cambia_colore');
    for(let i=0; i< mioDiv.length; i++){
    mioDiv[i].style.backgroundColor = 'red';
    }
}
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