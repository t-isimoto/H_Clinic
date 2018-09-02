<?php
    include_once("inc/form_post.php");
    
    $num = 1;
?>
<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="content-language" content="ja" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <meta name="copyright" content="Copyright(C) 2018 test" />
    
    <link href="../css/common.css" rel="stylesheet" media="screen,print" />
    <link href="./css/style.css" rel="stylesheet" media="screen,print" />
</head>
<body>
<div id="contents">
    <p id="top_title">
        PVP Course
    </p>
    <p id="sub_title">
        Treatment Form
    </p>
    <div id="main_box">
        <form name="form1" method="post" action="layout.php">
            <div class="name_area">
                <span class="nameArea">
                    <span class="nameTitle">
                        Name<input type="text" size="30" name="name" value="<?php echo $name; ?>" />
                    </span>
                </span>
            </div>
            
            <div class="med_area">
                <div class="phaseArea">
                    <span class="phaseTitle">Phase2</span>Initializing
                </div>
                <div class="section_area">
                    <span class="subject_area">
                        <span class="section">
                            <span class="secTitle">Section&nbsp;
                            </span>
                            <span class="secNum">
                                <select name="section<?php echo $num; ?>">
<?php
    for($i = 0; $i < count($arr_section); $i++){
        echo<<<EOT
                                    <option value="{$arr_section[$i]}" {$section_value[$num][$i]}>{$arr_section[$i]}</option>

EOT;
    }
?>
                                </select>
                            </span>
                        </span>
                    </span>
                    <span class="dot">
                    、
                    </span>
                    <span class="data_area">
                        <span class="gNum">
                            <!--<div class="subject_area">-->
                                G
                            <select name="g<?php echo $num; ?>">
<?php
    for($i = 0; $i < count($arr_g); $i++){
        echo<<<EOT
                                <option value="{$arr_g[$i]}" {$g_value[$num][$i]}>{$arr_g[$i]}</option>

EOT;
    }
?>
                            </select>
                        </span>
                        <span class="eachTime">
                            <select name="teach<?php echo $num; ?>">
<?php
    for($i = 1; $i <= 10; $i++){
    $j = $i-1;
                        echo<<<EOT
                                <option value="{$i}" {$teach_value[$num][$j]}>{$i}</option>

EOT;
    }
?>
                            </select>
                        </span>
                        times each
                        <span class="vs">
                            <input type="checkbox" name="s<?php echo $num; ?>" value="1" <?php echo $s_value[$num]; ?> >S&nbsp;<input type="checkbox" name="vs<?php echo $num; ?>" value="1" <?php echo $vs_value[$num]; ?> >VS&nbsp;
                        </span>
<?php $num += 1; ?>
                </div>
            </div>
            
            <!--<div class="fC"></div>-->
            <div class="med_area">
                <div class="phaseArea">
                    <span class="phaseTitle">Phase3</span>Reconstructing
                </div>
                <div class="section_area">
                    <span class="subject_area">
                        <span class="section">
                            <span class="secTitle">
                                Section&nbsp;
                            </span>
                            <span class="secNum">
                                <select name="section<?php echo $num; ?>">
<?php
    for($i = 0; $i < count($arr_section); $i++){
        echo<<<EOT
                                <option value="{$arr_section[$i]}" {$section_value[$num][$i]}>{$arr_section[$i]}</option>

EOT;
    }
?>
                                </select>
                            </span>
                        </span>
                    </span>
                    <span class="dot">、</span>
                    <span class="data_area">
                        <span class="gNum">
                        G
                            <select name="g<?php echo $num; ?>">
<?php
    for($i = 0; $i < count($arr_g); $i++){
        echo<<<EOT
                                <option value="{$arr_g[$i]}" {$g_value[$num][$i]}>{$arr_g[$i]}</option>

EOT;
    }
?>
                            </select>
                        </span>
                        <span class="eachTime">
                            <select name="teach<?php echo $num; ?>">
<?php
    for($i = 1; $i <= 10; $i++){
    $j = $i-1;
                        echo<<<EOT
                                <option value="{$i}" {$teach_value[$num][$j]}>{$i}</option>

EOT;
    }
?>
                            </select>
                        </span>
                        times each
                        <span class="vs">
                            <input type="checkbox" name="s<?php echo $num; ?>" value="1" <?php echo $s_value[$num]; ?> >S&nbsp;<input type="checkbox" name="vs<?php echo $num; ?>" value="1" <?php echo $vs_value[$num]; ?> >VS&nbsp;
                        </span>
<?php $num += 1; ?>
                    </span>
                </div>
            </div>
            <div class="med_area">
                <div class="phaseArea">
                    <span class="title"><span class="phaseTitle">Phase4</span>Activating</span>
                    <span class="numSelect">
                        Stage
                        <input type="checkbox" name="c1" value="1" <?php echo $c1_value; ?> />1　
                        <input type="checkbox" name="c2" value="1" <?php echo $c2_value; ?> />2　
                        <input type="checkbox" name="c3" value="1" <?php echo $c3_value; ?> />3
                    </span>
                </div>
<?php
    for($num; $num <= 10; $num++){
        echo <<< EOT
                <!--<div class="fC"></div>-->
                <div class="section_area">
                    <span class="subject_area">
                        <span class="section">
                            <span class="secTitle">
                                Section&nbsp;
                            </span>
                            <span class="secNum">
                                <select name="section{$num}">

EOT;

        for($i = 0; $i < count($arr_section); $i++){
            echo<<<EOT
                                    <option value="{$arr_section[$i]}" {$section_value[$num][$i]}>{$arr_section[$i]}</option>

EOT;
        }
        echo <<< EOT
                                </select>
                            </span>
                        </span>
                    </span>
                <span class="dot">、</span>
                <span class="data_area">
                    <span class="gNum">
                        G
                        <select name="g{$num}">

EOT;
        for($i = 0; $i < count($arr_g); $i++){
            echo<<<EOT
                            <option value="{$arr_g[$i]}" {$g_value[$num][$i]}>{$arr_g[$i]}</option>

EOT;
        }

        echo <<< EOT
                        </select>
                    </span>
                    <span class="eachTime">
                        <select name="teach{$num}">

EOT;

        for($i = 1; $i <= 10; $i++){
        $j = $i-1;
                        echo<<<EOT
                            <option value="{$i}" {$teach_value[$num][$j]}>{$i}</option>

EOT;
        }

        echo <<< EOT
                        </select>
                    </span>
                        times each
                    <span class="vs">
                        <input type="checkbox" name="s{$num}" value="1" {$s_value[$num]} >S&nbsp;<input type="checkbox" name="vs{$num}" value="1" {$vs_value[$num]} >VS&nbsp;
                    </span>
                </span>
                </div>

EOT;
    }
?>
            </div>
        </form>
    </div>
    <div style="margin:auto; text-align:center; margin-top:20px;">
        <input type="button" value="確認" onclick="javascript:document.form1.submit();" />
    </div>
</div>
</body>
</html>
