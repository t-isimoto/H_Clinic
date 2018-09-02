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
        コトハ・アウェイクニングステージチェック
    </p>
    </p>
    <div id="main_box">
        <form name="form1" method="post" action="layout.php">
            <div class="name_area subject mt20">
                <div class="href_block border_under">氏名&nbsp;<input type="text" size="20" name="name" value="<?php echo $name; ?>" />&nbsp;様</div>
            </div>
            
            <div class="med_area">
                <div class="subject">
                    &#x2610;コトハ・アウェイクニングステージチェック
                </div>
                <div class="sub_area">
                    コトハの響きには5つの階層があり、そのすべてを順に体験していく12の段階があります。段階が進むことで生命は進化し、最終的に生命としての完成（成就）を迎えます。
                </div>
                <div class="subject sub_area">
                    現在のあなたは、
                    <div class="border_under ini_b">
                        <select name="stage">
<?php
    for($i = 1; $i <= 12; $i++){
        echo <<< EOT
                        
                            <option value="{$i}">{$i}</option>

EOT;
    }
?>
                        </select>
                    </div>
                    段階です。
                </div>
                <div class="sub_area">
                    <select name="stage_select">
<?php
    for($i = 0; $i < 12; $i++){
        echo <<< EOT
                        <option value="{$i}">{$arr_stage[$i]}</option>

EOT;
    }
?>
                    </select>
                </div>
                <div class="subject">
                    &#x2610;ステージを上げるために
                </div>
                <div class="sub_area">
                    <div>
                        1.PVPの推薦
                    </div>
                    <div>
                        <input type="radio" name="pvp_rec" value="1">コース
                    </div>
                    <div>
                        <input type="radio" name="pvp_rec" value="2">アウェイクニング
                    </div>
                    <div>
                        <input type="radio" name="pvp_rec" value="3">シングルセット
                        <select name="single_set">
                            <option value="0"></option>
<?php
    for($i = 1; $i <= 5; $i++){
        echo <<< EOT
                            <option value="{$i}">{$i}</option>

EOT;
    }
?>
                        </select>
                    </div>
                    <textarea name="free_area" rows="3" cols="90"></textarea>
                    
                    <div>
                        2.コトハ・アウェイクニング診察の推薦
                    </div>
                    <div>
                        <div>
                            現在のあなたのコトハ・アウェイクニングテクニックは
                        </div>
                        <div>
                            <span class="border_under">
                                第
                                <select name="tec_stage">
                                    <option value="1">1</option>
                                </select>
                                段階
                            </span>
                            です。
                        </div>
                        <div>
                            <input type="radio" name="kotoha_tec" value="1">コトハ・アウェイクニング診察で次のテクニックを学びます。
                        </div>
                        <div>
                            <input type="radio" name="kotoha_tec" value="2">現在のテクニックを
                            <span class="border_under">
                                <select name="tec_month">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                                ヵ月続け
                            </span>
                            、その後に本チェックを受けてステージを確認してください。
                        </div>
                    </div>
                </div>
                <div class="subject">
                    &#x2610;日常生活で気を付けること
                </div>
                <div class="sub_area">
                    
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
