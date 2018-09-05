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
        PVP Awakeing
    </p>
    <p id="sub_title">
        Treatment Form
    </p>
    <div id="main_box">
        <form name="form1" method="post" action="layout.php">
            <div class="name_area">
                <div class="fL">Name　<input type="text" size="30" name="name" value="<?php echo $name; ?>" /></div>
                <div class="fC"></div>
            </div>
            
            <div class="med_area">
                <div class="subject_area">
                    <div class="fL">Section　6d　G5+7　</div>
                </div>
                <div class="fL">、</div>
                <div class="subject_area">
                    <select name="select1" style="height:25px;">
<?php
    for($i = 1; $i <= 10; $i++){
                        echo<<<EOT
                        <option value="{$i}" {$select_value[$num][$i]}>{$i}</option>

EOT;
    }
?>
                    </select>
                    times each　
                    <input type="checkbox" name="s<?php echo $num; ?>" value="1" <?php echo $s_value[$num]; ?> >S&nbsp;<input type="checkbox" name="vs<?php echo $num; ?>" value="1" <?php echo $vs_value[$num]; ?> >VS&nbsp;
<?php $num += 1; ?>
                </div>
            </div>
            <div class="fC"></div>
            <div class="med_area">
                <div class="subject_area">
                    <div class="fL">Section　6b　G5　　</div>
                </div>
                <div class="fL">、</div>
                <div class="subject_area">
                    <select name="select2" style="height:25px;">
<?php
    for($i = 1; $i <= 10; $i++){
                        echo<<<EOT
                        <option value="{$i}" {$select_value[$num][$i]}>{$i}</option>

EOT;
    }
?>
                    </select>
                    times each　
                    <input type="checkbox" name="s<?php echo $num; ?>" value="1" <?php echo $s_value[$num]; ?> >S&nbsp;<input type="checkbox" name="vs<?php echo $num; ?>" value="1" <?php echo $vs_value[$num]; ?> >VS&nbsp;
<?php $num += 1; ?>
                </div>
            </div>
            <div class="fC"></div>
            <div class="med_area">
                <div class="subject_area">
                    <div class="fL">Section　8c　G0　　</div>
                </div>
                <div class="fL">、</div>
                <div class="subject_area">
                    <select name="select2" style="height:25px;">
<?php
    for($i = 1; $i <= 10; $i++){
                        echo<<<EOT
                        <option value="{$i}" {$select_value[$num][$i]}>{$i}</option>

EOT;
    }
?>
                    </select>
                    times each　
                    <input type="checkbox" name="s<?php echo $num; ?>" value="1" <?php echo $s_value[$num]; ?> >S&nbsp;<input type="checkbox" name="vs<?php echo $num; ?>" value="1" <?php echo $vs_value[$num]; ?> >VS&nbsp;
<?php $num += 1; ?>
                </div>
            </div>
            <div class="fC"></div>
            <div class="med_area">
                <div class="subject_area">
                    <div class="fL">Section　8b　G1</div>
                </div>
                <div class="fL">、</div>
                <div class="subject_area">
                    <select name="select4" style="height:25px;">
<?php
    for($i = 1; $i <= 10; $i++){
                        echo<<<EOT
                        <option value="{$i}" {$select_value[$num][$i]}>{$i}</option>

EOT;
    }
?>
                    </select>
                    times each　
                    <input type="checkbox" name="s<?php echo $num; ?>" value="1" <?php echo $s_value[$num]; ?> >S&nbsp;<input type="checkbox" name="vs<?php echo $num; ?>" value="1" <?php echo $vs_value[$num]; ?> >VS&nbsp;
<?php $num += 1; ?>
                </div>
                <div class="fL">、</div>
                <div class="subject_area">
                    8b7a7b
                </div>
            </div>
            <div class="fC"></div>
            <div class="med_area">
                <div class="subject_area">
                    <div class="fL">Section　8a　G2</div>
                </div>
                <div class="fL">、</div>
                <div class="subject_area">
                    <select name="select4" style="height:25px;">
<?php
    for($i = 1; $i <= 10; $i++){
                        echo<<<EOT
                        <option value="{$i}" {$select_value[$num][$i]}>{$i}</option>

EOT;
    }
?>
                    </select>
                    times each　
                    <input type="checkbox" name="s<?php echo $num; ?>" value="1" <?php echo $s_value[$num]; ?> >S&nbsp;<input type="checkbox" name="vs<?php echo $num; ?>" value="1" <?php echo $vs_value[$num]; ?> >VS&nbsp;
<?php $num += 1; ?>
                </div>
                <div class="fL">、</div>
                <div class="subject_area">
                    8a
                </div>
            </div>
            <div class="fC"></div>
            <div class="med_area">
                <div class="subject_area">
                    <div class="fL">Section　8a　G3</div>
                </div>
                <div class="fL">、</div>
                <div class="subject_area">
                    <select name="select4" style="height:25px;">
<?php
    for($i = 1; $i <= 10; $i++){
                        echo<<<EOT
                        <option value="{$i}" {$select_value[$num][$i]}>{$i}</option>

EOT;
    }
?>
                    </select>
                    times each　
                    <input type="checkbox" name="s<?php echo $num; ?>" value="1" <?php echo $s_value[$num]; ?> >S&nbsp;<input type="checkbox" name="vs<?php echo $num; ?>" value="1" <?php echo $vs_value[$num]; ?> >VS&nbsp;
<?php $num += 1; ?>
                </div>
                <div class="fL">、</div>
                <div class="subject_area">
                    8a
                </div>
            </div>
            <div class="fC"></div>
            <div class="med_area">
                <div class="subject_area">
                    <div class="fL">Section　7b　G4</div>
                </div>
                <div class="fL">、</div>
                <div class="subject_area">
                    <select name="select7" style="height:25px;">
<?php
    for($i = 1; $i <= 10; $i++){
                        echo<<<EOT
                        <option value="{$i}" {$select_value[$num][$i]}>{$i}</option>

EOT;
    }
?>
                    </select>
                    times each　
                    <input type="checkbox" name="s<?php echo $num; ?>" value="1" <?php echo $s_value[$num]; ?> >S&nbsp;<input type="checkbox" name="vs<?php echo $num; ?>" value="1" <?php echo $vs_value[$num]; ?> >VS&nbsp;
<?php $num += 1; ?>                </div>
                <div class="fL">、</div>
                <div class="subject_area">
                    7b
                </div>
            </div>
            <div class="fC"></div>
            <div class="med_area">
                <div class="subject_area">
                    <div class="fL">Section　7a　G5</div>
                </div>
                <div class="fL">、</div>
                <div class="subject_area">
                    <select name="select8" style="height:25px;">
<?php
    for($i = 1; $i <= 10; $i++){
                        echo<<<EOT
                        <option value="{$i}" {$select_value[$num][$i]}>{$i}</option>

EOT;
    }
?>
                    </select>
                    times each　
                    <input type="checkbox" name="s<?php echo $num; ?>" value="1" <?php echo $s_value[$num]; ?> >S&nbsp;<input type="checkbox" name="vs<?php echo $num; ?>" value="1" <?php echo $vs_value[$num]; ?> >VS&nbsp;
<?php $num += 1; ?>
                </div>
                <div class="fL">、</div>
                <div class="subject_area">
                    7a
                </div>
            </div>
            <div class="fC"></div>
            <div class="med_area">
                <div class="subject_area">
                    <div class="fL">Section　7a　G6</div>
                </div>
                <div class="fL">、</div>
                <div class="subject_area">
                    <select name="select9" style="height:25px;">
<?php
    for($i = 1; $i <= 10; $i++){
                        echo<<<EOT
                        <option value="{$i}" {$select_value[$num][$i]}>{$i}</option>

EOT;
    }
?>
                    </select>
                    times each　
                    <input type="checkbox" name="s<?php echo $num; ?>" value="1" <?php echo $s_value[$num]; ?> >S&nbsp;<input type="checkbox" name="vs<?php echo $num; ?>" value="1" <?php echo $vs_value[$num]; ?> >VS&nbsp;
<?php $num += 1; ?>
                </div>
                <div class="fL">、</div>
                <div class="subject_area">
                    7a
                </div>
            </div>
            <div class="fC"></div>
            <div class="med_area">
                <div class="subject_area">
                    <div class="fL">Section　8a　G7</div>
                </div>
                <div class="fL">、</div>
                <div class="subject_area">
                    <select name="select10" style="height:25px;">
<?php
    for($i = 1; $i <= 10; $i++){
                        echo<<<EOT
                        <option value="{$i}" {$select_value[$num][$i]}>{$i}</option>

EOT;
    }
?>
                    </select>
                    times each　
                    <input type="checkbox" name="s<?php echo $num; ?>" value="1" <?php echo $s_value[$num]; ?> >S&nbsp;<input type="checkbox" name="vs<?php echo $num; ?>" value="1" <?php echo $vs_value[$num]; ?> >VS&nbsp;
<?php $num += 1; ?>
                </div>
                <div class="fL">、</div>
                <div class="subject_area">
                    8a
                </div>
            </div>
            <div class="fC"></div>
            <div class="med_area">
                <div class="subject_area">
                    <div class="fL">Section　7b　G8</div>
                </div>
                <div class="fL">、</div>
                <div class="subject_area">
                    <select name="select11" style="height:25px;">
<?php
    for($i = 1; $i <= 10; $i++){
                        echo<<<EOT
                        <option value="{$i}" {$select_value[$num][$i]}>{$i}</option>

EOT;
    }
?>
                    </select>
                    times each　
                    <input type="checkbox" name="s<?php echo $num; ?>" value="1" <?php echo $s_value[$num]; ?> >S&nbsp;<input type="checkbox" name="vs<?php echo $num; ?>" value="1" <?php echo $vs_value[$num]; ?> >VS&nbsp;
<?php $num += 1; ?>
                </div>
                <div class="fL">、</div>
                <div class="subject_area">
                    7b
                </div>
            </div>
            <div class="fC"></div>
            <div class="med_area">
                <div class="subject_area">
                    <div class="fL">Section　7a　G9</div>
                </div>
                <div class="fL">、</div>
                <div class="subject_area">
                    <select name="select12" style="height:25px;">
<?php
    for($i = 1; $i <= 10; $i++){
                        echo<<<EOT
                        <option value="{$i}" {$select_value[$num][$i]}>{$i}</option>

EOT;
    }
?>
                    </select>
                    times each　
                    <input type="checkbox" name="s<?php echo $num; ?>" value="1" <?php echo $s_value[$num]; ?> >S&nbsp;<input type="checkbox" name="vs<?php echo $num; ?>" value="1" <?php echo $vs_value[$num]; ?> >VS&nbsp;
<?php $num += 1; ?>
                </div>
                <div class="fL">、</div>
                <div class="subject_area">
                    7a
                </div>
            </div>
            <div class="fC"></div>
            <div class="med_area">
                <div class="subject_area">
                    <div class="fL">Section　8c　G1-9</div>
                </div>
                <div class="fL">、</div>
                <div class="subject_area">
                    <select name="select13" style="height:25px;">
<?php
    for($i = 1; $i <= 10; $i++){
                        echo<<<EOT
                        <option value="{$i}" {$select_value[$num][$i]}>{$i}</option>

EOT;
    }
?>
                    </select>
                    times each　
                    <input type="checkbox" name="s<?php echo $num; ?>" value="1" <?php echo $s_value[$num]; ?> >S&nbsp;<input type="checkbox" name="vs<?php echo $num; ?>" value="1" <?php echo $vs_value[$num]; ?> >VS&nbsp;
<?php $num += 1; ?>
                </div>
                <div class="fL">、</div>
                <div class="subject_area">
                    8c
                </div>
            </div>
            <div class="fC"></div>
            <div class="med_area">
                <div class="subject_area">
                    <div class="fL">Section　8c　HFJASC　</div>

                    <select name="select14" style="height:25px;">
<?php
    for($i = 1; $i <= 10; $i++){
                        echo<<<EOT
                        <option value="{$i}" {$select_value[$num][$i]}>{$i}</option>

EOT;
    }
?>
                    </select>
                    times each　
                    <input type="checkbox" name="s<?php echo $num; ?>" value="1" <?php echo $s_value[$num]; ?> >S&nbsp;<input type="checkbox" name="vs<?php echo $num; ?>" value="1" <?php echo $vs_value[$num]; ?> >VS&nbsp;
                </div>
            </div>
        </form>
    </div>
    <div style="margin:auto; text-align:center; margin-top:20px;">
        <input type="button" value="確認" onclick="javascript:document.form1.submit();" />
    </div>
</div>
</body>
</html>