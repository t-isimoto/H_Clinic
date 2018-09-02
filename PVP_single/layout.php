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
        <div class="name_area subject mt20">
            <div class="href_block border_under">氏名&nbsp;<?php echo $name; ?>&nbsp;様</div>
            <div class="border_under">
                推薦有効期限
                <?php echo $year; ?>年
                <?php echo $month; ?>月
                <?php echo $day; ?>日まで
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
                    {$set[$i]}
                    を
                    {$count[$i]}
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
                <div><?php echo $c[1] ?>セット1は、神経系のストレスを浄化し、疲労を回復する</div>
                <div><?php echo $c[2] ?>セット2は、心のストレスや緊張を浄化し、幸福感を増やす</div>
                <div><?php echo $c[3] ?>セット3は、消化力を高め、冷えを解消し、免疫力を高める</div>
                <div><?php echo $c[4] ?>セット4は、胃腸の働きを整え、排泄を改善する</div>
                <div><?php echo $c[5] ?>セット5は、婦人科系の働きを整え、快適な月経を迎える</div>
            </div>
            
            <div class="caution_area">
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
<?php
    for($i = 1; $i <= 5; $i++){
        echo <<< EOT
        <input type="hidden" name="set{$i}" value="{$set[$i]}" />
        <input type="hidden" name="count{$i}" value="{$count[$i]}" />
        <input type="hidden" name="c{$i}" value="{$c_value[$i]}" />

EOT;
    }
?>
    </form>
</div>
</body>
</html>
