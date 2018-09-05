function circle(tag){
    var element = document.getElementById(tag);
    var h_element = document.getElementById('h_'+tag);
    
    element.classList.toggle('circle');
    
    var val = h_element.value;
    
    if(val == "0"){
        h_element.value = "1";
    }else{
        h_element.value = "0";
    }
}
