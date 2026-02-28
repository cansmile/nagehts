<?php require_once( "heading.php" ); ?>
<!-- 보기시작 -->
<section class="nq-exercise" data-type="other" data-reihe="13">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 mt-2 text-center">
                <h2>Lesen Sie den Dialog. Max und Lisa
                    <br /><small>대화문을 읽으세요. 막스와 리사</small>
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="alert alert-warning" style="line-height: 2.0;">
                    <p><strong>Max:</strong> Hey Lisa. Alles klar?
                        <span class="tran"><br /><small>안녕, 리사, 잘 있었니?</small></span></p>

                    <p><strong>Lisa:</strong> Naja, es geht. Ich habe morgen eine Prüfung zum Thema „Umwelt".
                        <span class="tran"><br /><small>그래. 그럭저럭. 내일 환경에 대한 주제로 시험이 있어.</small></span></p>

                    <p><strong>Max:</strong> Ach, echt? Und, bist du gut vorbereitet?
                        <span class="tran"><br /><small>아, 정말? 잘 준비 했어?</small></span></p>

                    <p><strong>Lisa:</strong> Weißt du, es ist ein ziemlich schweres Thema. Wir müssen über den Umweltschutz, über die Wasserverschmutzung, die Luftverschmutzung und über Umweltkatastrophen sprechen können.
                        <span class="tran"><br /><small>이 주제는 꽤 어려운 주제야. 우리는 환경보호에 대해, 수질 오염, 공기오염 그리고 환경 재앙에 대해 이야기할 수 있어야만 해.</small></span></p>

                    <p><strong>Max:</strong> Hey, das hört sich interessant an. Vielleicht kann ich dir ja dabei helfen?
                        <span class="tran"><br /><small>흥미롭게 들리는데. 내가 너를 도와줄 수 있을 수도 있어.</small></span></p>

                    <p><strong>Lisa:</strong> Wirklich? Hast du denn Ahnung davon?
                        <span class="tran"><br /><small>이것에 대해 좀 아니?</small></span></p>

                    <p><strong>Max:</strong> Naja, ich interessiere mich sehr für den Umweltschutz.
                        <span class="tran"><br /><small>글쎄, 내가 환경보호에 매우 관심이 많거든.</small></span></p>

                    <p><strong>Lisa:</strong> Tatsächlich? Das ist ja super. Dann lass uns doch sofort beginnen.
                        <span class="tran"><br /><small>진짜? 정말 잘되었다. 그럼 우리 당장 시작하자.</small></span></p>

                    <p><strong>Max:</strong> Ist gut. Gehen wir ins Café nebenan?
                        <span class="tran"><br /><small>좋아, 그럼 옆 카페로 갈까?</small></span></p>

                    <p><strong>Lisa:</strong> Ja, klar! Warum nicht.
                        <span class="tran"><br /><small>그럼 좋지. 그러자</small></span></p>
                </div>
            </div>
        </div>

        <!-- 다 읽으셨으면 클릭하세요 버튼 -->
        <div class="row">
            <div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12" id="chk">
                다 읽으셨으면 클릭하세요
            </div>
        </div>
    </div>
</section>
<!-- 보기끝 -->

<?php require "footer.php"; ?>
<script>
    $(".tran").hide();

    $(document).ready(function () {
        $("#chk").on("click", function () {
            $(".tran").show();

            $(this).removeClass("btn-light");
            $(this).addClass("btn-success text-white");
            $(this).html("<h4>잘 읽으셨네요!</h4>");
        });
    });
</script>
</body>
</html>
