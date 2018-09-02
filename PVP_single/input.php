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
        Primordial Vibration Program
    </p>
    <p id="sub_title">
        - シングルセット推薦書 -
    </p>
    <div id="main_box">
        <form name="form1" method="post" action="layout.php">
            <div class="name_area subject mt20">
                <div class="href_block border_under">氏名&nbsp;<input type="text" size="20" name="name" value="<?php echo $name; ?>" />&nbsp;様</div>
                <div class="border_under">
                    推薦有効期限
                    <input type="text" size="4" name="year" value="<?php echo $year; ?>">年
                    <input type="text" size="2" name="month" value="<?php echo $month; ?>">月
                    <input type="text" size="2" name="day" value="<?php echo $day; ?>">日まで
                </div>
            </div>
            
            <div class="med_area">
                <div class="subject">
                    &#x2610;推薦結果
                </div>
                <div>
<?php
    $num = 1;
    for($i = 1; $i <= 4; $i++){
        echo <<< EOT
                    <div>
                        第{$i}優先
                        <div class="border_under" style="display:inline-block">
                            セット
                            <select name="set{$i}">

EOT;
        for($j = 1; $j <= 5; $j++){
            echo <<< EOT
                                <option value="{$j}" {$set_value[$i][$j]}>{$j}</option>

EOT;
        }
        echo <<< EOT
                            </select>
                            を
                            <select name="count{$i}">

EOT;
        for($j = 1; $j <= 4; $j++){
            echo <<< EOT
                                <option value="{$j}" {$count_value[$i][$j]}>{$j}</option>

EOT;
        }
        echo <<< EOT
                            </select>
                            回
                        </div>
                    </div>

EOT;
    }
?>
                </div>
                
                <div class="subject">
                    &#x2610;処方内容
                </div>
                <div>
                    <div>以下のセットを計4回まで受けることができます。</div>
                    <div><input type="checkbox" value="1" name="c1" <?php echo $c_value[1]; ?> />セット1は、神経系のストレスを浄化し、疲労を回復する</div>
                    <div><input type="checkbox" value="1" name="c2" <?php echo $c_value[2]; ?> />セット2は、心のストレスや緊張を浄化し、幸福感を増やす</div>
                    <div><input type="checkbox" value="1" name="c3" <?php echo $c_value[3]; ?> />セット3は、消化力を高め、冷えを解消し、免疫力を高める</div>
                    <div><input type="checkbox" value="1" name="c4" <?php echo $c_value[4]; ?> />セット4は、胃腸の働きを整え、排泄を改善する</div>
                    <div><input type="checkbox" value="1" name="c5" <?php echo $c_value[5]; ?> />セット5は、婦人科系の働きを整え、快適な月経を迎える</div>
                </div>
                
                <div class="caution_area    ">
                    <div class="caution_title">「注意事項」</div>
                    <div>以下の状態のときには、推薦有効期限内であっても施術を受けることはできません。ご注意ください。</div>
                    <div>１）妊娠している。または可能性がある。</div>
                    <div>２）月経3日以内で非常に疲れている。</div>
                    <div>３）心臓病がある、または心臓ペースメーカーを装着している。</div>
                    <div>４）手術後の抜糸が済んでいない。</div>
                    <div>５）日常生活を一人で行えず、介助を必要としている。</div>
                    <div>６）精神神経科または心療内科にかかり薬物療法を受けている。</div>
                    <div>７）過去に統合失調症または強迫神経症と診断されたことがある。</div>
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
