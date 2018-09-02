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
    <script type="text/javascript" src="../js/circle.js"></script>
</head>
<body>
<div id="contents" style="font-size:20px;">
    <p id="top_title" style="border: none;">
        Primordial Vibration Program
    </p>
    <div id="sub_title">
        <div id="sub_title_L">
            Prescription Sheet
        </div>
        <div id="sub_title_R">
            data
        </div>
    </div>
    <div id="main_box" class="fC" style="border: none;">
        <div class="name_area subject">
            <div class="fR border_under">Name　<?php echo $name; ?>　<?php echo $date; ?></div>
            <div class="fC"></div>  
        </div>
        
        <div class="med_area">
            <div class="contents_box">
                <div class="subject">
                    1.Subject
                </div>
                <?php echo $subject; ?>
            </div>
            
            <div class="contents_box">
                <div class="subject">
                    2.Kotoha Reading
                </div>
                <div class="item">
                    第1層&nbsp;<?php echo $kotoha1;?>
                </div>
                <div class="item">
                    第2層&nbsp;<?php echo $kotoha2;?>
                </div>
                <div class="item">
                    第3層&nbsp;<?php echo $kotoha3;?>
                </div>
                <div class="item">
                    第4層&nbsp;<?php echo $kotoha4;?>
                </div>
                <div class="item">
                    第5層&nbsp;<?php echo $kotoha5;?>
                </div>

                <div class="item">
                    <div>
                        Stage　<?php echo $stage; ?>
                    </div>
                    
                    <div>
                        <div class="w180_block">
                            Ojas　<?php echo $arr_plus[$ojas-1]; ?>
                        </div>
                        <div class="w180_block">
                            Vikriti　<?php echo $arr_vi[$vikriti-1]; ?>
                        </div>
                        <div class="w180_block">
                            Ama　<?php echo $arr_plus[$ama-1]; ?>
                        </div>
                    </div>
                    
                    <div>
                        <div class="href_block">
                            Sub　<?php echo $arr_sub[$sub-1]; ?>
                        </div>
                        <div class="href_block">
                            Dhatus　<?php echo $arr_dhatus[$dhatus -1]; ?>
                        </div>
                    </div>
                    <div>
                        <div class="w100_block">
                            Lobe
                        </div>
                        <?php echo $c_te; ?>Te&nbsp;
                        (&nbsp;<?php echo $te; ?>&nbsp;)&nbsp;
                        
                        <?php echo $c_oc; ?>Oc&nbsp;
                        (&nbsp;<?php echo $oc; ?>&nbsp;)&nbsp;
                        
                        <?php echo $c_fr; ?>Fr&nbsp;
                        (&nbsp;<?php echo $fr; ?>&nbsp;)&nbsp;
                        
                        <?php echo $c_pa; ?>Pa&nbsp;
                        (&nbsp;<?php echo $pa; ?>&nbsp;)&nbsp;
                    </div>
                    
                    <div>
                        <div class="w100_block">
                            Connection
                        </div>
                        <?php echo $con1; ?>4-1　
                        <?php echo $con2; ?>4-2　
                        <?php echo $con3; ?>1-2　
                        <?php echo $con4; ?>2-3　
                    </div>
                    <div>
                        <table>
                            <tr>
                                <th>Samadhi</th>
                                <td id="Sa1"   class="<?php echo $Sa_class[1]; ?>" >1</td>
                                <td id="Sa2"   class="<?php echo $Sa_class[2]; ?>" >2</td>
                                <td id="Sa3"   class="<?php echo $Sa_class[3]; ?>" >3</td>
                                <td id="Sa4"   class="<?php echo $Sa_class[4]; ?>" >4</td>
                                <td id="Sa5"   class="<?php echo $Sa_class[5]; ?>" >5</td>
                                <td id="Sa6"   class="<?php echo $Sa_class[6]; ?>" >6</td>
                                <td id="Sa7"   class="<?php echo $Sa_class[7]; ?>" >7</td>
                                <td id="Sa8"   class="<?php echo $Sa_class[8]; ?>" >8</td>
                                <td id="Sa9"   class="<?php echo $Sa_class[9]; ?>" >9</td>
                                <td id="Sa10"  class="<?php echo $Sa_class[10]; ?>">10</td>
                                <td id="Sa_Te" class="<?php echo $Sa_class[11]; ?>">Te</td>
                                <td id="Sa_Oc" class="<?php echo $Sa_class[12]; ?>">Oc</td>
                                <td id="Sa_Fr" class="<?php echo $Sa_class[13]; ?>">Fr</td>
                                <td id="Sa_Pa" class="<?php echo $Sa_class[14]; ?>">Pa</td>
                            </tr>
                            <tr>
                                <th>Cortex</th>
                                <td id="Co1"   class="<?php echo $Co_class[1]; ?>" >1</td>
                                <td id="Co2"   class="<?php echo $Co_class[2]; ?>" >1</td>
                                <td id="Co3"   class="<?php echo $Co_class[3]; ?>" >6</td>
                                <td id="Co4"   class="<?php echo $Co_class[4]; ?>" >6</td>
                                <td id="Co5"   class="<?php echo $Co_class[5]; ?>" >2</td>
                                <td id="Co6"   class="<?php echo $Co_class[6]; ?>" >4</td>
                                <td id="Co7"   class="<?php echo $Co_class[7]; ?>" >4</td>
                                <td id="Co8"   class="<?php echo $Co_class[8]; ?>" >5</td>
                                <td id="Co9"   class="<?php echo $Co_class[9]; ?>" >3</td>
                                <td id="Co10"  class="<?php echo $Co_class[10]; ?>">4</td>
                                <td id="Co_Te" class="<?php echo $Co_class[11]; ?>">Te</td>
                                <td id="Co_Oc" class="<?php echo $Co_class[12]; ?>">Oc</td>
                                <td id="Co_Fr" class="<?php echo $Co_class[13]; ?>">Fr</td>
                                <td id="Co_Pa" class="<?php echo $Co_class[14]; ?>">Pa</td>
                            </tr>
                            <tr>
                                <th>Mandala</th>
                                <td id="Ma1"   class="<?php echo $Ma_class[1]; ?>" >10</td>
                                <td id="Ma2"   class="<?php echo $Ma_class[2]; ?>" >1</td>
                                <td id="Ma3"   class="<?php echo $Ma_class[3]; ?>" >2</td>
                                <td id="Ma4"   class="<?php echo $Ma_class[4]; ?>" >3</td>
                                <td id="Ma5"   class="<?php echo $Ma_class[5]; ?>" >4</td>
                                <td id="Ma6"   class="<?php echo $Ma_class[6]; ?>" >5</td>
                                <td id="Ma7"   class="<?php echo $Ma_class[7]; ?>" >6</td>
                                <td id="Ma8"   class="<?php echo $Ma_class[8]; ?>" >7</td>
                                <td id="Ma9"   class="<?php echo $Ma_class[9]; ?>" >8</td>
                                <td id="Ma10"  class="<?php echo $Ma_class[10]; ?>">9</td>
                                <td id="Ma_Te" class="<?php echo $Ma_class[11]; ?>">Te</td>
                                <td id="Ma_Oc" class="<?php echo $Ma_class[12]; ?>">Oc</td>
                                <td id="Ma_Fr" class="<?php echo $Ma_class[13]; ?>">Fr</td>
                                <td id="Ma_Pa" class="<?php echo $Ma_class[14]; ?>">Pa</td>
                            </tr>
                            <tr>
                                <th>Step</th>
                                <td></td>
                                <td id="St1"   class="<?php echo $St_class[1]; ?>" >1</td>
                                <td id="St2"   class="<?php echo $St_class[2]; ?>" >2</td>
                                <td id="St3"   class="<?php echo $St_class[3]; ?>" >3</td>
                                <td id="St4"   class="<?php echo $St_class[4]; ?>" >4</td>
                                <td id="St5"   class="<?php echo $St_class[5]; ?>" >5</td>
                                <td id="St6"   class="<?php echo $St_class[6]; ?>" >6</td>
                                <td id="St7"   class="<?php echo $St_class[7]; ?>" >7</td>
                                <td id="St8"   class="<?php echo $St_class[8]; ?>" >8</td>
                                <td id="St9"   class="<?php echo $St_class[9]; ?>" >9</td>
                                <td id="St_Te" class="<?php echo $St_class[10]; ?>">Te</td>
                                <td id="St_Oc" class="<?php echo $St_class[11]; ?>">Oc</td>
                                <td id="St_Fr" class="<?php echo $St_class[12]; ?>">Fr</td>
                                <td id="St_Pa" class="<?php echo $St_class[13]; ?>">Pa</td>
                            </tr>
                            <tr>
                                <th>Gyana</th>
                                <td id="Gy1"   class="<?php echo $Gy_class[1]; ?>" >1</td>
                                <td id="Gy2"   class="<?php echo $Gy_class[2]; ?>" >1</td>
                                <td id="Gy3"   class="<?php echo $Gy_class[3]; ?>" >2</td>
                                <td id="Gy4"   class="<?php echo $Gy_class[4]; ?>" >3</td>
                                <td id="Gy5"   class="<?php echo $Gy_class[5]; ?>" >4</td>
                                <td id="Gy6"   class="<?php echo $Gy_class[6]; ?>" >5</td>
                                <td id="Gy7"   class="<?php echo $Gy_class[7]; ?>" >6</td>
                                <td id="Gy8"   class="<?php echo $Gy_class[8]; ?>" >7</td>
                                <td id="Gy9"   class="<?php echo $Gy_class[9]; ?>" >8</td>
                                <td id="Gy10"  class="<?php echo $Gy_class[10]; ?>">9</td>
                                <td id="Gy_Te" class="<?php echo $Gy_class[11]; ?>">Te</td>
                                <td id="Gy_Oc" class="<?php echo $Gy_class[12]; ?>">Oc</td>
                                <td id="Gy_Fr" class="<?php echo $Gy_class[13]; ?>">Fr</td>
                                <td id="Gy_Pa" class="<?php echo $Gy_class[14]; ?>">Pa</td>
                            </tr>
                            <tr>
                                <th>Klesha</th>
                                <td></td>
                                <td id="Kl1"   class="<?php echo $Kl_class[1]; ?>" >1</td>
                                <td id="Kl2"   class="<?php echo $Kl_class[2]; ?>" >2</td>
                                <td id="Kl3"   class="<?php echo $Kl_class[3]; ?>" >3</td>
                                <td id="Kl4"   class="<?php echo $Kl_class[4]; ?>" >4</td>
                                <td id="Kl5"   class="<?php echo $Kl_class[5]; ?>" >5</td>
                                <td id="Kl6"   class="<?php echo $Kl_class[6]; ?>" >6</td>
                                <td id="Kl7"   class="<?php echo $Kl_class[7]; ?>" >7</td>
                                <td id="Kl8"   class="<?php echo $Kl_class[8]; ?>" >8</td>
                                <td id="Kl9"   class="<?php echo $Kl_class[9]; ?>" >9</td>
                                <td id="Kl_Te" class="<?php echo $Kl_class[10]; ?>">Te</td>
                                <td id="Kl_Oc" class="<?php echo $Kl_class[11]; ?>">Oc</td>
                                <td id="Kl_Fr" class="<?php echo $Kl_class[12]; ?>">Fr</td>
                                <td id="Kl_Pa" class="<?php echo $Kl_class[13]; ?>">Pa</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="contents_box">
                <div class="subject">
                    3.Problem & Purpose
                </div>
                <div>
                    <div class="href_block">#1<?php echo $sharp1; ?></div>
                    <div class="href_block">#4<?php echo $sharp4; ?></div>
                </div>
                <div>
                    <div class="href_block">#2<?php echo $sharp2; ?></div>
                    <div class="href_block">#5<?php echo $sharp5; ?></div>
                </div>
                <div>
                    <div class="href_block">#3<?php echo $sharp3; ?></div>
                    <div class="href_block">#6<?php echo $sharp6; ?></div>
                </div>
            </div>
            <div class="contents_box">
                <div class="subject">
                    4. Prescription
                </div>
<?php
    for($i = 1; $i <= 5; $i+=2){
        $j = $i+1;
        echo <<< EOT
                <div class="href_block">
                    <div class="border_under">
                        G {$g[$i]}
                        Set {$set[$i]},
                        <div class="select_item {$s_class[$i]}" style="width: 20px;" id="s{$i}">S</div>
                        <div class="select_item {$vs_class[$i]}" style="width: 35px;" id="vs{$i}">VS</div>
                        {$time[$i]}times
                    </div>
                </div>
                <div class="href_block mL5">
                    <div class="border_under">
                        G {$g[$j]}
                        Set {$set[$j]},
                        <div class="select_item {$s_class[$j]}" style="width: 20px;" id="s{$j}">S</div>
                        <div class="select_item {$vs_class[$j]}" style="width: 35px;" id="vs{$j}">VS</div>
                        {$time[$j]}times
                    </div>
                </div>

EOT;
    }
    
    for($i = 7; $i <= 13; $i+=2){
        $j = $i+1;
        echo <<< EOT
                <div class="href_block">
                    <div class="border_under">
                        <div class="non_set_area">G {$g[$i]}</div>,
                        <div class="select_item {$s_class[$i]}" style="width: 20px;" id="s{$i}">S</div>
                        <div class="select_item {$vs_class[$i]}" style="width: 35px;" id="vs{$i}">VS</div>
                        {$time[$i]}times
                    </div>
                </div>
                <div class="href_block mL5">
                    <div class="border_under">
                        <div class="non_set_area">G {$g[$j]}</div>,
                        <div class="select_item {$s_class[$j]}" style="width: 20px;" id="s{$j}">S</div>
                        <div class="select_item {$vs_class[$j]}" style="width: 35px;" id="vs{$j}">VS</div>
                        {$time[$j]}times
                    </div>
                </div>

EOT;
    }
?>
            </div>
        </div>
    </div>
    <div class="fC"></div>
    <div style="margin:auto; text-align:center; margin-top:20px;" class="no_print">
        <input type="button" value="戻る" onclick="javascript:document.form1.submit();" />
        <input type="button" value="印刷" onclick="window.print();" />
    </div>
    
    <form method="post" action="input.php" name="form1">
        <input type="hidden" name="name" value="<?php echo $name; ?>" />
        <input type="hidden" name="subject" value="<?php echo $subject; ?>" />
        <input type="hidden" name="kotoha_reading1" value="<?php echo $kotoha1; ?>" />
        <input type="hidden" name="kotoha_reading2" value="<?php echo $kotoha2; ?>" />
        <input type="hidden" name="kotoha_reading3" value="<?php echo $kotoha3; ?>" />
        <input type="hidden" name="kotoha_reading4" value="<?php echo $kotoha4; ?>" />
        <input type="hidden" name="kotoha_reading5" value="<?php echo $kotoha5; ?>" />
        <input type="hidden" name="stage" value="<?php echo $stage; ?>" />
        <input type="hidden" name="ojas" value="<?php echo $ojas; ?>" />
        <input type="hidden" name="vikriti" value="<?php echo $vikriti; ?>" />
        <input type="hidden" name="ama" value="<?php echo $ama; ?>" />
        <input type="hidden" name="sub" value="<?php echo $sub; ?>" />
        <input type="hidden" name="dhatus" value="<?php echo $dhatus; ?>" />
        <input type="hidden" name="c_te" value="<?php echo $c_te_value; ?>" />
        <input type="hidden" name="te" value="<?php echo $te; ?>" />
        <input type="hidden" name="c_oc" value="<?php echo $c_oc_value; ?>" />
        <input type="hidden" name="oc" value="<?php echo $oc; ?>" />
        <input type="hidden" name="c_fr" value="<?php echo $c_fr_value; ?>" />
        <input type="hidden" name="fr" value="<?php echo $fr; ?>" />
        <input type="hidden" name="c_pa" value="<?php echo $c_pa_value; ?>" />
        <input type="hidden" name="pa" value="<?php echo $pa; ?>" />
        <input type="hidden" name="con1" value="<?php echo $con1_value; ?>" />
        <input type="hidden" name="con2" value="<?php echo $con2_value; ?>" />
        <input type="hidden" name="con3" value="<?php echo $con3_value; ?>" />
        <input type="hidden" name="con4" value="<?php echo $con4_value; ?>" />
        <input type="hidden" name="sharp1" value="<?php echo $sharp1; ?>" />
        <input type="hidden" name="sharp2" value="<?php echo $sharp2; ?>" />
        <input type="hidden" name="sharp3" value="<?php echo $sharp3; ?>" />
        <input type="hidden" name="sharp4" value="<?php echo $sharp4; ?>" />
        <input type="hidden" name="sharp5" value="<?php echo $sharp5; ?>" />
        <input type="hidden" name="sharp6" value="<?php echo $sharp6; ?>" />
<?php
    for($i = 1; $i <= 10; $i++){
        echo <<< EOT
        <input type="hidden" name="h_Sa{$i}" id="h_Sa{$i}" value="{$Sa[$i]}">
        <input type="hidden" name="h_Co{$i}" id="h_Co{$i}" value="{$Co[$i]}">
        <input type="hidden" name="h_Ma{$i}" id="h_Ma{$i}" value="{$Ma[$i]}">
        <input type="hidden" name="h_Gy{$i}" id="h_Gy{$i}" value="{$Gy[$i]}">

EOT;
        
        if($i < 10){
            echo <<< EOT
        <input type="hidden" name="h_St{$i}" id="h_St{$i}" value="{$St[$i]}">
        <input type="hidden" name="h_Kl{$i}" id="h_Kl{$i}" value="{$Kl[$i]}">

EOT;
        }
    }
    for($i = 0; $i < count($arr_str); $i++){
        $j = $i + 10;
        $k = $i + 9;
        echo <<< EOT
        <input type="hidden" name="h_Sa_{$arr_str[$i]}" id="h_Sa_{$arr_str[$i]}" value="{$Sa[$j]}">
        <input type="hidden" name="h_Co_{$arr_str[$i]}" id="h_Co_{$arr_str[$i]}" value="{$Co[$j]}">
        <input type="hidden" name="h_Ma_{$arr_str[$i]}" id="h_Ma_{$arr_str[$i]}" value="{$Ma[$j]}">
        <input type="hidden" name="h_Gy_{$arr_str[$i]}" id="h_Gy_{$arr_str[$i]}" value="{$Gy[$j]}">
        <input type="hidden" name="h_St_{$arr_str[$i]}" id="h_St_{$arr_str[$i]}" value="{$St[$k]}">
        <input type="hidden" name="h_Kl_{$arr_str[$i]}" id="h_Kl_{$arr_str[$i]}" value="{$Kl[$k]}">

EOT;
    }
    
    for($i = 1; $i <= 14; $i++){
        echo <<< EOT
        <input type="hidden" name="g{$i}" value="{$g[$i]}">
        <input type="hidden" name="h_s{$i}" value="{$s[$i]}">
        <input type="hidden" name="h_vs{$i}" value="{$vs[$i]}">
        <input type="hidden" name="time{$i}" value="{$time[$i]}">

EOT;
        if($i < 7){
            echo <<< EOT
        <input type="hidden" name="set{$i}" value="{$set[$i]}">

EOT;
        }
    }
?>
    </form>
</div>
</body>
</html>
