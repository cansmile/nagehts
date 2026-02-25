<?php require_once( "heading.php" ); ?>
<!-- 보기시작 -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 mt-2 text-center">
                <h3>Was ist richtig? <small>어느 것이 맞을까요? 텍스트를 읽고 표시하세요.</small></h3>
            </div>
        </div>
        <div class="row">
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
                        <tr class="q given table-success" data-answer="r">
                            <td>Jedes Jahr im Frühling leidet Korea unter Sand, der aus China und der Mongolei hinüberweht.
                                <span class="tran"><br /><small>매해 봄 한국은 중국과 몽골에서 날아오는 모래먼지로 고통받는다.</small></span>
                                <span class="badge bg-success ms-1">Beispiel</span></td>
                            <td class="text-center"><div class="form-check d-flex justify-content-center"><input class="form-check-input rf-r" type="radio" name="q1" checked disabled></div></td>
                            <td class="text-center"><div class="form-check d-flex justify-content-center"><input class="form-check-input rf-f" type="radio" name="q1" disabled></div></td>
                        </tr>
                        <tr class="q" data-answer="f">
                            <td>Im März ist es in Seoul üblich, dass Nebelwolken Seoul so bedecken, dass man nichts erkennen kann.
                                <span class="tran"><br /><small>3월에 서울은 안개구름이 도시를 덮어 아무것도 볼 수 없다.</small></span></td>
                            <td class="text-center"><div class="form-check d-flex justify-content-center"><input class="form-check-input rf-r" type="radio" name="q2"></div></td>
                            <td class="text-center"><div class="form-check d-flex justify-content-center"><input class="form-check-input rf-f" type="radio" name="q2"></div></td>
                        </tr>
                        <tr class="q" data-answer="r">
                            <td>Die Bewohner Seouls gewöhnen sich daran, auf den Handy-Apps die Luftwerte zu checken.
                                <span class="tran"><br /><small>서울 시민들은 핸드폰 앱으로 공기 질을 확인하는 것에 익숙해졌다.</small></span></td>
                            <td class="text-center"><div class="form-check d-flex justify-content-center"><input class="form-check-input rf-r" type="radio" name="q3"></div></td>
                            <td class="text-center"><div class="form-check d-flex justify-content-center"><input class="form-check-input rf-f" type="radio" name="q3"></div></td>
                        </tr>
                        <tr class="q" data-answer="r">
                            <td>Schulaktivitäten im Freien sind bei schlechter Luftqualität verboten.
                                <span class="tran"><br /><small>공기의 질이 나쁠 때 야외 학교 활동은 금지된다.</small></span></td>
                            <td class="text-center"><div class="form-check d-flex justify-content-center"><input class="form-check-input rf-r" type="radio" name="q4"></div></td>
                            <td class="text-center"><div class="form-check d-flex justify-content-center"><input class="form-check-input rf-f" type="radio" name="q4"></div></td>
                        </tr>
                        <tr class="q" data-answer="r">
                            <td>Fahrverbot von älteren Dieselautos sind in Seoul angesagt.
                                <span class="tran"><br /><small>서울에서 오래된 디젤 자동차의 운행 금지가 시행되고 있다.</small></span></td>
                            <td class="text-center"><div class="form-check d-flex justify-content-center"><input class="form-check-input rf-r" type="radio" name="q5"></div></td>
                            <td class="text-center"><div class="form-check d-flex justify-content-center"><input class="form-check-input rf-f" type="radio" name="q5"></div></td>
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
    $(".given .tran").show();

    $(document).ready(function () {
        $("#chk").on("click", function () {
            var qa = $(".q:not(.given)").length;
            var qr = 0;

            $(".q:not(.given)").each(function () {
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
