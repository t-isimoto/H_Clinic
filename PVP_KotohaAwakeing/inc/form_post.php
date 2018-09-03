<?php $file_path = get_included_files(); if (array_shift($file_path) === __FILE__) exit('cannot call directly!'); unset ($file_path); ?>
<?php

    $arr_stage = array("第1段階　第0層を体験します（認識はありません）", "第2段階　第0層の体験を認識します",
                        "第3段階　第0層の体験の認識と、第2層や第3層に至福の現れを感じます", "第4段階　第0層の体験の認識と、第1層に至福の現れを感じます",
                        "第5段階　第0層の体験の認識と、第2層や第3層で至福を体験します", "第6段階　第0層の体験の認識と、第1層で至福を体験します",
                        "第7段階　第0層の体験の認識と、第1層から第3層の全てで至福を体験します", "第8段階　完全に至福で満たされ、第4層に溢れ出ています",
                        "第9段階　第4層に至福が広がり、他者や環境に至福を感じます", "第10段階　第4層が至福で溢れており、他者や環境に至福を体験します",
                        "第11段階　第5層に至福が広がり、自分と他者や環境が統合し始めます", "第12段階　第5層が至福で満ち、個人という枠がなくなり、すべてが一つに統合しています");
    
    
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : "";
    $date = date("Y / m / d");
    
    $stage         = isset($_POST['stage'])        ? $_POST['stage'] : "";
    $tec_stage1    = isset($_POST['tec_stage1'])   ? $_POST['tec_stage1'] : "";
    $tec_stage2_1  = isset($_POST['tec_stage2_1']) ? $_POST['tec_stage2_1'] : "";
    $tec_stage2_2  = isset($_POST['tec_stage2_2']) ? $_POST['tec_stage2_2'] : "";
    $tec_stage2_3  = isset($_POST['tec_stage2_3']) ? $_POST['tec_stage2_3'] : "";
    
    $next_stage    = isset($_POST['next_stage']) ? $_POST['next_stage'] : "";
    
    $check_month   = isset($_POST['check_month']) ? $_POST['check_month'] : "";
    $med_month     = isset($_POST['med_month']) ? $_POST['med_month'] : "";

    $stage_value         = array();
    $tec_stage1_value    = array();
    $tec_stage2_1_value  = array();
    $tec_stage2_2_value  = array();
    $tec_stage2_3_value  = array();
    
    $next_stage_value    = array();

    $check_month_value   = array();
    $med_month_value     = array();

    for($i = 1; $i <= 30; $i++){
        if($i <= 12){
            $stage_value[$i] = "";
            if($stage == $i){
                $stage_value[$i] = "selected";
            }
        }

        $tec_stage1_value[$i]    = "";
        $tec_stage2_1_value[$i]  = "";
        $tec_stage2_2_value[$i]  = "";
        $tec_stage2_3_value[$i]  = "";

        if($tec_stage1 == $i){
            $tec_stage1_value[$i] = "selected";
        }
        if($tec_stage2_1 == $i){
            $tec_stage2_1_value[$i] = "selected";
        }
        if($tec_stage2_2 == $i){
            $tec_stage2_2_value[$i] = "selected";
        }
        if($tec_stage2_3 == $i){
            $tec_stage2_3_value[$i] = "selected";
        }

        if($i <= 7){
            $next_stage_value[$i] = "";
            if($next_stage == $i){
                $next_stage_value[$i] = "selected";
            }
        }

        if($i <= 3){
            $check_month_value[$i] = "";
            $med_month_value[$i]   = "";
            if($check_month == $i){
                $check_month_value[$i] = "selected";
            }

            if($med_month == $i){
                $med_month_value[$i] = "selected";
            }
        }
    }

    $tec_stage2_2_string = "";
    $tec_stage2_3_string = "";

    if($tec_stage2_2 != 0){
        $tec_stage2_2_string = "、".$_POST['tec_stage2_2'];
    }

    if($tec_stage2_3 != 0){
        $tec_stage2_3_string = "、".$_POST['tec_stage2_3'];
    }
?>