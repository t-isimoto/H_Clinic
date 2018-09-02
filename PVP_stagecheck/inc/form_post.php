<?php $file_path = get_included_files(); if (array_shift($file_path) === __FILE__) exit('cannot call directly!'); unset ($file_path); ?>
<?php

    $arr_stage = array("第1段階　第0層を体験します（認識はありません）", "第2段階　第0層の体験を認識します",
                        "第3段階　第0層の体験の認識と、第2層や第3層に至福の現れを感じます", "第4段階　第0層の体験の認識と、第1層に至福の現れを感じます",
                        "第5段階　第0層の体験の認識と、第2層や第3層で至福を体験します", "第6段階　第0層の体験の認識と、第1層で至福を体験します",
                        "第7段階　第0層の体験の認識と、第1層から第3層の全てで至福を体験します", "第8段階　完全に至福で満たされ、第4層に溢れ出ています",
                        "第9段階　第4層に至福が広がり、他者や環境に至福を感じます", "第10段階　第4層が至福で溢れており、他者や環境に至福を体験します",
                        "第11段階　第5層に至福が広がり、自分と他者や環境が統合し始めます", "第12段階　第5層が至福で満ち、個人という枠がなくなり、すべてが一つに統合しています。");

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