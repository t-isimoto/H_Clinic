<?php $file_path = get_included_files(); if (array_shift($file_path) === __FILE__) exit('cannot call directly!'); unset ($file_path); ?>
<?php

    $arr_que1 = array(
        "物事の全体を俯瞰し、時の流れを読み、タイミングよく行動し、最小のエネルギーで結果を出すことができる。",
        "知識を得る力が強く、文化、伝統、歴史などの過去に関心を持ち、その中から学び、それを受け継ぎ、未来に継承していくことができる。",
        "自然法則と調和することを望み、規律や秩序を重んじて活動し、より良い未来を創造することができる。",
        "目の前にある事を喜び、あるいは感謝し、そして適切に処理し、対応することができる。"
    );

    $arr_que2 = array(
        "全体を俯瞰することができず、目先のことに囚われ、先々を心配して無駄に活動をする。あるいは、何もしなくなり、ただ時間だけが過ぎてしまう。",
        "知識を得る力が弱く、過去の否定的な出来事にこだわりやすく、学びを生かすことが難しくなる。あるいは、無駄に情報を入手し、何も役立てることができない。",
        "気分や好き嫌いなどの感情によって、邪魔だと思うものを排除し、本当に大切なことや、真実を失ってしまう。あるいは、不要なものを受け入れ、本当に大切なことを選ぶことができない。",
        "今、目の前にない事に目が行き、心配し、それをどうにかしようと慌てる。いつも先のことばかりを考え、今を楽しむことができない。"
    );

    $arr_que3 = array(
        "身体の不調が心に影響し、活動が制限される。（後頭葉）",
        "やる気がなくなり無気力となり、活動しなくなる。（前頭葉）",
        "自分に自信が持てず、自分を疑い、責めて苦しむ（頭頂葉）",
        "注意散漫となり、集中力が低下し、活動が継続しない（後頭葉）",
        "持っている能力を使おうとせず怠惰になる、怠ける（後頭葉）",
        "安易な楽しみを求め、それを我慢せず快楽に浸る（前頭葉）",
        "真実を見ようとしなくなり、ありもしないことを妄想する（前頭葉）",
        "心の静けさを求めようとしなくなる、瞑想をサボる（前頭葉）",
        "心の静けさそのものを失意、ただ表面的な活動に没頭する（側頭葉）"
    );

    $arr_que4 = array(
        "規則的に生活する",
        "朝の日課を習慣とする",
        "早寝、早起きをする",
        "朝と夕、規則的に瞑想をする",
        "毎朝、軽く運動する",
        "体を冷やさない",
        "半身浴をする",
        "オイルマッサージ",
        "過度な努力をしない",
        "毎日、純粋な知識を学ぶ",
        "疲労を避ける",
        "規律や秩序を重んじる",
        "昼寝をしない",
        "純粋性の高い食事をする",
        "良く熟れた甘い果物を食べる",
        "生のハチミツを食べる",
        "適度な油を摂取する",
        "砂糖、小麦、乳製品を控える",
        "牛、豚、魚、魚介類を控える",
        "納豆、餅、トロロ芋などの粘つく食品を控える",
        "過食や遅い夕食を避ける"
    );

    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : "";
    $date = date("Y / m / d");
    
    $year  = isset($_POST['year'])  ? htmlspecialchars($_POST['year'])  : "";
    $month = isset($_POST['month']) ? htmlspecialchars($_POST['month']) : "";
    $day   = isset($_POST['day'])   ? htmlspecialchars($_POST['day'])   : "";
        
    $que1 = array();
    $que2 = array();
    $que3 = array();
    $que4 = array();

    $que1_value = array();
    $que2_value = array();
    $que3_value = array();
    $que4_value = array();

    $que1_string = "";
    $que2_string = "";
    $que3_string = "";
    $que4_string = "";

    $strength0 = isset($_POST['strength0']) ? $_POST['strength0'] : "";
    $strength1 = isset($_POST['strength1']) ? $_POST['strength1'] : "";
    $strength2 = isset($_POST['strength2']) ? $_POST['strength2'] : "";
    $strength3 = isset($_POST['strength3']) ? $_POST['strength3'] : "";

    $superiority = isset($_POST['superiority']) ? $_POST['superiority'] : "";
    $superiority_value = array();
    $superiority_string = array();

    $strength0_value = array();
    $strength1_value = array();
    $strength2_value = array();
    $strength3_value = array();

    for($i = 0; $i < 4; $i++){
        $strength0_value[$i] = "";
        $strength1_value[$i] = "";
        $strength2_value[$i] = "";
        $strength3_value[$i] = "";

        $superiority_value[$i] = "";
        $superiority_string[$i] = "";
        
        if($strength0 == $i){
            $strength0_value[$i] = "selected";
        }
        if($strength1 == $i){
            $strength1_value[$i] = "selected";
        }
        if($strength2 == $i){
            $strength2_value[$i] = "selected";
        }
        if($strength3 == $i){
            $strength3_value[$i] = "selected";
        }
    }
    $superiority_value[$superiority] = 'checked="checked"';
    $superiority_string[$superiority] = '&#9679;';

    for($i = 0; $i < count($arr_que1); $i++){
        $que1[$i] = isset($_POST['que_1_'.$i]) ? ($_POST['que_1_'.$i]) : "";
        $que1_value[$i] = "";
        if($que1[$i] == 1){
            $que1_value[$i] = 'checked="checked"';
            $que1_string .= <<< EOT
            <div>
                &#9632;{$arr_que1[$i]}
            </div>

EOT;
        }
    }

    for($i = 0; $i < count($arr_que2); $i++){
        $que2[$i] = isset($_POST['que_2_'.$i]) ? ($_POST['que_2_'.$i]) : "";
        $que2_value[$i] = "";
        if($que2[$i] == 1){
            $que2_value[$i] = 'checked="checked"';
            $que2_string .= <<< EOT
            <div>
                &#9632;{$arr_que2[$i]}
            </div>

EOT;
        }
    }

    for($i = 0; $i < count($arr_que3); $i++){
        $que3[$i] = isset($_POST['que_3_'.$i]) ? ($_POST['que_3_'.$i]) : "";
        $que3_value[$i] = "";
        if($que3[$i] == 1){
            $que3_value[$i] = 'checked="checked"';
            $que3_string .= <<< EOT
            <div>
                &#9632;{$arr_que3[$i]}
            </div>

EOT;
        }
    }

    for($i = 0; $i < count($arr_que4); $i++){
        $que4[$i] = isset($_POST['que_4_'.$i]) ? ($_POST['que_4_'.$i]) : "";
        $que4_value[$i] = "";
        if($que4[$i] == 1){
            $que4_value[$i] = 'checked="checked"';
            $que4_string .= <<< EOT
            <div>
                &#9632;{$arr_que4[$i]}
            </div>

EOT;
        }
    }
?>