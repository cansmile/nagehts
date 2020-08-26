<!-- 넵바 시작 -->
<?php
    /* 당분간 필요한 변수 */
    $lt = 4; /* 제목 데쉬 이후의 글자 수 제한 */
    $rm = 8; /* 완성된 페이지만 메인에 노출 */
    $subttl = 21; /* 모바일 레이아웃에서 잘리는 글자수 */

    /* 개발자용 */
    $edt = true;

    /* 색상 */
    $col = array(
        "blue",
        "brown",
        "darkblue",
        "darkgray",
        "flame",
        "gold",
        "grape",
        "gray",
        "green",
        "khaki",
        "lightcyan",
        "navy",
        "orange",
        "pink",
        "primary",
        "purple",
        "red",
        "redbeen",
        "scarlet",
        "skyblue",
        "violet",
        "warning",
        "wine",
        "yellowgreen"
    );
    /* $col = array(
        "blue",
        "brown",
        "danger",
        "darkblue",
        "darkgray",
        "default",
        "flame",
        "gold",
        "grape",
        "gray",
        "green",
        "info",
        "inverse",
        "khaki",
        "lightcyan",
        "navy",
        "orange",
        "pink",
        "primary",
        "purple",
        "red",
        "redbeen",
        "scarlet",
        "skyblue",
        "success",
        "violet",
        "warning",
        "wine",
        "yellow",
        "yellowgreen"
    ); */
    $color = $col[array_rand($col)];

    /* header 에서 정의된 변수 [ $fn 은 파일명만,
    $bn 은 확장자 포함 ] */
    $a = " active";
    $sr = " <span class=\"sr-only\">(current)<\/span><\/a>";


    require_once("./".$root."reihen.php");

    /* 페이지가 어디인지 판단 */
    if ($fn == "inthebeginning"
    ) {
        $rl = "inthebeginning";
        $rt = "Na geht's?";
    } elseif (strlen($fn) <= $lt || $fn == "Deutschland") {
        $rl = "inthebeginning";
        $rt = "Na geht's? - Inhalt";
    } elseif (strpos($fn, "-")) {
        $dash = strpos($fn, "-");
        $da = substr($fn, ($dash+1));
        $r = (int)substr($fn, 1, ($dash-1));
        if (strlen($da) <= $lt) {
            $rk = array_keys($tl[$r]);
            for ($j = 0; $j < count($rk); $j++) {
                if (($tl[$r][$rk[$j]])[0] == $da[0]) {
                    $rl = $rk[$j];
                }
            }
            $rt = "Reihe {$r} - {$da[0]} - Inhalt";
        } else {
            $rl = substr($fn, 0, ($dash));
            if ($fn[2] == "-") {
                $rt = "Reihe {$fn[1]} - Inhalt";
            } else {
                $rt = "Reihe {$fn[1]}{$fn[2]} - Inhalt";
            }
        }
    }
    /* $dash 변수가 설정됐나? */
    $ds = isset($dash);
    if (!$ds) {
        $r = (int)substr($fn, 1);
    }

    if ($ds) {
        if (strlen($da) > $lt) {
            $kom = $tl[$r];
            /* 중단원 메뉴 */
            for ($i = 0; $i < count($kom); $i++) {
                $cn = array_keys($kom)[$i];
                if (file_exists($root.$cn.".php")) {
                    if ($fn == $cn) {
                        $jt1 = $tl[$r][$cn];
                        $jt2 = $tl_k[$r][$cn];
                    }
                }
            }
        } else {
            $kom = $rtl[$r][$fn[($dash+1)]];
            /* 소단원 메뉴; 빼기 이후의 글자수가 4글자 미만 */
            for ($i = 0; $i < count($kom); $i++) {
                /* 메뉴의 키 정보 */
                $mkey = array_keys($kom)[$i];
                $cn = "r".$r."-".$mkey;
                if (file_exists($root.($cn).".php")) {
                    if ($da == $mkey) {
                        $jt1 = ($i+1).". ".$rtl[$r][$mkey[0]][$mkey];
                        $jt2 = $rtl_k[$r][$mkey[0]][$mkey];
                    }
                    $n = $i+1;
                    if (substr($mkey, 1, 2) == "GR") {
                        $la = "GR";
                    } elseif ($da == "Uebungen") {
                        $la = "Übungen";
                    } else {
                        $la = $mkey;
                    }
                    for ($c = 97; $c < 121; $c++) {
                        if (substr($la, -1) == chr($c)) {
                            $la = substr($la, 0, (strlen($la) - 1))."<small>-".($c - 96)."</small>";
                        }
                    }
                }
            }
        }
    } else {
        $kom = $tl;
        /* 대단원 메뉴 */
        for ($i = 0; $i < count($kom); $i++) {
            if ($i == 0) {
                $jt0 = $itl["D"];
                $jt1 = $itl_k["D"];
                $jt2 = "";
            }
            /* 작업 완료($rm) 단원 */
            if (($i-1) < $rm) {
                if ($fn == "r".($i)) {
                    $jt0 = "Reihe ".$r;
                    $jt1 = $itl[$r];
                    $jt2 = $itl_k[$r];
                }
            }

            /* 작업 완료($rm) 단원 이상인데, 편집지 */
            if (($i-1) >= $rm && $edt) {
                if ($fn == "r".($i)) {
                    $jt0 = "Reihe ".$r;
                    $jt1 = $itl[$r];
                    $jt2 = $itl_k[$r];
                }
            }
        }
    }
?>

<!-- 상단 큰 제목 -->
<header>
    <?php
        /* 인덱스가 아니냐? */
        if ($fn != "inthebeginning") {
    ?>

    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="text-center col-12">
                    <?php
                        if ($ds) {
                            /* 아마도 소·중단원 */
                            ?>
                            <h1 class="display-4"><?php echo($jt1); ?><br>
                                <small><?php echo($jt2); ?></small></h1>

                            <?php
                            if (strlen($da) <= $lt) {
                                if (substr($da, 1, 2) == "GR") {
                                    $da = "GR";
                                }
                                for ($c = 97; $c < 121; $c++) {
                                    if (substr($da, -1) == chr($c)) {
                                        $da = substr($da, 0, (strlen($da) - 1))."<small>-".($c - 96)."</small>";
                                    }
                                }

                                ?>
                                <h2>(교재 <span class="bg-<?php echo($color); ?> p-1 px-2 m-1 rounded text-white">
                            <strong><?php echo($da); ?></strong></span>)
                                </h2>
                                <?php
                            }
                        } else {
                            /* 이건 확실하게 대단원 */
                            ?>
                            <h1 class="display-4"><?php echo($jt0); ?></h1>
                            <h2><?php echo($jt1); ?><br><small><?php echo($jt2); ?></small>
                            </h2>
                            <?php
                        }
                    ?>

                </div>
            </div>
        </div>
    </div>
</header>
<?php
    }
?>
