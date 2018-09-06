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

    <script type="text/javascript" src="../js/brain.js"></script>
</head>
<body>
<div id="contents">
    <p id="top_title" style="border: none;">
        脳の体質と機能状態のチェック
    </p>
    <div id="main_box">
        <form name="form1" method="post" action="layout.php">
            <div class="name_area subject mt20">
                <div class="half_block border_under fR">名前&nbsp;<input type="text" size="20" name="name" value="<?php echo $name; ?>" /></div>
                <div class="fC"></div>
                <div class="border_under fR">
                    生年月日
                    <input type="text" size="4" name="year" value="<?php echo $year; ?>">年
                    <input type="text" size="2" name="month" value="<?php echo $month; ?>">月
                    <input type="text" size="2" name="day" value="<?php echo $day; ?>">日
                </div>
                <div class="fC"></div>
            </div>
            
            <div class="med_area">
                <div class="subject">
                    1. 脳の体質（強さと優位性）と機能状態（活性度）
                </div>
                
                <div class="half_block fL" id="brain">
                    <img onclick="brain('zentouyou'); return false;" src="../img/zentouyou.png" id="zentouyou" width="147" height="161" />
                    <img onclick="brain('toutyouyou'); return false;" src="../img/toutyouyou.png" id="toutyouyou" width="140" height="120" />
                    <img onclick="brain('koutouyou'); return false;" src="../img/koutouyou.png" id="koutouyou" width="65" height="94" />
                    <img onclick="brain('sokutouyou'); return false;" src="../img/sokutouyou.png" id="sokutouyou" width="143" height="116" />
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
                                <select name="strength0">
<?php
    for($i = 0; $i < 4; $i++){
        echo <<< EOT
                                    <option value="{$i}" {$strength0_value[$i]}>{$i}</option>

EOT;
    }
?>
                                </select>
                            </td>
                            <td><input type="radio" name="superiority" value="0" <?php echo $superiority_value[0]; ?>></td>
                        </tr>
                        <tr class="border_under">
                            <td>後頭葉</td>
                            <td>
                                <select name="strength1">
<?php
    for($i = 0; $i < 4; $i++){
        echo <<< EOT
                                    <option value="{$i}" {$strength1_value[$i]}>{$i}</option>

EOT;
    }
?>
                                </select>
                            </td>
                            <td><input type="radio" name="superiority" value="1" <?php echo $superiority_value[1]; ?>></td>
                        </tr>
                        <tr class="border_under">
                            <td>前頭葉</td>
                            <td>
                                <select name="strength2">
<?php
    for($i = 0; $i < 4; $i++){
        echo <<< EOT
                                    <option value="{$i}" {$strength2_value[$i]}>{$i}</option>

EOT;
    }
?>
                                </select>
                            </td>
                            <td><input type="radio" name="superiority" value="2" <?php echo $superiority_value[2]; ?>></td>
                        </tr>
                        <tr class="border_under">
                            <td>頭頂葉</td>
                            <td>
                                <select name="strength3">
<?php
    for($i = 0; $i < 4; $i++){
        echo <<< EOT
                                    <option value="{$i}" {$strength3_value[$i]}>{$i}</option>

EOT;
    }
?>
                                </select>
                            </td>
                            <td><input type="radio" name="superiority" value="3" <?php echo $superiority_value[3]; ?>></td>
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
<?php
    for($i = 0; $i < count($arr_que1); $i++){
        echo <<< EOT
                    <div>
                        <input type="checkbox" name="que_1_{$i}" value="1" {$que1_value[$i]}>{$arr_que1[$i]}
                    </div>

EOT;
    }
?>
                </div>

                <div class="subject">
                    2）神経系のストレスがかかり、機能が乱れている時
                </div>
                <div class="sub_area text">
<?php
    for($i = 0; $i < count($arr_que2); $i++){
        echo <<< EOT
                    <div>
                        <input type="checkbox" name="que_2_{$i}" value="1" {$que2_value[$i]}>{$arr_que2[$i]}
                    </div>

EOT;
    }
?>
                </div>

                <div class="subject">
                    3）ストレスを受けたときに生じやすい心の障害
                </div>
                <div class="sub_area text">
<?php
    for($i = 0; $i < count($arr_que3); $i++){
        echo <<< EOT
                    <div>
                        <input type="checkbox" name="que_3_{$i}" value="1" {$que3_value[$i]}>{$arr_que3[$i]}
                    </div>

EOT;
    }
?>
                </div>

                <div class="subject">
                    4）上記のことから努力すること、気をつけること
                </div>
                <div class="sub_area text">
<?php
    for($i = 0; $i < count($arr_que4); $i++){
        echo <<< EOT
                    <div>
                        <input type="checkbox" name="que_4_{$i}" value="1" {$que4_value[$i]}>{$arr_que4[$i]}
                    </div>

EOT;
    }
?>
                </div>
            </div>
        </form>
    </div>
    <div class="border_under fR" id="footer_space">
        　　　　年　　月　　日　DR.
    </div>
    <div class="fC"></div>
    <div style="margin:auto; text-align:center; margin-top:20px;">
        <input type="button" value="確認" onclick="javascript:document.form1.submit();" />
    </div>
</div>
</body>
</html>
