function circle(tag){
    var element = document.getElementById(tag);
    var h_element = document.getElementById('h_'+tag);
    
    element.classList.toggle('circle');

    if(tag.match(/^vs\d*/)){
        var remove_ele = document.getElementById(tag.match(/s[0-9]*/));
        remove_ele.classList.remove('circle');
    }else if(tag.match(/^s\d*/)){
        var remove_ele = document.getElementById("v"+tag.match(/s[0-9]*/));
        remove_ele.classList.remove('circle');
    }
    
    var val = h_element.value;
    
    if(val == "0"){
        h_element.value = "1";
    }else{
        h_element.value = "0";
    }
}
