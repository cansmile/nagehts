<script>
    /* 맞을 때 소리 */
    var o = new Howl({
        src: ["./<?php echo($root); ?>sounds/dingdongdang.mp3"],
        html5: true,
        format: "mp3",
        preload: true,
        onloaderror: function () {
            $(".alert").append(
                "<br /><strong class=\"font-weight-bold text-dark display-4\">페이지를 다시 읽어주시기 바래요.</strong>"
            );
        },
        onload: function () {
            $(".alert").hide();
            $(".o").on("click", function () {
                o.play();
            });
        }
    });

    /* 틀릴 때 소리 */
    var x = new Howl({
        src: ["./<?php echo($root); ?>sounds/Cartoon_Boing.mp3"],
        html5: true,
        format: "mp3",
        preload: true,
        onloaderror: function () {
            $(".alert").append(
                "<br /><strong class=\"font-weight-bold text-dark display-4\">페이지를 다시 읽어주시기 바래요.</strong>"
            );
        },
        onload: function () {
            $(".alert").hide();
            $(".x").on("click", function () {
                x.play();
            });
        }
    });

</script>
