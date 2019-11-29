<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
	<?php if(ul()) { ?>
		<?php require_once "ready.php"; ?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
	이 페이지의 알파벳이나 발음기호를 <strong>누르면 누른 위치에 해당하는 발음이 들립니다!</strong>
	<br>
	<button type="button" class="btn btn-<?php echo($color); ?> btn-sm d-inline" disabled>
		HV
	</button>
	를 누르면 전체 알파벳 발음과 예제 단어의 발음을 들으실 수 있어요.
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
<!-- 알림 끝 -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 mb-4 mt-2 text-center">
				<h2>Hören Sie und sprechen Sie nach.
				<br>
				<small>듣고 따라해보세요.</small></h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 mb-4 mt-2 py-2 text-center">
				<button type="button" class="btn btn-outline-primary my-2 btn-lg itm" id="A">
					<strong>A</strong>
				</button>
				-
				<button type="button" class="btn btn-outline-primary my-2 btn-lg itm" id="B">
					<strong>B</strong>e
				</button>
				-
				<button type="button" class="btn btn-outline-primary my-2 btn-lg itm" id="C">
					<strong>C</strong>e
				</button>
				-
				<button type="button" class="btn btn-outline-primary my-2 btn-lg itm" id="D">
					<strong>D</strong>e
				</button>
				-
				<button type="button" class="btn btn-outline-primary my-2 btn-lg itm" id="E">
					<strong>E</strong>
				</button>
				-
				<button type="button" class="btn btn-outline-primary my-2 btn-lg itm" id="F">
					e<strong>F</strong>
				</button>
				-
				<button type="button" class="btn btn-outline-primary my-2 btn-lg itm" id="G">
					<strong>G</strong>e
				</button>
				-
				<button type="button" class="btn btn-outline-primary my-2 btn-lg itm" id="H">
					<strong>H</strong>a
				</button>
				-
				<button type="button" class="btn btn-outline-primary my-2 btn-lg itm" id="I">
					<strong>I</strong>
				</button>
				-
				<button type="button" class="btn btn-outline-primary my-2 btn-lg itm" id="J">
					<strong>J</strong>ot
				</button>
				-
				<button type="button" class="btn btn-outline-primary my-2 btn-lg itm" id="K">
					<strong>K</strong>a
				</button>
				-
				<button type="button" class="btn btn-outline-primary my-2 btn-lg itm" id="L">
					e<strong>L</strong>
				</button>
				-
				<button type="button" class="btn btn-outline-primary my-2 btn-lg itm" id="M">
					e<strong>M</strong>
				</button>
				-
				<button type="button" class="btn btn-outline-primary my-2 btn-lg itm" id="N">
					e<strong>N</strong>
				</button>
				-
				<button type="button" class="btn btn-outline-primary my-2 btn-lg itm" id="O">
					<strong>O</strong>
				</button>
				-
				<button type="button" class="btn btn-outline-primary my-2 btn-lg itm" id="P">
					<strong>P</strong>e
				</button>
				-
				<button type="button" class="btn btn-outline-primary my-2 btn-lg itm" id="Q">
					<strong>Q</strong>u
				</button>
				-
				<button type="button" class="btn btn-outline-primary my-2 btn-lg itm" id="R">
					e<strong>R</strong>
				</button>
				-
				<button type="button" class="btn btn-outline-primary my-2 btn-lg itm" id="S">
					e<strong>S</strong>
				</button>
				-
				<button type="button" class="btn btn-outline-primary my-2 btn-lg itm" id="T">
					<strong>T</strong>e
				</button>
				-
				<button type="button" class="btn btn-outline-primary my-2 btn-lg itm" id="U">
					<strong>U</strong>
				</button>
				-
				<button type="button" class="btn btn-outline-primary my-2 btn-lg itm" id="V">
					<strong>V</strong>au
				</button>
				-
				<button type="button" class="btn btn-outline-primary my-2 btn-lg itm" id="W">
					<strong>W</strong>e
				</button>
				-
				<button type="button" class="btn btn-outline-primary my-2 btn-lg itm" id="X">
					i<strong>X</strong>
				</button>
				-
				<button type="button" class="btn btn-outline-primary my-2 btn-lg itm" id="Y">
					<strong>Y</strong>psilon
				</button>
				-
				<button type="button" class="btn btn-outline-primary my-2 btn-lg itm" id="Z">
					<strong>Z</strong>et
				</button>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 mb-4 mt-2 text-center">
				<h3>Telefon-Alphabet
				<br>
				<small>텔레폰알파벳</small>
				<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline itm" id="whole">
					HV
				</button>
				<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline itm" id="whole_p">
					❚❚
				</button></h3>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="A wie Anton" style="width: 140px; height: 140px;" src="images/Reihe 0/A.png">
				<button class="itm btn btn-outline-dark" id="A_lg">▶</button>
				<span><h4>[a]</h4>
					<p>
						wie <strong>A</strong>nton
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Anton">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="Ä wie Ärger" style="width: 140px; height: 140px;" src="images/Reihe 0/Ae.png">
				<button class="itm btn btn-outline-dark" id="Ä_lg">▶</button>
				<span><h4>[ɛ]</h4>
					<p>
						wie <strong>Ä</strong>rger
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Ärger">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="B wie Berta" style="width: 140px; height: 140px;" src="images/Reihe 0/B.png">
				<button class="itm btn btn-outline-dark" id="B_lg">▶</button>
				<span><h4>[be]</h4>
					<p>
						wie <strong>B</strong>erta
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Berta">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="C wie Cäsar" style="width: 140px; height: 140px;" src="images/Reihe 0/C.png">
				<button class="itm btn btn-outline-dark" id="C_lg">▶</button>
				<span><h4>[tse]</h4>
					<p>
						wie <strong>C</strong>äsar
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Cäsar">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="Ch wie Charlotte" style="width: 140px; height: 140px;" src="images/Reihe 0/Ch.png"true">
				<button class="itm btn btn-outline-dark" id="Ch_lg">▶</button>
				<span><h4>[ç] [x] [k] [ʃ] [tʃ]</h4>
					<p>
						wie <strong>Ch</strong>arlotte
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Charlotte">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="D wie Dora" style="width: 140px; height: 140px;" src="images/Reihe 0/D.png">
				<button class="itm btn btn-outline-dark" id="D_lg">▶</button>
				<span><h4>[de]</h4>
					<p>
						wie <strong>D</strong>ora
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Dora">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="E wie Emil" style="width: 140px; height: 140px;" src="images/Reihe 0/E.png">
				<button class="itm btn btn-outline-dark" id="E_lg">▶</button>
				<span><h4>[e]</h4>
					<p>
						wie <strong>E</strong>mil
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Emil">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="F wie Friedrich" style="width: 140px; height: 140px;" src="images/Reihe 0/F.png">
				<button class="itm btn btn-outline-dark" id="F_lg">▶</button>
				<span><h4>[εf]</h4>
					<p>
						wie <strong>F</strong>riedrich
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Friedrich">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="G wie Gustav" style="width: 140px; height: 140px;" src="images/Reihe 0/G.png">
				<button class="itm btn btn-outline-dark" id="G_lg">▶</button>
				<span><h4>[ge]</h4>
					<p>
						wie <strong>G</strong>ustav
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Gustav">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="H wie Heinrich" style="width: 140px; height: 140px;" src="images/Reihe 0/H.png">
				<button class="itm btn btn-outline-dark" id="H_lg">▶</button>
				<span><h4>[ha]</h4>
					<p>
						wie <strong>H</strong>einrich
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Heinrich">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="I wie Ida" style="width: 140px; height: 140px;" src="images/Reihe 0/I.png">
				<button class="itm btn btn-outline-dark" id="I_lg">▶</button>
				<span><h4>[i]</h4>
					<p>
						wie <strong>I</strong>da
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Ida">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="J wie Julius" style="width: 140px; height: 140px;" src="images/Reihe 0/J.png">
				<button class="itm btn btn-outline-dark" id="J_lg">▶</button>
				<span><h4>[jɔt]</h4>
					<p>
						wie <strong>J</strong>ulius
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Julius">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="K wie Kaufmann" style="width: 140px; height: 140px;" src="images/Reihe 0/K.png">
				<button class="itm btn btn-outline-dark" id="K_lg">▶</button>
				<span><h4>[ka]</h4>
					<p>
						wie <strong>K</strong>aufmann
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Kaufmann">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="L wie Ludwig" style="width: 140px; height: 140px;" src="images/Reihe 0/L.png">
				<button class="itm btn btn-outline-dark" id="L_lg">▶</button>
				<span><h4>[εl]</h4>
					<p>
						wie <strong>L</strong>udwig
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Ludwig">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="M wie Martha" style="width: 140px; height: 140px;" src="images/Reihe 0/M.png">
				<button class="itm btn btn-outline-dark" id="M_lg">▶</button>
				<span><h4>[εm]</h4>
					<p>
						wie <strong>M</strong>artha
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Martha">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="N wie Nordpol" style="width: 140px; height: 140px;" src="images/Reihe 0/N.png">
				<button class="itm btn btn-outline-dark" id="N_lg">▶</button>
				<span><h4>[εn]</h4>
					<p>
						wie <strong>N</strong>ordpol
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Nordpol">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="O wie Otto" style="width: 140px; height: 140px;" src="images/Reihe 0/O.png">
				<button class="itm btn btn-outline-dark" id="O_lg">▶</button>
				<span><h4>[o:]</h4>
					<p>
						wie <strong>O</strong>tto
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Otto">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="Ö wie Ökonom" style="width: 140px; height: 140px;" src="images/Reihe 0/Oe.png">
				<button class="itm btn btn-outline-dark" id="Ö_lg">▶</button>
				<span><h4>[ø]</h4>
					<p>
						wie <strong>Ö</strong>konom
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Ökonom">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="P wie Paula" style="width: 140px; height: 140px;" src="images/Reihe 0/P.png">
				<button class="itm btn btn-outline-dark" id="P_lg">▶</button>
				<span><h4>[pe]</h4>
					<p>
						wie <strong>P</strong>aula
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Paula">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="Q wie Quelle" style="width: 140px; height: 140px;" src="images/Reihe 0/Q.png">
				<button class="itm btn btn-outline-dark" id="Q_lg">▶</button>
				<span><h4>[ku]</h4>
					<p>
						wie <strong>Q</strong>uelle
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Quelle">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="R wie Richard" style="width: 140px; height: 140px;" src="images/Reihe 0/R.png">
				<button class="itm btn btn-outline-dark" id="R_lg">▶</button>
				<span><h4>[εr]</h4>
					<p>
						wie <strong>R</strong>ichard
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Richard">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="S wie Samuel" style="width: 140px; height: 140px;" src="images/Reihe 0/S.png">
				<button class="itm btn btn-outline-dark" id="S_lg">▶</button>
				<span><h4>[εs]</h4>
					<p>
						wie <strong>S</strong>amuel
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Samuel">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="Sch wie Schule" style="width: 140px; height: 140px;" src="images/Reihe 0/Sch.png">
				<button class="itm btn btn-outline-dark" id="Sch_lg">▶</button>
				<span><h4>[ʃ]</h4>
					<p>
						wie <strong>Sch</strong>ule
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Schule">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="β wie Eszett" style="width: 140px; height: 140px;" src="images/Reihe 0/ss.png">
				<button class="itm btn btn-outline-dark" id="ss_lg">▶</button>
				<span><h4>[ɛstsɛt]</h4>
					<p>
						wie Eszett
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Eszett">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="T wie Theodor" style="width: 140px; height: 140px;" src="images/Reihe 0/T.png">
				<button class="itm btn btn-outline-dark" id="T_lg">▶</button>
				<span><h4>[te]</h4>
					<p>
						wie <strong>T</strong>heodor
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Theodor">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="U wie Ulrich" style="width: 140px; height: 140px;" src="images/Reihe 0/U.png">
				<button class="itm btn btn-outline-dark" id="U_lg">▶</button>
				<span><h4>[u]</h4>
					<p>
						wie <strong>U</strong>lrich
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Ulrich">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="Ü wie Übermut" style="width: 140px; height: 140px;" src="images/Reihe 0/Ue.png">
				<button class="itm btn btn-outline-dark" id="Ue_lg">▶</button>
				<span><h4>[y]</h4>
					<p>
						wie <strong>Ü</strong>bermut
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Uebermut">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="V wie Viktor" style="width: 140px; height: 140px;" src="images/Reihe 0/V.png">
				<button class="itm btn btn-outline-dark" id="V_lg">▶</button>
				<span><h4>[fau̮]</h4>
					<p>
						wie <strong>V</strong>iktor
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Viktor">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="W wie Wilhelm" style="width: 140px; height: 140px;" src="images/Reihe 0/W.png">
				<button class="itm btn btn-outline-dark" id="W_lg">▶</button>
				<span><h4>[ve]</h4>
					<p>
						wie <strong>W</strong>ilhelm
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Wilhelm">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="X wie Xanthippe" style="width: 140px; height: 140px;" src="images/Reihe 0/X.png">
				<button class="itm btn btn-outline-dark" id="X_lg">▶</button>
				<span><h4>[iks]</h4>
					<p>
						wie <strong>X</strong>anthippe
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Xanthippe">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="Y wie Ypsilon" style="width: 140px; height: 140px;" src="images/Reihe 0/Y.png">
				<button class="itm btn btn-outline-dark" id="Y_lg">▶</button>
				<span><h4>[ʏpsilɔn]</h4>
					<p>
						wie <strong>Y</strong>psilon
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Ypsilon">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="Z wie Zeppelin" style="width: 140px; height: 140px;" src="images/Reihe 0/Z.png">
				<button class="itm btn btn-outline-dark" id="Z_lg">▶</button>
				<span><h4>[tsεt]</h4>
					<p>
						wie <strong>Z</strong>eppelin
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Zeppelin">▶</button>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 mb-4 mt-2 text-center">
				<h2>Schreiben Sie Ihren Namen und buchstabieren Sie.
				<br>
				<small>이름을 써보고 스펠링을 말해보아요.<br>(입력은 되지만 별도의 기능이 없어요.)</small></h2>
				<input type="text" class="form-control-lg text-lowercase" placeholder="Namen" id="namen"><button type="button" class="p-2 px-3 m-1 border rounded btn btn-lime" id="play">▶</button>
				<br>
				<div id="show" class="border border-danger p-1 px-2 m-1 display-4"></div>
			</div>
		</div>
	</div>
</section>
<div id="last" class="d-none"></div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="./js/jquery-3.4.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="./js/popper.min.js"></script>
<script src="./js/bootstrap.js"></script>
<!-- ion.sound -->
<script src="./js/howler.core.js"></script>
<script>
	// 일단 HV 버튼과 일시정지 버튼 숨기기
	$("#whole").hide();
	$("#whole_p").hide();
	$("#show").hide();
	$("#play").hide();

// 소리 출력 전역 변수와 함수
var sen = new Array(), pa = new Array(), he = new Array(), last;
$(".itm").each(function() {
	var t = $(this);
	var ti = t.attr("id");
	sen[ti] = 0;
	pa[ti] = t.html();
	he[ti] = t.height();
});

function stopAll() {
	$(".itm").each(function() {
		$(this).html(pa[$(this).attr("id")]);
	});
}

var nagehts = new Howl({
	src: ["./sounds/Reihe 0/Buchstabe.mp3"],
	sprite : {
		"whole": [446,158035],
		"A": [4035,661],
		"wie_Anton": [5293,1127],
		"Ä": [8886,590],
		"wie_Ärger": [10385,896],
		"B": [13919,485],
		"wie_Berta": [15141,858],
		"C": [18602,696],
		"wie_Cäsar": [19710,991],
		"Ch": [23178,429],
		"wie_Charlotte": [24652,1007],
		"D": [28423,503],
		"wie_Dora": [29785,933],
		"E": [33098,570],
		"wie_Emil": [34588,1191],
		"F": [37874,594],
		"wie_Friedrich": [39280,1030],
		"G": [43524,690],
		"wie_Gustav": [44863,1023],
		"H": [48591,555],
		"wie_Heinrich": [49737,1081],
		"I": [53276,702],
		"wie_Ida": [54599,1108],
		"J": [58031,906],
		"wie_Julius": [59684,1362],
		"K": [62965,1346],
		"wie_Kaufmann": [64775,1345],
		"L": [68493,946],
		"wie_Ludwig": [69787,1310],
		"M": [72747,996],
		"wie_Martha": [74633,1331],
		"N": [77715,1012],
		"wie_Nordpol": [79236,1381],
		"O": [82619,995],
		"wie_Otto": [84210,1342],
		"Ö": [87056,967],
		"wie_Ökonom": [88361,1445],
		"P": [91584,804],
		"wie_Paula": [93034,1190],
		"Q": [96274,833],
		"wie_Quelle": [97658,1076],
		"R": [101335,940],
		"wie_Richard": [102445,1298],
		"S": [106590,956],
		"wie_Samuel": [107768,1313],
		"Sch": [110880,905],
		"wie_Schule": [112146,1497],
		"ss": [115005,1162],
		"wie_Eszett": [116537,1790],
		"T": [120399,815],
		"wie_Theodor": [121304,1438],
		"U": [124447,901],
		"wie_Ulrich": [125883,1722],
		"Ue": [128742,1569],
		"wie_Uebermut": [130730,2092],
		"V": [134582,882],
		"wie_Viktor": [135995,1952],
		"W": [139394,1756],
		"wie_Wilhelm": [141279,2202],
		"X": [144975,1418],
		"wie_Xanthippe": [146524,1847],
		"Y": [150000,1781],
		"wie_Ypsilon": [151861,1698],
		"Z": [155018,1220],
		"wie_Zeppelin": [156548,1866]
	},
	html5: true,
	volume: 1,
	format: "mp3",
	preload: true,
	onloaderror: function() {
		$(".alert").append("<br /><strong class=\"font-weight-bold text-dark display-4\">페이지를 다시 읽어주시기 바래요.</strong>");
		console.log("다시 읽어주세요!");
	},
	onload: function() {
		// 음성 준비되면 HV 버튼 나타내기 
		$("#whole").show();
		$("#alt").hide();
		$(".alert").hide();

		$(".itm").on("click", function(idx) {
				var t = $(this);
				var ti = t.attr("id");
				if(ti.substring(ti.length-2,ti.length) == "lg") {
					ti = ti.substring(0, ti.length - 3);
				}
			if($("div#last").text() == "" || t.text() == "❚❚") {
				$("#last").text(ti);
				t.text("■");
				nagehts.seek();
				nagehts.play(ti);
				sen[ti]++;
	
				last = ti;
	
				$("#cnt-"+ti).text(sen[ti]);
			} else if(last == ti && nagehts.playing($("div#last").text())) {
				$("#last").text("");
				t.html(pa[ti]);
				nagehts.pause();
				sen[ti]--;
				$("#cnt-"+ti).text(sen[ti]);
			}

		});
	},
	onend: function() {
		$("div#last").text("");
		stopAll();
		$("#cnt-"+last).text(sen[last]);
		if(sen[last] == 2) {
			$("#"+last).find(".tran").show();
		}
	}


});


</script>
<!-- ion.sound finished -->
	<? } ?>
<?php include "footer.php"; ?>

	</body>
</html>
