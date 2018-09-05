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
        <div class="name_area subject mt20">
            <div class="half_block border_under fR">氏名&nbsp;<?php echo $name; ?>&nbsp;様</div>
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
                    <?php echo $stage; ?>
                </span>
                段階です。
            </div>
            <div class="border_under text sub_area">
                <?php echo $arr_stage[$stage -1]; ?>
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
                        <?php echo $tec_stage1; ?>
                        段階
                    </span>
                    であり、
                </div>
                <div>
                    今回新しく、
                    <span class="border_under">
                        第
                        <?php echo $tec_stage2_1; ?>
                        <?php echo $tec_stage2_2_string; ?>
                        <?php echo $tec_stage2_3_string; ?>
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
                        <?php echo $next_stage; ?>
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
                        <?php echo $check_month; ?>
                        ヶ月後
                    </span>
                    にコトハ・アウェイクニングチェックを受けて、ステージを確認してください。
                </div>
                <div>
                    &#x2610;次回は
                    <span class="border_under">
                        <?php echo $med_month; ?>
                        ヶ月後
                    </span>
                    にコトハ・アウェイクニング診察を受けて、次のテクニックを習ってください。
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
        <input type="hidden" name="stage" value="<?php echo $stage; ?>" />
        <input type="hidden" name="tec_stage1" value="<?php echo $tec_stage1; ?>" />
        <input type="hidden" name="tec_stage2_1" value="<?php echo $tec_stage2_1; ?>" />
        <input type="hidden" name="tec_stage2_2" value="<?php echo $tec_stage2_2; ?>" />
        <input type="hidden" name="tec_stage2_3" value="<?php echo $tec_stage2_3; ?>" />
        <input type="hidden" name="next_stage" value="<?php echo $next_stage; ?>" />
        <input type="hidden" name="check_month" value="<?php echo $check_month; ?>" />
        <input type="hidden" name="med_month" value="<?php echo $med_month; ?>" />
    </form>
</div>
</body>
</html>
