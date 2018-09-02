<?php $file_path = get_included_files(); if (array_shift($file_path) === __FILE__) exit('cannot call directly!'); unset ($file_path); ?>
<?php

    $arr_ml = array('100', '150', '200', '250', '3000');
    
    
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : "";
    $date = date("Y / m / d");
    
    $diagnosis  = isset($_POST['diagnosis']) ? htmlspecialchars($_POST['diagnosis']) : "";
    $pretherapy = isset($_POST['pretherapy']) ? htmlspecialchars($_POST['pretherapy']) : "";
    
    $week_count = isset($_POST['week_count']) ? $_POST['week_count'] : "1";
    $count = isset($_POST['count']) ? $_POST['count'] : "1";
    $conformer = isset($_POST['conformer']) ? $_POST['conformer'] : "1";
    
    $ml = isset($_POST['ml']) ? $_POST['ml'] : $arr_ml[0];
    
    $retry = isset($_POST['retry']) ? $_POST['retry'] : "1";
    
    $c = array();
    $c_value = array();
    
    for($i = 1; $i <= 8; $i++){
        $c[$i] = isset($_POST['c'.$i]) ? '<span style="font-size:16px;">&#x2611;</span>' : '<span style="font-size:16px;">&#x2610;</span>';
        
        if(isset($_POST['c'.$i]) && $_POST['c'.$i] != ""){
            $c_value[$i] = 'checked="checked"';
        }else{
            $c_value[$i] = "";
        }
    }
    
    $week_count_value = array();
    $count_value      = array();
    $conformer_value  = array();
    $ml_value         = array();
    $retry_value      = array();
    
    for($i = 1; $i <= 5; $i++){
        
        $conformer_value[$i] = "";
        $ml_value[$i]        = "";
        
        if($conformer == $i){
            $conformer_value[$i] = "selected";
        }
        
        if($ml == $arr_ml[$i-1]){
            $ml_value[$i-1] = "selected";
        }
        
        if($i != 5){
            $week_count_value[$i] = "";
            $count_value[$i]      = "";
            $retry_value[$i]      = "";
            
            if($week_count == $i){
                $week_count_value[$i] = "selected";
            }
            
            if($count == $i){
                $count_value[$i] = "selected";
            }
            
            if($retry == $i){
                $retry_value[$i] = "selected";
            }
        }
    }
?>