<?php $file_path = get_included_files(); if (array_shift($file_path) === __FILE__) exit('cannot call directly!'); unset ($file_path); ?>
<?php

    $arr_sub = array('Pr', 'Ud', 'Sa', 'Ap', 'Vy', 'Pa', 'Ra', 'Sd', 'Al', 'Bh', 'Kl', 'Av', 'Bo', 'Tr', 'Sh');
    $arr_dhatus = array('Ras', 'Rak', 'Mam', 'Med', 'Ast', 'Maj', 'Shk');
    $arr_str = array('Te', 'Oc', 'Fr', 'Pa');
    
    $arr_plus = array('+', '++', '+++');
    $arr_vi   = array('V', 'P', 'K');
    
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : "";
    $date = date("Y / m / d");
    
    $kotoha1  = isset($_POST['kotoha_reading1']) ? htmlspecialchars($_POST['kotoha_reading1']) : "";
    $kotoha2  = isset($_POST['kotoha_reading2']) ? htmlspecialchars($_POST['kotoha_reading2']) : "";
    $kotoha3  = isset($_POST['kotoha_reading3']) ? htmlspecialchars($_POST['kotoha_reading3']) : "";
    $kotoha4  = isset($_POST['kotoha_reading4']) ? htmlspecialchars($_POST['kotoha_reading4']) : "";
    $kotoha5  = isset($_POST['kotoha_reading5']) ? htmlspecialchars($_POST['kotoha_reading5']) : "";
    
    $stage    = isset($_POST['stage']) ? $_POST['stage'] : "";
    
    $ojas     = isset($_POST['ojas']) ? $_POST['ojas'] : "";
    $vikriti  = isset($_POST['vikriti']) ? $_POST['vikriti'] : "";
    $ama      = isset($_POST['ama']) ? $_POST['ama'] : "";
    
    $sub      = isset($_POST['sub']) ? $_POST['sub'] : "";
    $dhatus   = isset($_POST['dhatus']) ? $_POST['dhatus'] : "";
    
    $c_te     = isset($_POST['c_te']) ? '<span style="font-size:16px;">&#x2611;</span>' : '<span style="font-size:16px;">&#x2610;</span>';
    $te       = isset($_POST['te']) ? $_POST['te'] : "";
    $c_oc     = isset($_POST['c_oc']) ? '<span style="font-size:16px;">&#x2611;</span>' : '<span style="font-size:16px;">&#x2610;</span>';
    $oc       = isset($_POST['oc']) ? $_POST['oc'] : "";
    $c_fr     = isset($_POST['c_fr']) ? '<span style="font-size:16px;">&#x2611;</span>' : '<span style="font-size:16px;">&#x2610;</span>';
    $fr       = isset($_POST['fr']) ? $_POST['fr'] : "";
    $c_pa     = isset($_POST['c_pa']) ? '<span style="font-size:16px;">&#x2611;</span>' : '<span style="font-size:16px;">&#x2610;</span>';
    $pa       = isset($_POST['pa']) ? $_POST['pa'] : "";
    
    $con1     = isset($_POST['con1']) ? '<span style="font-size:16px;">&#x2611;</span>' : '<span style="font-size:16px;">&#x2610;</span>';
    $con2     = isset($_POST['con2']) ? '<span style="font-size:16px;">&#x2611;</span>' : '<span style="font-size:16px;">&#x2610;</span>';
    $con3     = isset($_POST['con3']) ? '<span style="font-size:16px;">&#x2611;</span>' : '<span style="font-size:16px;">&#x2610;</span>';
    $con4     = isset($_POST['con4']) ? '<span style="font-size:16px;">&#x2611;</span>' : '<span style="font-size:16px;">&#x2610;</span>';
    
    $sharp1   = isset($_POST['sharp1']) ? htmlspecialchars($_POST['sharp1']) : "";
    $sharp2   = isset($_POST['sharp2']) ? htmlspecialchars($_POST['sharp2']) : "";
    $sharp3   = isset($_POST['sharp3']) ? htmlspecialchars($_POST['sharp3']) : "";
    $sharp4   = isset($_POST['sharp4']) ? htmlspecialchars($_POST['sharp4']) : "";
    $sharp5   = isset($_POST['sharp5']) ? htmlspecialchars($_POST['sharp5']) : "";
    $sharp6   = isset($_POST['sharp6']) ? htmlspecialchars($_POST['sharp6']) : "";
    
    $g        = array();
    $set      = array();
    $s        = array();
    $s_class  = array();
    $vs       = array();
    $vs_class = array();
    $time     = array();
    for($i = 1; $i <= 14; $i++){
        $g[$i]    = isset($_POST['g'.$i]) ?    htmlspecialchars($_POST['g'.$i]) : "";
        $s[$i]    = isset($_POST['h_s'.$i]) ?  htmlspecialchars($_POST['h_s'.$i]) : 0;
        $vs[$i]   = isset($_POST['h_vs'.$i]) ? htmlspecialchars($_POST['h_vs'.$i]) : 0;
        $time[$i] = isset($_POST['time'.$i]) ? htmlspecialchars($_POST['time'.$i]) : "";
        
        $s_class[$i] = "";
        if($s[$i] == 1){
            $s_class[$i] = "circle";
        }
        
        $vs_class[$i] = "";
        if($vs[$i] == 1){
            $vs_class[$i] = "circle";
        }
        
        if($i <= 6){
            $set[$i] = isset($_POST['set'.$i]) ? htmlspecialchars($_POST['set'.$i]) : "";
        }
    }
    
    $Sa = array();
    $Co = array();
    $Ma = array();
    $Gy = array();
    $St = array();
    $Kl = array();
    
    $Sa_class = array();
    $Co_class = array();
    $Ma_class = array();
    $Gy_class = array();
    $St_class = array();
    $Kl_class = array();
    
    for($i = 1; $i <= 10; $i++){
        $Sa[$i] = isset($_POST['h_Sa'.$i]) ? $_POST['h_Sa'.$i] : 0;
        $Co[$i] = isset($_POST['h_Co'.$i]) ? $_POST['h_Co'.$i] : 0;
        $Ma[$i] = isset($_POST['h_Ma'.$i]) ? $_POST['h_Ma'.$i] : 0;
        $Gy[$i] = isset($_POST['h_Gy'.$i]) ? $_POST['h_Gy'.$i] : 0;
        
        $Sa_class[$i] = "";
        if($Sa[$i] == 1){
            $Sa_class[$i] = "circle";
        }
        
        $Co_class[$i] = "";
        if($Co[$i] == 1){
            $Co_class[$i] = "circle";
        }
        
        $Ma_class[$i] = "";
        if($Ma[$i] == 1){
            $Ma_class[$i] = "circle";
        }
        
        $Gy_class[$i] = "";
        if($Gy[$i] == 1){
            $Gy_class[$i] = "circle";
        }
        
        if($i < 10){
            $St[$i] = isset($_POST['h_St'.$i]) ? $_POST['h_St'.$i] : 0;
            $Kl[$i] = isset($_POST['h_Kl'.$i]) ? $_POST['h_Kl'.$i] : 0;
            
            $St_class[$i] = "";
            if($St[$i] == 1){
                $St_class[$i] = "circle";
            }
            
            $Kl_class[$i] = "";
            if($Kl[$i] == 1){
                $Kl_class[$i] = "circle";
            }
        }
        
        if($i <= count($arr_str)){
            $Sa[$i+10] = isset($_POST['h_Sa_'.$arr_str[$i-1]]) ? $_POST['h_Sa_'.$arr_str[$i-1]] : 0;
            $Co[$i+10] = isset($_POST['h_Co_'.$arr_str[$i-1]]) ? $_POST['h_Co_'.$arr_str[$i-1]] : 0;
            $Ma[$i+10] = isset($_POST['h_Ma_'.$arr_str[$i-1]]) ? $_POST['h_Ma_'.$arr_str[$i-1]] : 0;
            $Gy[$i+10] = isset($_POST['h_Gy_'.$arr_str[$i-1]]) ? $_POST['h_Gy_'.$arr_str[$i-1]] : 0;
            $St[$i+9]  = isset($_POST['h_St_'.$arr_str[$i-1]]) ? $_POST['h_St_'.$arr_str[$i-1]] : 0;
            $Kl[$i+9]  = isset($_POST['h_Kl_'.$arr_str[$i-1]]) ? $_POST['h_Kl_'.$arr_str[$i-1]] : 0;
            
            $Sa_class[$i+10] = "";
            if($Sa[$i+10] == 1){
                $Sa_class[$i+10] = "circle";
            }
            
            $Co_class[$i+10] = "";
            if($Co[$i+10] == 1){
                $Co_class[$i+10] = "circle";
            }
            
            $Ma_class[$i+10] = "";
            if($Ma[$i+10] == 1){
                $Ma_class[$i+10] = "circle";
            }
            
            $Gy_class[$i+10] = "";
            if($Gy[$i+10] == 1){
                $Gy_class[$i+10] = "circle";
            }
            
            $St_class[$i+9] = "";
            if($St[$i+9] == 1){
                $St_class[$i+9] = "circle";
            }
            
            $Kl_class[$i+9] = "";
            if($Kl[$i+9] == 1){
                $Kl_class[$i+9] = "circle";
            }
        }
        
    }
    
    $stage_value   = array();
    $ojas_value    = array();
    $vikriti_value = array();
    $ama_value     = array();
    $sub_value     = array();
    $dhatus_value  = array();
    $c_te_value    = "";
    $te_value      = array();
    $c_oc_value    = "";
    $oc_value      = array();
    $c_fr_value    = "";
    $fr_value      = array();
    $c_pa_value    = "";
    $pa_value      = array();
    $con1_value    = "";
    $con2_value    = "";
    $con3_value    = "";
    $con4_value    = "";
    
    for($i = 1; $i <= 6; $i++){
        $stage_value[$i] = "";
        if($stage == $i){
            $stage_value[$i] = "selected";
        }
    }
    
    for($i = 1; $i <= 3; $i++){
        $ojas_value[$i]    = "";
        $vikriti_value[$i] = "";
        $ama_value[$i]     = "";
        
        if($ojas == $i){
            $ojas_value[$i] = "selected";
        }
        
        if($vikriti == $i){
            $vikriti_value[$i] = "selected";
        }
        
        if($ama == $i){
            $ama_value[$i] = "selected";
        }
    }
    
    for($i = 1; $i <= count($arr_sub); $i++){
        $sub_value[$i] = "";
        if($sub == $i){
            $sub_value[$i] = "selected";
        }
    }
    
    for($i = 1; $i <= count($arr_dhatus); $i++){
        $dhatus_value[$i] = "";
        if($dhatus == $i){
            $dhatus_value[$i] = "selected";
        }
    }
    
    for($i = 0; $i < 5; $i++){
        $te_value[$i] = "";
        if($te == $i){
            $te_value[$i] = "selected";
        }
        
        $oc_value[$i] = "";
        if($oc == $i){
            $oc_value[$i] = "selected";
        }
        
        $fr_value[$i] = "";
        if($fr == $i){
            $fr_value[$i] = "selected";
        }
        
        $pa_value[$i] = "";
        if($pa == $i){
            $pa_value[$i] = "selected";
        }
    }
    
        
    if(isset($_POST['c_te']) && $_POST['c_te'] != ""){
        $c_te_value = 'checked="checked"';
    }else{
        $c_te_value = "";
    }
    
    if(isset($_POST['c_oc']) && $_POST['c_oc'] != ""){
        $c_oc_value = 'checked="checked"';
    }else{
        $c_oc_value = "";
    }
    
    if(isset($_POST['c_fr']) && $_POST['c_fr'] != ""){
        $c_fr_value = 'checked="checked"';
    }else{
        $c_fr_value = "";
    }
    
    if(isset($_POST['c_pa']) && $_POST['c_pa'] != ""){
        $c_pa_value = 'checked="checked"';
    }else{
        $c_pa_value = "";
    }
    
    if(isset($_POST['con1']) && $_POST['con1'] != ""){
        $con1_value = 'checked="checked"';
    }else{
        $con1_value = "";
    }
    
    if(isset($_POST['con2']) && $_POST['con2'] != ""){
        $con2_value = 'checked="checked"';
    }else{
        $con2_value = "";
    }
    
    if(isset($_POST['con3']) && $_POST['con3'] != ""){
        $con3_value = 'checked="checked"';
    }else{
        $con3_value = "";
    }
    
    if(isset($_POST['con4']) && $_POST['con4'] != ""){
        $con4_value = 'checked="checked"';
    }else{
        $con4_value = "";
    }
?>
