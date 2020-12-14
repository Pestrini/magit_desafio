texto = "";
function abrir(valor){
    texto = "Detalhes do Meu Plano "+ valor +" em -";
    inMesAno.innerHTML =texto;
}
function buscar() {
    var inputMesAno = document.getElementById('inputMesAno').value;
    var inMesAno = document.getElementById('inMesAno');
    if(inputMesAno.length>=10){
        inMesAno.innerHTML = texto+ inputMesAno;
        
    }else{
        inputMesAno = "";
    }
}
