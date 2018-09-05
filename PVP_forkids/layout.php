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
        フォーキッズ推薦書
    </p>
    <div id="main_box">
        <div class="name_area subject mt20">
            <div class="half_block border_under">氏名&nbsp;<?php echo $name; ?>&nbsp;様</div>
            <div class="border_under">
                推薦有効期限
                <?php echo $year; ?>年
                <?php echo $month; ?>月
                <?php echo $day; ?>日まで
            </div>
        </div>
        
        <div class="med_area">
            <div class="subject">
                &#x2610;診察結果＆処方
            </div>
            <div class="sub_area"><?php echo $diagnosis; ?></div>
        
            <div class="subject">
                &#x2610;推薦セット
            </div>
            <div class="sub_area">
<?php
    $num = 1;
    $margin = "";
    for($i = 1; $i <= 5; $i++){
        echo <<< EOT
                <div class="{$margin}">
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
        $margin = "mt20";
    }
?>
            </div>
            <div class="caution_area sub_area">
                <p class="caution_title">【注意事項】</p>
                <p>本 PVP の対象年齢は 4 歳から 15 歳までです。また、以下の状態の時には推薦有効期限内で<br>あっても施術を受けることが出来ません。<br>ご注意ください。</p>
                <p>１）発熱している時や、その他非常に疲れている時</p>
                <p>２）月経 3 日以内。</p>
                <p>３）心臓病がある、または心臓ペースメーカーを装着している。</p>
                <p>４）手術後の抜糸が済んでいない。</p>
                <p>５）精神神経科または心療内科にかかり薬物療法を受けている。</p>
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
        <input type="hidden" name="diagnosis" value="<?php echo $diagnosis; ?>" />
<?php
    for($i = 1; $i <= 5; $i++){
        echo <<< EOT
        <input type="hidden" name="set{$i}" value="{$set[$i]}" />
        <input type="hidden" name="count{$i}" value="{$count[$i]}" />

EOT;
    }
?>
    </form>
</div>
</body>
</html>
