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
    <p id="top_title" style="border: none; font-weight: bold;">
        コトハ・アウェイクニング診察 
    </p>
    <div id="main_box">
        <form name="form1" method="post" action="layout.php">
            <div class="name_area subject mt20">
                <div class="href_block border_under fR">氏名&nbsp;<input type="text" size="20" name="name" value="<?php echo $name; ?>" />&nbsp;様</div>
                <div class="fC"></div>
            </div>
            
            <div class="med_area">
                <div class="subject">
                    &#x2610;コトハ・アウェイクニングステージ
                </div>
                <div class="sub_area text mt15">
                    コトハの響きには５つの階層があり、その全てを順に体験していく１２の段階があります。段階が進むことで生命は進化し、最終的に生命としての完成（成就）を迎えます。
                </div>
                <div style="font-weight: bold;" class="sub_area">
                    現在のあなたは、
                    <span class="border_under">
                        <select name="stage">
<?php
    for($i = 1; $i <= 12; $i++){
        echo <<< EOT
                            <option value="{$i}" {$stage_value[$i]}>{$i}</option>

EOT;
    }
?>
                        </select>
                    </span>
                    段階です。
                </div>
                <div class="subject mt15">
                    &#x2610;コトハ・アウェイクニングテクニック
                </div>
                <div class="sub_area text mt15">
                    <div>
                        現在、あなたが習得したコトハ・アウェイクニングテクニックは
                    </div>
                    <div>
                        全３０段階中、
                        <span class="border_under">
                            第
                            <select name="tec_stage1">
<?php
    for($i = 1; $i <= 30; $i++){
        echo <<< EOT
                                <option value="{$i}" {$tec_stage1_value[$i]}>{$i}</option>

EOT;
    }
?>
                            </select>
                            段階
                        </span>
                        であり、
                    </div>
                    <div>
                        今回新しく、
                        <span class="border_under">
                            第
                            <select name="tec_stage2_1">
<?php
    for($i = 1; $i <= 30; $i++){
        echo <<< EOT
                                <option value="{$i}" {$tec_stage2_1_value[$i]}>{$i}</option>

EOT;
    }
?>
                            </select>
                            <select name="tec_stage2_2">
                                <option value="0"></option>
<?php
    for($i = 1; $i <= 30; $i++){
        echo <<< EOT
                                <option value="{$i}" {$tec_stage2_2_value[$i]}>{$i}</option>

EOT;
    }
?>
                            </select>
                            <select name="tec_stage2_3">
                                <option value="0"></option>
<?php
    for($i = 1; $i <= 30; $i++){
        echo <<< EOT
                                <option value="{$i}" {$tec_stage2_3_value[$i]}>{$i}</option>

EOT;
    }
?>
                            </select>
                            段階
                        </span>
                        を学びます。
                    </div>
                </div>
                <div class="subject mt15">
                    &#x2610;ステージを確実に進めるために
                </div>
                <div class="sub_area text mt15">
                    <div>
                        以下の７つのブロックに沿って日常生活を送ります。
                    </div>
                    <div>
                        あなたは、特に
                        <span class="border_under">
                            <select name="next_stage">
<?php
    for($i = 1; $i <= 7; $i++){
        echo <<< EOT
                                <option value="{$i}" {$next_stage_value[$i]}>{$i}</option>

EOT;
    }
?>
                            </select>
                        </span>
                        をしっかりと行って下さい。
                    </div>
                    <div>
                        1. 規則的でシンプルな朝の日課
                    </div>
                    <div>
                        2. 毎日の規則的なテクニックの実習
                    </div>
                    <div>
                        3. コトハを含む純粋な知識の学習と探求
                    </div>
                    <div>
                        4. 自身の純粋な思いを叶えるダルマの遂行
                    </div>
                    <div>
                        5. 夜、リラックスした就寝までの過ごし方
                    </div>
                    <div>
                        6. 純粋性の高い食事の摂取
                    </div>
                    <div>
                        7. PVPを定期的に受ける
                    </div>
                </div>
                <div class="subject mt15">
                    &#x2610;次回の診察
                </div>
                <div class="sub_area text mt15">
                    <div>
                        &#x2610;次回は
                        <span class="border_under">
                            <select name="check_month">
                                <option value="1" <?php echo $check_month_value[1]; ?>>1</option>
                                <option value="2" <?php echo $check_month_value[2]; ?>>2</option>
                                <option value="3" <?php echo $check_month_value[3]; ?>>3</option>
                            </select>
                            ヶ月後
                        </span>
                        にコトハ・アウェイクニングチェックを受けて、ステージを確認してください。
                    </div>
                    <div>
                        &#x2610;次回は
                        <span class="border_under">
                            <select name="med_month">
                                <option value="1" <?php echo $med_month_value[1]; ?>>1</option>
                                <option value="2" <?php echo $med_month_value[2]; ?>>2</option>
                                <option value="3" <?php echo $med_month_value[3]; ?>>3</option>
                            </select>
                            ヶ月後
                        </span>
                        にコトハ・アウェイクニング診察を受けて、次のテクニックを習ってください。
                    </div>
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
