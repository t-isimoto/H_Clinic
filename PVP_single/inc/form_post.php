<?php $file_path = get_included_files(); if (array_shift($file_path) === __FILE__) exit('cannot call directly!'); unset ($file_path); ?>
<?php
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : "";
    $date = date("Y / m / d");
    
    $year  = isset($_POST['year'])  ? htmlspecialchars($_POST['year'])  : "";
    $month = isset($_POST['month']) ? htmlspecialchars($_POST['month']) : "";
    $day   = isset($_POST['day'])   ? htmlspecialchars($_POST['day'])   : "";
        
    $set   = array();
    $count = array();
        
    $set_value   = array();
    $count_value = array();
    
    $c       = array();
    $c_value = array();
    
    for($i = 1; $i <= 5; $i++){
        $c[$i] = isset($_POST['c'.$i]) ? '&#9632;' : '&#x2610;';
        
        if(isset($_POST['c'.$i]) && $_POST['c'.$i] != ""){
            $c_value[$i] = 'checked="checked"';
        }else{
            $c_value[$i] = "";
        }
    }
    
    for($i = 1; $i <= 5; $i++){
        $set[$i]   = isset($_POST['set'.$i])   ? $_POST['set'.$i]   : "";
        $count[$i] = isset($_POST['count'.$i]) ? $_POST['count'.$i] : "";
        
        for($j = 1; $j <= 5; $j++){
            $set_value[$i][$j]   = "";
            $count_value[$i][$j] = "";
        
            if($set[$i] == $j){
                $set_value[$i][$j] = "selected";
            }
            
            if($j <= 4){
                if($count[$i] == $j){
                    $count_value[$i][$j] = "selected";
                }
            }
        }
    }
?>