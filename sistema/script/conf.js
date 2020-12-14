
function add(){
    element = document.getElementById("inlineFormCustomSelect").value;
    if(element !=""){
        var item = document.getElementById(element);
        if(item.classList.contains('remove')){
            item.classList.remove('remove');
        }
    }
}
function drop(result){
    if(result !=""){
        var item = document.getElementById(result);
        if(!item.classList.contains('remove')){
            item.classList.add('remove');
        }
    }
}

