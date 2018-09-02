<?php $file_path = get_included_files(); if (array_shift($file_path) === __FILE__) exit('cannot call directly!'); unset ($file_path); ?>
<?php
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : "";
    $date = date("Y / m / d");
    
    $select = array();
    $s = array();
    $vs = array();
    
    $select_value = array();
    $s_value = array();
    $vs_value = array();
    
    for($i = 1; $i <= 14; $i++){
        $select[$i] = isset($_POST['select'.$i]) ? $_POST['select'.$i] : 1;
        $s[$i] = isset($_POST['s'.$i]) ? '<span style="font-size:16px;">&#x2611;</span>' : '<span style="font-size:16px;">&#x2610;</span>';
        $vs[$i] = isset($_POST['vs'.$i]) ? '<span style="font-size:16px;">&#x2611;</span>' : '<span style="font-size:16px;">&#x2610;</span>';
        
        for($j = 1; $j <= 10; $j++){
            $select_value[$i][$j] = "";
            if($select[$i] == $j){
                $select_value[$i][$j] = "selected";
            }
        }
        if(isset($_POST['s'.$i]) && $_POST['s'.$i] != ""){
            $s_value[$i] = 'checked="checked"';
        }else{
            $s_value[$i] = "";
        }
        
        if(isset($_POST['vs'.$i]) && $_POST['vs'.$i] != ""){
            $vs_value[$i] = 'checked="checked"';
        }else{
            $vs_value[$i] = "";
        }
    }
?>