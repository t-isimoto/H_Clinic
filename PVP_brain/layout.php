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
    <p id="top_title" style="border: none;">
        脳の体質と機能状態のチェック
    </p>
    <div id="main_box">
        <div class="name_area subject mt20">
            <div class="half_block border_under fR">名前&nbsp;<?php echo $name; ?></div>
            <div class="fC"></div>
            <div class="border_under fR">
                生年月日
                <?php echo $year; ?>年
                <?php echo $month; ?>月
                <?php echo $day; ?>日
            </div>
            <div class="fC"></div>
        </div>
        
        <div class="med_area">
            <div class="subject">
                1. 脳の体質（強さと優位性）と機能状態（活性度）
            </div>
            
            <div class="half_block fL">
                <img src="../img/brain.png" width="350" height="235" />
            </div>
            <div class="half_block fR">
                <div class="subject">
                    各領域の強さと活性度
                </div>
                <table>
                    <tr>
                        <td></td>
                        <td>強さ</td>
                        <td>優位性</td>
                    </tr>
                    <tr class="border_under">
                        <td>側頭葉</td>
                        <td>
                            <?php echo $strength0; ?>
                        </td>
                        <td><?php echo $superiority_string[0]; ?></td>
                    </tr>
                    <tr class="border_under">
                        <td>後頭葉</td>
                        <td>
                            <?php echo $strength1; ?>
                        </td>
                        <td><?php echo $superiority_string[1]; ?></td>
                    </tr>
                    <tr class="border_under">
                        <td>前頭葉</td>
                        <td>
                            <?php echo $strength2; ?>
                        </td>
                        <td><?php echo $superiority_string[2]; ?></td>
                    </tr>
                    <tr class="border_under">
                        <td>頭頂葉</td>
                        <td>
                            <?php echo $strength3; ?>
                        </td>
                        <td><?php echo $superiority_string[3]; ?></td>
                    </tr>
                    <tr>
                        <td colspan="3" style="font-size:12px;">
                            ※0弱い 1普通 2強い 3とても強い
                        </td>
                    </tr>
                </table>
            </div>
            
            <div class="subject" style="clear: both;">
                2. 思考や判断の傾向
            </div>
            <div class="subject">
                1）神経系のストレスが少なく機能が統合している時
            </div>
            <div class="sub_area text">
                <?php echo $que1_string; ?>
            </div>

            <div class="subject">
                2）神経系のストレスがかかり、機能が乱れている時
            </div>
            <div class="sub_area text">
                <?php echo $que2_string; ?>
            </div>

            <div class="subject">
                3）ストレスを受けたときに生じやすい心の障害
            </div>
            <div class="sub_area text">
                <?php echo $que3_string; ?>
            </div>

            <div class="subject">
                4）上記のことから努力すること、気をつけること
            </div>
            <div class="sub_area text">
                <?php echo $que4_string; ?>
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
        <input type="hidden" name="year" value="<?php echo $year; ?>" />
        <input type="hidden" name="month" value="<?php echo $month; ?>" />
        <input type="hidden" name="day" value="<?php echo $day; ?>" />
        <input type="hidden" name="strength0" value="<?php echo $strength0; ?>" />
        <input type="hidden" name="strength1" value="<?php echo $strength1; ?>" />
        <input type="hidden" name="strength2" value="<?php echo $strength2; ?>" />
        <input type="hidden" name="strength3" value="<?php echo $strength3; ?>" />
        <input type="hidden" name="superiority" value="<?php echo $superiority; ?>" />
<?php
    for($i = 0; $i < count($arr_que1); $i++){
        echo <<< EOT
        <input type="hidden" name="que_1_{$i}" value="{$que1[$i]}" />

EOT;
    }
    for($i = 0; $i < count($arr_que2); $i++){
        echo <<< EOT
        <input type="hidden" name="que_2_{$i}" value="{$que2[$i]}" />

EOT;
    }
    for($i = 0; $i < count($arr_que3); $i++){
        echo <<< EOT
        <input type="hidden" name="que_3_{$i}" value="{$que3[$i]}" />

EOT;
    }
    for($i = 0; $i < count($arr_que4); $i++){
        echo <<< EOT
        <input type="hidden" name="que_4_{$i}" value="{$que4[$i]}" />

EOT;
    }
?>
    </form>
</div>
</body>
</html>
