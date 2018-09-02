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
                氏名
                <span class="namebody"><?php echo $name; ?>
                </span>
                様
        </div>
        
        <div class="med_area">
            <div class="diagnosisArea">
                <h2>
                    &#x2610;診断結果
                </h2>
                <div class="string_area">
                    <?php echo $diagnosis; ?>
                </div>
            </div>
            <div class="PrescriptionArea">
                <h2>
                    &#x2610;処方内容
                </h2>            
                <h3>
                    １．プレセラピー
                </h3>
                <div class="string_area">
                    <?php echo $pretherapy; ?>
                </div>
                
                <h3>
                    ２．メインセラピー（コース、アウェイクニング）
                </h3>
                <div class="sub_area">
                        PVPを、
                    <div class="border_under">
                        <?php echo $week_count; ?>
                        週に
                        <?php echo $count; ?>
                        回
                    </div>
                        のペースで4回受けます。
                </div>
                
                <h3>
                    ３．ポストセラピー
                </h3>
                <div class="sub_area">
                        コンフォーマーを日に
                    <div class="border_under">
                        <?php echo $conformer; ?>
                        回、
                    </div>
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
                    <div>に、
                        <div class="border_under">
                            <?php echo $ml; ?>
                            ml
                        </div>
                        ずつ飲みます。
                    </div>
                </div>
                
                <h3>
                    ４．再診の時期
                </h3>
                <div class="sub_area">
                    次回の診察は、およそ
                    <div class="border_under">
                        <?php echo $retry; ?>
                        ヶ月後
                    </div>
                    です。
                </div>
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

</body>
</html>