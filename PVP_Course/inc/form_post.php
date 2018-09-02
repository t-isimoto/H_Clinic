<?php $file_path = get_included_files(); if (array_shift($file_path) === __FILE__) exit('cannot call directly!'); unset ($file_path); ?>
<?php
    //section項目
    $arr_section = array('A', '(A)', 'B', '(B1)', '(B2)', 'C', '(C1)', '(C2)', 'D',
                     '1a', '1b', '1c', '1d',
                     '2a', '2b',
                     '3a', '3b',
                     '4a', '4b',
                     '5a', '5b','5a', '5b',
                     '6a', '6b','6a', '6b',
                     '7a', '7b',
                     '8a', '8b','8c');

    $arr_g = array('1', '2', '3', '4', '5', '6', '7', '8', '9',
               '23456', '34', '45', '35', '345',
               '789', '6789');


    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : "";
    $date = date("Y / m / d");
    
    $section = array();
    $s = array();
    $vs = array();
    $g = array();
    $teach = array();
    $c1 = isset($_POST['c1']) ? '<span style="font-size:16px;">&#x2611;</span>' : '<span style="font-size:16px;">&#x2610;</span>';
    $c2 = isset($_POST['c2']) ? '<span style="font-size:16px;">&#x2611;</span>' : '<span style="font-size:16px;">&#x2610;</span>';
    $c3 = isset($_POST['c3']) ? '<span style="font-size:16px;">&#x2611;</span>' : '<span style="font-size:16px;">&#x2610;</span>';
    
    $section_value = array();
    $s_value = array();
    $vs_value = array();
    
    $g_value = array();
    
    $teach_value = array();
    
    if(isset($_POST['c1']) && $_POST['c1'] != ""){
        $c1_value = 'checked="checked"';
    }else{
        $c1_value = "";
    }
    if(isset($_POST['c2']) && $_POST['c2'] != ""){
        $c2_value = 'checked="checked"';
    }else{
        $c2_value = "";
    }
    if(isset($_POST['c3']) && $_POST['c3'] != ""){
        $c3_value = 'checked="checked"';
    }else{
        $c3_value = "";
    }
    
    for($i = 1; $i <= 10; $i++){
        $section[$i] = isset($_POST['section'.$i]) ? $_POST['section'.$i] : $arr_section[0];
        $g[$i] = isset($_POST['g'.$i]) ? $_POST['g'.$i] : $arr_g[0];
        $teach[$i] = isset($_POST['teach'.$i]) ? $_POST['teach'.$i] : 1;
        $s[$i] = isset($_POST['s'.$i]) ? '<span style="font-size:16px;">&#x2611;</span>' : '<span style="font-size:16px;">&#x2610;</span>';
        $vs[$i] = isset($_POST['vs'.$i]) ? '<span style="font-size:16px;">&#x2611;</span>' : '<span style="font-size:16px;">&#x2610;</span>';
        
        for($j = 0; $j < 32; $j++){
            $section_value[$i][$j] = "";
            if($section[$i] == $arr_section[$j]){
                $section_value[$i][$j] = "selected";
            }
            
            if($j < 16){
                $g_value[$i][$j] = "";
                if($g[$i] == $arr_g[$j]){
                    $g_value[$i][$j] = "selected";
                }
                
                if($j < 10){
                    $teach_value[$i][$j] = "";
                    if($teach[$i] == $j+1){
                        $teach_value[$i][$j] = "selected";
                    }
                }
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