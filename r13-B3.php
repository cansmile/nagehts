<?php require_once( "heading.php" ); ?>
<!-- 보기시작 -->
<section class="nq-exercise" data-type="other" data-reihe="13">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 mt-2 text-center">
                <h2>Richtig oder Falsch?
                    <br /><small>맞을까 틀릴까? 읽고 표시하세요.</small>
                </h2>
            </div>
        </div>

        <!-- R/F 문제 -->
        <div class="row mt-2">
            <div class="col-12 mt-2">
                <table class="table table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th style="width:60%">Aussage</th>
                            <th class="text-center" style="width:20%">richtig</th>
                            <th class="text-center" style="width:20%">falsch</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="q" data-answer="r">
                            <td>Umweltschutz sorgt dafür, dass die Natur gesund bleibt.
                                <span class="tran"><br /><small>환경보호는 자연이 건강하게 유지되도록 돌보는 것이다.</small></span></td>
                            <td class="text-center"><div class="form-check d-flex justify-content-center"><input class="form-check-input rf-r" type="radio" name="q1"></div></td>
                            <td class="text-center"><div class="form-check d-flex justify-content-center"><input class="form-check-input rf-f" type="radio" name="q1"></div></td>
                        </tr>
                        <tr class="q" data-answer="f">
                            <td>Viele Menschen tun vieles, um die Umwelt zu schützen.
                                <span class="tran"><br /><small>많은 사람들이 환경을 보호하기 위해 많은 것을 한다.</small></span></td>
                            <td class="text-center"><div class="form-check d-flex justify-content-center"><input class="form-check-input rf-r" type="radio" name="q2"></div></td>
                            <td class="text-center"><div class="form-check d-flex justify-content-center"><input class="form-check-input rf-f" type="radio" name="q2"></div></td>
                        </tr>
                        <tr class="q" data-answer="f">
                            <td>Sie errichten Felder und Wälder und bauen Früchte an.
                                <span class="tran"><br /><small>그들은 밭과 숲을 만들고 과일을 재배한다.</small></span></td>
                            <td class="text-center"><div class="form-check d-flex justify-content-center"><input class="form-check-input rf-r" type="radio" name="q3"></div></td>
                            <td class="text-center"><div class="form-check d-flex justify-content-center"><input class="form-check-input rf-f" type="radio" name="q3"></div></td>
                        </tr>
                        <tr class="q" data-answer="r">
                            <td>Die Tiere im Wald verschwinden.
                                <span class="tran"><br /><small>숲의 동물들이 사라진다.</small></span></td>
                            <td class="text-center"><div class="form-check d-flex justify-content-center"><input class="form-check-input rf-r" type="radio" name="q4"></div></td>
                            <td class="text-center"><div class="form-check d-flex justify-content-center"><input class="form-check-input rf-f" type="radio" name="q4"></div></td>
                        </tr>
                        <tr class="q" data-answer="r">
                            <td>Industrien produzieren giftige Stoffe, die der Umwelt schaden.
                                <span class="tran"><br /><small>산업은 환경을 해치는 유독 물질을 생산한다.</small></span></td>
                            <td class="text-center"><div class="form-check d-flex justify-content-center"><input class="form-check-input rf-r" type="radio" name="q5"></div></td>
                            <td class="text-center"><div class="form-check d-flex justify-content-center"><input class="form-check-input rf-f" type="radio" name="q5"></div></td>
                        </tr>
                        <tr class="q" data-answer="f">
                            <td>Menschen töten Tiere und Pflanzen.
                                <span class="tran"><br /><small>인간이 동물과 식물을 죽인다.</small></span></td>
                            <td class="text-center"><div class="form-check d-flex justify-content-center"><input class="form-check-input rf-r" type="radio" name="q6"></div></td>
                            <td class="text-center"><div class="form-check d-flex justify-content-center"><input class="form-check-input rf-f" type="radio" name="q6"></div></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- 정답확인 버튼 -->
        <div class="row">
            <div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12" id="chk">
                정답확인
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
            var qa = $(".q").length;
            var qr = 0;

            $(".q").each(function () {
                var answer = $(this).data("answer");
                var selected = $(this).find("input:checked");
                if (selected.length > 0) {
                    if ((answer === "r" && selected.hasClass("rf-r")) ||
                        (answer === "f" && selected.hasClass("rf-f"))) {
                        $(this).addClass("table-success");
                        qr++;
                    } else {
                        $(this).addClass("table-danger");
                    }
                } else {
                    $(this).addClass("table-warning");
                }
            });

            $(".tran").show();
            $("input").prop("disabled", true);

            $(this).removeClass("btn-light");

            var pe = (qr / qa) * 100;
            var tcl = "white";
            if (pe > 99) { var st = "원어민이세요?"; var cl = "lime"; tcl = "dark"; }
            else if (pe > 74) { var st = "어! 좀 하시는데요~^^"; var cl = "success"; }
            else if (pe > 49) { var st = "쓰읍~ 다시 해 보실까요?"; var cl = "primary"; }
            else { var st = "좀 더 분발해 주세요~"; var cl = "danger"; }

            $(this).addClass("btn-" + cl + " text-" + tcl);
            $(this).html("<h4>" + qa + "문제 중 " + qr + "개를 맞히셨네요!<br>" + st + "</h4>");
        });
    });
</script>
</body>
</html>
