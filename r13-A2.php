<?php require_once( "heading.php" ); ?>
<!-- 보기시작 -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 mt-2 text-center">
                <h2>Lesen Sie den Text. Gelber Sand und Feinstaub
                    <br /><small>텍스트를 읽으세요. 황사와 미세 먼지</small>
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="alert alert-warning" style="line-height: 1.8;">
                    <p>Jedes Jahr im Frühling kommen der Gelbe Sand und der Feinstaub als unerwünschte Dauergäste aus China und der Mongolei nach Korea. Im März ist es in Seoul üblich, dass die verschmutzte Luft Seoul so wie Nebelwolken bedeckt, sodass die Sicht oft auf wenige Meter eingeschränkt ist. Die Luftverschmutzung beeinträchtigt das Leben der Bewohner Seouls. Viele beschweren sich über Husten, Hautjucken, trockene Augen, Atembeschwerden usw. Nach Angabe der Umweltforschung bestehen 60% des Feinstaubs aus Sulfaten und Nitraten, Luftschadstoffen, die äußerst krebserregend wirken.</p>
                    <p class="tran"><small>매해 봄이면 황사와 미세먼지가 달갑지않은 단골손님으로 중국과 몽골에서 한국으로 온다. 3월에 서울은 마치 안개처럼 오염된 공기가 도시를 뒤덮고 있어 몇 미터 앞도 볼 수 없을 정도이다. 이러한 대기오염이 시민의 삶을 해치고 있다. 많은 시민들은 기침, 피부질환, 건조한 눈, 호흡장애들을 호소하고 있다. 한 환경보호연구의 정보에 따르면 미세먼지의 60%가 암을 유발시키는 위험한 물질로서 황산염과 질산염의 대기유해물질로 구성되어 있다는 것이다.</small></p>

                    <p>Für die Bewohner Seouls, etwa 10 Millionen, wurde es zur obligatorischen Morgenroutine, sich mit Hilfe einer Handy-App oder Anzeigetafel über die Smogwerte zu informieren. Da Feinstaub besonders für Kinder und alte Leute gesundheitsgefährdend ist, sollten sie sich je nach Warnstufe entweder zu Hause oder innerhalb eines Gebäudes aufhalten.</p>
                    <p class="tran"><small>천만의 서울시민들에게 핸드폰 앱이나 거리의 광고판을 통하여 스모그 지표 정보를 얻는 것이 의무적인 아침 일상에 속한다. 특별히 미세먼지가 어린이나 노인들에게 건강에 위협적이기 때문에 경고 단계에 따라 집에 머물던지 건물 안에 있는 것이 좋다.</small></p>

                    <p>Frau Kim sagt, wenn sie eine Warn-SMS erhält, dann achtet sie darauf, dass tagsüber die Fenster verschlossen bleiben und der Luftreinigungsapparat läuft. Ihr Sohn muss in der Wohnung spielen und darf nicht rausgehen, da er an Heuschnupfen leidet. Ihr Mann fährt für die Umwelt anstatt mit dem Auto mit der U-Bahn zur Arbeit.</p>
                    <p class="tran"><small>김 선생님은 경고SMS를 받으면 낮 동안 집의 창문들을 닫고 청정기를 작동한다. 아들은 집에서 놀게 하고 알레르기를 앓고 있어 밖으로 나가는 것을 금지한다. 남편은 환경을 위하여 자동차 대신 지하철을 타고 직장에 간다.</small></p>

                    <p>Zur Bekämpfung der Luftverschmutzung kündigte die koreanische Regierung Maßnahmen an. Busse sollen mit Feinstaubfiltern ausgerüstet werden, und ältere Dieselautos dürfen an kritischen Tagen nicht fahren.</p>
                    <p class="tran"><small>한국 정부는 대기오염방지책을 마련했다. 버스들은 미세먼지필터를 장착하여야 하고 오래된 디젤 차량들은 공기가 나쁜 날에는 운행을 해서는 안된다.</small></p>
                </div>
            </div>
        </div>
        <!-- 번역 확인 버튼 -->
        <div class="row">
            <div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12" id="chk">다 읽으셨으면 클릭하세요</div>
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
            $(this).html("<h4>번역을 확인하세요!</h4>");
        });
    });
</script>
</body>
</html>
