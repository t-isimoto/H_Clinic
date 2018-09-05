<?php
    include_once("inc/form_post.php");
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
        Primordial Vibration Program
    </p>
    <p id="sub_title">
        - Prescription Sheet -
    </p>
    <div id="main_box">
        <div class="name_area subject">
            <div class="fL">氏名　<?php echo $name; ?>　様</div>
            <div class="fC"></div>  
        </div>
        
        <div class="med_area">
            <div class="subject">
                &#x2610;診断結果
            </div>
            <div class="string_area">
                <?php echo $diagnosis; ?>
            </div>
        
            <div class="subject">
                &#x2610;処方内容
            </div>
            <div class="therapy_subject">
                １．プレセラピー
            </div>
            <div class="string_area">
                <?php echo $pretherapy; ?>
            </div>
            
            <div class="therapy_subject">
                ２．メインセラピー（コース、アウェイクニング）
            </div>
            <div class="sub_area">
                <div class="fL">
                    PVPを、
                </div>
                <div class="border_under fL">
                    <?php echo $week_count; ?>
                    週に
                    <?php echo $count; ?>
                    回
                </div>
                <div class="fL">
                    のペースで4回受けます。
                </div>
            </div>
            <div class="fC"></div>
            
            <div class="therapy_subject">
                ３．ポストセラピー
            </div>
            <div class="sub_area">
                <div class="fL">
                    コンフォーマーを日に
                </div>
                <div class="border_under fL">
                    <?php echo $conformer; ?>
                    回、
                </div>
                <div class="fC"></div>
                <div>
                    <?php echo $c[1]; ?>朝食前　
                    <?php echo $c[2]; ?>昼食前　
                    <?php echo $c[3]; ?>夕食前　
                    <?php echo $c[4]; ?>朝食後　
                    <?php echo $c[5]; ?>昼食後　
                </div>
                <div>
                    <?php echo $c[6]; ?>夕食後　
                    <?php echo $c[7]; ?>食間　　
                    <?php echo $c[8]; ?>就寝前　
                </div>
                <div class="fL">に、</div>
                <div class="border_under fL">
                    <?php echo $ml; ?>
                    ml
                </div>
                <div class="fL">
                    ずつ飲みます。
                </div>
            </div>
            
            <div class="therapy_subject fC">
                ４．再診の時期
            </div>
            <div class="sub_area">
                <div class="fL">
                    次回の診察は、およそ
                </div>
                <div class="border_under fL">
                    <?php echo $retry; ?>
                    ヶ月後
                </div>
                です。
            </div>
        </div>
    </div>
    <div class="border_under fR" id="footer_space">
        　　　　年　　月　　日　DR.
    </div>
    <div class="fC"></div>
    
    <div style="margin:auto; text-align:center; margin-top:20px;" class="no_print">
        <input type="button" value="戻る" onclick="javascript:document.form1.submit();" />
        <input type="button" value="印刷" onclick="window.print();" />
    </div>
    
    <form method="post" action="input.php" name="form1">
        <input type="hidden" name="name" value="<?php echo $name; ?>" />
        <input type="hidden" name="diagnosis" value="<?php echo $diagnosis; ?>" />
        <input type="hidden" name="pretherapy" value="<?php echo $pretherapy; ?>" />
        <input type="hidden" name="week_count" value="<?php echo $week_count; ?>" />
        <input type="hidden" name="count" value="<?php echo $count; ?>" />
        <input type="hidden" name="conformer" value="<?php echo $conformer; ?>" />
        <input type="hidden" name="ml" value="<?php echo $ml; ?>" />
        <input type="hidden" name="retry" value="<?php echo $retry; ?>" />
<?php
    for($i = 1; $i <= count($c); $i++){
        echo<<<EOT
        <input type="hidden" name="c{$i}" value="{$c_value[$i]}" />

EOT;
    }
?>
    </form>
</div>
</body>
</html>