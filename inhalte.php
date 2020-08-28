<?php
    /** @var integer $lv from heading.php */
    /** @var integer $r from heading.php */
    /** @var integer $hp from heading.php */
    /** @var array $men from heading.php */
    /** @var string $fn from heading.php */
    require_once( "heading.php" );
    /* 목록을 출력하는 퐈이얄 */

    /* Reihe가 있으면*/
    /* 처음 화면 메뉴 출력 */
    switch ( $lv ) {
        case 'int':
            /** @var array $men from heading.php */
            $sub = $men;
            break;

        case 'lv1':
            $sub = $men[$r][2];
            break;

        /* 2수준 화면 메뉴 출력 */
        /** @var integer $hp from heading.php */
        /** @var integer $lt from heading.php */
        case 'lv2':
            $sub = $men[$r][2][$fn][2];
            break;
        default:
            throw new RuntimeException('있을 수 없는 값입니다.');
        case 'Deu':

    }

    /* 갯수에 따른 메뉴 구성 클래스 정의 */
    if ( !empty($sub) ) {
        $cl = count($sub);
        if ( $cl < 3 ) {
            $col = "col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12";
        } else if ( $cl < 6 ) {
            $col = "col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3";
        } else {
            $col = "col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3";
        }
    }

?>
<section>
    <div class="container">
        <div class="row">
            <?php
                if ( $lv !== "Deu" ) {
                    if ( $lv === 'lv2' ) $header = 0;
                    foreach ( $sub as $third_key => $third ) {
                        switch ( $lv ) {
                            case "int":
                                $header = $third_key;
                                if ( $header === "D" ) {
                                    $header = "Reihe 0/D";
                                    $href = $third[0];
                                }

                                if ( $header !== "D" ) {
                                    $header = (string)$header;
                                    $href = "r" . $header;
                                }
                                break;
                            case "lv1":
                                $header = 'Reihe 0/' . $third[0][0];
                                $href = $third_key;
                                break;
                            case "lv2":
                                $header++;
                                $href = 'r' . $r . '-' . $third_key;
                                break;
                            default:
                                $header = $third[0];
                                $href = $third_key;

                        }
                        echo '<div class="text-center align-middle ' . $col . '"';
                        echo '>';
                        echo '<a href="' . $href . '" class="text-dark">';
                        echo '<img src="dev/images/' . $header . '.png" class="rounded-circle mx-auto" style="width: 140 px; height: 140 px;" alt="' . $third[0] . ' [ ' . $third[1] . ' ]"';
                        echo ' />';
                        echo '<h3>' . $third[0] . '</h3>';
                        echo '<p>' . $third[1];
                        if ( $lv === 'lv2' ) {
                            if ( preg_match('/[a-z]/', ( substr($third_key, -1) )) ) {
                                $item_head = substr($third_key, 0, ( strlen($third_key) - 1 ));
                                $item_tail = ord(substr($third_key, -1)) - 96;
                            }

                            if ( preg_match('/[^a-z]/', ( substr($third_key, -1) )) ) {
                                $item_head = $third_key;
                                $item_tail = '';
                            }

                            if ( substr($third_key, -2) === 'GR' ) {
                                $item_head = 'GR';
                            }
                            echo '<br /><small class="mt-2"> ( 교재 <span class="bg-' . $color . ' p-1 px-2 m-1 rounded text-white">' . $item_head;
                            if ( !empty($item_tail) ) {
                                echo '<small>-' . $item_tail . '</small>';
                            }
                            echo '</span>)</small > ';
                        }
                        echo '</p>';
                        echo '</a>';
                        echo '</div>';
                    }
                }
            ?>
        </div>
    </div>
</section>
<?php require "footer.php"; ?>
<script src="./dev/js/popper.min.js"></script>
</body>

</html>
