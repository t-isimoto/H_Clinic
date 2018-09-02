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
        <form name="form1" method="post" action="layout.php">
            <div class="name_area subject">
                氏名
                <span class="namebody">
                    <input type="text" size="30" name="name" value="<?php echo $name; ?>" />　
                    様
                </span>
            </div>
            
            <div class="med_area">
                <div class="diagnosisArea">
                    <h2>
                        &#x2610;診断結果
                    </h2>
                    <textarea name="diagnosis" rows="10" cols="80" class="sub_area"><?php echo $diagnosis; ?></textarea>
                </div>
                <div class="PrescriptionArea">
                    <h2>
                        &#x2610;処方内容
                    </h2>
                    <h3>
                        １．プレセラピー
                    </h3>
                    <textarea name="pretherapy" rows="10" cols="80" class="sub_area"><?php echo $pretherapy; ?></textarea>
                    
                    <h3>
                        ２．メインセラピー（コース、アウェイクニング）
                    </h3>
                    <div class="sub_area">
                            PVPを、
                        <div class="border_under">
                            <select name="week_count">
                                <option value="1" <?php echo $week_count_value[1]; ?>>1</option>
                                <option value="2" <?php echo $week_count_value[2]; ?>>2</option>
                                <option value="3" <?php echo $week_count_value[3]; ?>>3</option>
                                <option value="4" <?php echo $week_count_value[4]; ?>>4</option>
                            </select>
                            週に
                            <select name="count">
                                <option value="1" <?php echo $count_value[1]; ?>>1</option>
                                <option value="2" <?php echo $count_value[2]; ?>>2</option>
                                <option value="3" <?php echo $count_value[3]; ?>>3</option>
                                <option value="4" <?php echo $count_value[4]; ?>>4</option>
                            </select>
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
                            <select name="conformer">
                                <option value="1" <?php echo $conformer_value[1]; ?>>1</option>
                                <option value="2" <?php echo $conformer_value[2]; ?>>2</option>
                                <option value="3" <?php echo $conformer_value[3]; ?>>3</option>
                                <option value="4" <?php echo $conformer_value[4]; ?>>4</option>
                                <option value="5" <?php echo $conformer_value[5]; ?>>5</option>
                            </select>
                            回、
                        </div>
                        <div>
                            <input type="checkbox" name="c1" value="1" <?php echo $c_value[1]; ?> />朝食前　
                            <input type="checkbox" name="c2" value="1" <?php echo $c_value[2]; ?> />昼食前　
                            <input type="checkbox" name="c3" value="1" <?php echo $c_value[3]; ?> />夕食前　
                            <input type="checkbox" name="c4" value="1" <?php echo $c_value[4]; ?> />朝食後　
                            <input type="checkbox" name="c5" value="1" <?php echo $c_value[5]; ?> />昼食後　
                        </div>
                        <div>
                            <input type="checkbox" name="c6" value="1" <?php echo $c_value[6]; ?> />夕食後　
                            <input type="checkbox" name="c7" value="1" <?php echo $c_value[7]; ?> />食間　　
                            <input type="checkbox" name="c8" value="1" <?php echo $c_value[8]; ?> />就寝前　
                        </div>
                        <div>に、
                            <div class="border_under">
                                <select name="ml">
        <?php
            for($i = 0; $i < count($arr_ml); $i++){
                echo <<< EOT
                                    <option value="{$arr_ml[$i]}"  {$ml_value[$i]}>{$arr_ml[$i]}</option>
EOT;
            }
        ?>
                                </select>
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
                            <select name="retry">
                                <option value="1" <?php echo $retry_value[1]; ?>>1</option>
                                <option value="2" <?php echo $retry_value[2]; ?>>2</option>
                                <option value="3" <?php echo $retry_value[3]; ?>>3</option>
                                <option value="4" <?php echo $retry_value[4]; ?>>4</option>
                            </select>
                            ヶ月後
                        </div>
                        です。
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="border_under fR" id="footer_space">
        　　　　年　　月　　日　DR.
    </div>
    <div class="fC"></div>
    <div style="margin:auto; text-align:center; margin-top:20px;">
        <input type="button" value="確認" onclick="javascript:document.form1.submit();" />
    </div>
</body>
</html>
