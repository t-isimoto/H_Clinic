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
        <div class="name_area">
            <div class="fL">Name　<?php echo $name; ?></div>
            <div style="float:right; margin-right:20px;"><?php echo $date; ?></div>
            <div class="fC"></div>
        </div>
        
        <div class="med_area">
            <div>
                <div>Phase2　Initializing</div>
            </div>
            <div class="section_area">
                <div class="subject_area">
                    <div class="fL">Section&nbsp;
                        <?php echo $section[$num]; ?>
                    </div>
                </div>
                <div class="fL">、</div>
                <div class="subject_area">
                    G
                    <?php echo $g[$num]; ?>
                    &nbsp;&nbsp;
                    <?php echo $teach[$num]; ?>
                    times each　
                    <?php echo $s[$num]; ?>S&nbsp;<?php echo $vs[$num]; ?>VS&nbsp;
<?php $num += 1; ?>
                </div>
            </div>
        </div>
        
        <div class="fC"></div>
        <div class="med_area">
            <div>
                <div>Phase3　Reconstructing</div>
            </div>
            <div class="section_area">
                <div class="subject_area">
                    <div class="fL">Section&nbsp;
                        <?php echo $section[$num]; ?>
                    </div>
                </div>
                <div class="fL">、</div>
                <div class="subject_area">
                    G
                    <?php echo $g[$num]; ?>
                    &nbsp;&nbsp;
                    <?php echo $teach[$num]; ?>
                    times each　
                    <?php echo $s[$num]; ?>S&nbsp;<?php echo $vs[$num]; ?>VS&nbsp;
<?php $num += 1; ?>
                </div>
            </div>
        </div>
        
        <div class="fC"></div>
        <div class="med_area">
            <div>
                <div class="fL">Phase4　Activating</div>
                <div class="fL">
                    Stage　
                    <?php echo $c1; ?>1　
                    <?php echo $c2; ?>2　
                    <?php echo $c3; ?>3
                </div>
            </div>
<?php
for($num; $num <= 10; $num++){
    echo <<< EOT
            <div class="fC"></div>
            <div class="section_area">
                <div class="subject_area">
                    <div class="fL">Section&nbsp;
                        {$section[$num]}
                    </div>
                </div>
                <div class="fL">、</div>
                <div class="subject_area">
                    G
                    {$g[$num]}
                    &nbsp;&nbsp;
                    {$teach[$num]}
                    times each　
                    {$s[$num]}S&nbsp;{$vs[$num]}VS&nbsp;
                </div>
            </div>

EOT;
}
?>
        </div>
    </div>
    
    <div style="margin:auto; text-align:center; margin-top:20px;" class="no_print">
        <input type="button" value="戻る" onclick="javascript:document.form1.submit();" />
        <input type="button" value="印刷" onclick="window.print();" />
    </div>
    
    <form method="post" action="input.php" name="form1">
        <input type="hidden" name="name" value="<?php echo $name; ?>" />
        <input type="hidden" name="c1" value="<?php echo $c1_value; ?>" />
        <input type="hidden" name="c2" value="<?php echo $c2_value; ?>" />
        <input type="hidden" name="c3" value="<?php echo $c3_value; ?>" />
<?php
    for($i = 1; $i <= 10; $i++){
        echo<<<EOT
        <input type="hidden" name="section{$i}" value="{$section[$i]}" />
        <input type="hidden" name="g{$i}" value="{$g[$i]}" />
        <input type="hidden" name="teach{$i}" value="{$teach[$i]}" />
        <input type="hidden" name="s{$i}" value="{$s_value[$i]}" />
        <input type="hidden" name="vs{$i}" value="{$vs_value[$i]}" />

EOT;
    }
?>
    </form>
</div>
</body>
</html>