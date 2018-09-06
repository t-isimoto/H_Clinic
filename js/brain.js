function brain(tag){
    var element = document.getElementById(tag);

    if(element.style.filter == 'grayscale(100%)'){
        element.style.filter = 'grayscale(0%)'
    }else{
        element.style.filter = 'grayscale(100%)';
    }
}