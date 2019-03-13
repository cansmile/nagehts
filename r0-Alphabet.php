<?php include "header.php"; ?>
	<body>
<?php include "nav.php"; ?>
		<!-- 알림 시작 -->
<?php require_once "ready.php"; ?>
		<div class="alert alert-warning alert-dismissible fade show" role="alert">
			이 페이지의 알파벳이나 발음기호를 <strong>누르면 들립니다!</strong>
			<br>
			<button type="button" class="btn btn-primary btn-sm btn-inline" disabled>
				HV
			</button>
			를 누르면 전체 알파벳을 들으실 수 있어요.
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
						<button type="button" class="btn btn-primary ml-2 btn-inline itm" id="whole">
							HV
						</button>
						<button type="button" class="btn btn-primary ml-2 btn-inline itm" id="whole_p">
							❚❚
						</button></h3>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 text-center">
						<img class="rounded-circle itm" alt="A wie Anton" style="width: 140px; height: 140px;" src="images/Reihe 0/A.png" data-holder-rendered="true" id="A_lg">
						<span id="wie_Anton" class="itm"><h4>[a]</h4>
							<p>
								wie <strong>A</strong>nton
							</p></span>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 text-center">
						<img class="rounded-circle itm" alt="Ä wie Ärger" style="width: 140px; height: 140px;" src="images/Reihe 0/Ae.png" data-holder-rendered="true" id="Ä_lg">
						<span id="wie_Ärger" class="itm"><h4>[ɛ]</h4>
							<p>
								wie <strong>Ä</strong>rger
							</p></span>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 text-center">
						<img class="rounded-circle itm" alt="B wie Berta" style="width: 140px; height: 140px;" src="images/Reihe 0/B.png" data-holder-rendered="true" id="B_lg">
						<span id="wie_Berta" class="itm"><h4>[be]</h4>
							<p>
								wie <strong>B</strong>erta
							</p></span>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 text-center">
						<img class="rounded-circle itm" alt="C wie Cäsar" style="width: 140px; height: 140px;" src="images/Reihe 0/C.png" data-holder-rendered="true" id="C_lg">
						<span id="wie_Cäsar" class="itm"><h4>[tse]</h4>
							<p>
								wie <strong>C</strong>äsar
							</p></span>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 text-center">
						<img class="rounded-circle itm" alt="Ch wie Charlotte" style="width: 140px; height: 140px;" src="images/Reihe 0/Ch.png" data-holder-rendered="true" id="Ch_lg">
						<span id="wie_Charlotte" class="itm"><h4>[ç] [x] [k] [ʃ] [tʃ]</h4>
							<p>
								wie <strong>Ch</strong>arlotte
							</p></span>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 text-center">
						<img class="rounded-circle itm" alt="D wie Dora" style="width: 140px; height: 140px;" src="images/Reihe 0/D.png" data-holder-rendered="true" id="D_lg">
						<span id="wie_Dora" class="itm"><h4>[de]</h4>
							<p>
								wie <strong>D</strong>ora
							</p></span>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 text-center">
						<img class="rounded-circle itm" alt="E wie Emil" style="width: 140px; height: 140px;" src="images/Reihe 0/E.png" data-holder-rendered="true" id="E_lg">
						<span id="wie_Emil" class="itm"><h4>[e]</h4>
							<p>
								wie <strong>E</strong>mil
							</p></span>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 text-center">
						<img class="rounded-circle itm" alt="F wie Friedrich" style="width: 140px; height: 140px;" src="images/Reihe 0/F.png" data-holder-rendered="true" id="F_lg">
						<span id="wie_Friedrich" class="itm"><h4>[εf]</h4>
							<p>
								wie <strong>F</strong>riedrich
							</p></span>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 text-center">
						<img class="rounded-circle itm" alt="G wie Gustav" style="width: 140px; height: 140px;" src="images/Reihe 0/G.png" data-holder-rendered="true" id="G_lg">
						<span id="wie_Gustav" class="itm"><h4>[ge]</h4>
							<p>
								wie <strong>G</strong>ustav
							</p></span>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 text-center">
						<img class="rounded-circle itm" alt="H wie Heinrich" style="width: 140px; height: 140px;" src="images/Reihe 0/H.png" data-holder-rendered="true" id="H_lg">
						<span id="wie_Heinrich" class="itm"><h4>[ha]</h4>
							<p>
								wie <strong>H</strong>einrich
							</p></span>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 text-center">
						<img class="rounded-circle itm" alt="I wie Ida" style="width: 140px; height: 140px;" src="images/Reihe 0/I.png" data-holder-rendered="true" id="I_lg">
						<span id="wie_Ida" class="itm"><h4>[i]</h4>
							<p>
								wie <strong>I</strong>da
							</p></span>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 text-center">
						<img class="rounded-circle itm" alt="J wie Julius" style="width: 140px; height: 140px;" src="images/Reihe 0/J.png" data-holder-rendered="true" id="J_lg">
						<span id="wie_Julius" class="itm"><h4>[jɔt]</h4>
							<p>
								wie <strong>J</strong>ulius
							</p></span>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 text-center">
						<img class="rounded-circle itm" alt="K wie Kaufmann" style="width: 140px; height: 140px;" src="images/Reihe 0/K.png" data-holder-rendered="true" id="K_lg">
						<span id="wie_Kaufmann" class="itm"><h4>[ka]</h4>
							<p>
								wie <strong>K</strong>aufmann
							</p></span>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 text-center">
						<img class="rounded-circle itm" alt="L wie Ludwig" style="width: 140px; height: 140px;" src="images/Reihe 0/L.png" data-holder-rendered="true" id="L_lg">
						<span id="wie_Ludwig" class="itm"><h4>[εl]</h4>
							<p>
								wie <strong>L</strong>udwig
							</p></span>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 text-center">
						<img class="rounded-circle itm" alt="M wie Martha" style="width: 140px; height: 140px;" src="images/Reihe 0/M.png" data-holder-rendered="true" id="M_lg">
						<span id="wie_Martha" class="itm"><h4>[εm]</h4>
							<p>
								wie <strong>M</strong>artha
							</p></span>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 text-center">
						<img class="rounded-circle itm" alt="N wie Nordpol" style="width: 140px; height: 140px;" src="images/Reihe 0/N.png" data-holder-rendered="true" id="N_lg">
						<span id="wie_Nordpol" class="itm"><h4>[εn]</h4>
							<p>
								wie <strong>N</strong>ordpol
							</p></span>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 text-center">
						<img class="rounded-circle itm" alt="O wie Otto" style="width: 140px; height: 140px;" src="images/Reihe 0/O.png" data-holder-rendered="true" id="O_lg">
						<span id="wie_Otto" class="itm"><h4>[o:]</h4>
							<p>
								wie <strong>O</strong>tto
							</p></span>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 text-center">
						<img class="rounded-circle itm" alt="Ö wie Ökonom" style="width: 140px; height: 140px;" src="images/Reihe 0/Oe.png" data-holder-rendered="true" id="Ö_lg">
						<span id="wie_Ökonom" class="itm"><h4>[ø]</h4>
							<p>
								wie <strong>Ö</strong>konom
							</p></span>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 text-center">
						<img class="rounded-circle itm" alt="P wie Paula" style="width: 140px; height: 140px;" src="images/Reihe 0/P.png" data-holder-rendered="true" id="P_lg">
						<span id="wie_Paula" class="itm"><h4>[pe]</h4>
							<p>
								wie <strong>P</strong>aula
							</p></span>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 text-center">
						<img class="rounded-circle itm" alt="Q wie Quelle" style="width: 140px; height: 140px;" src="images/Reihe 0/Q.png" data-holder-rendered="true" id="Q_lg">
						<span id="wie_Quelle" class="itm"><h4>[ku]</h4>
							<p>
								wie <strong>Q</strong>uelle
							</p></span>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 text-center">
						<img class="rounded-circle itm" alt="R wie Richard" style="width: 140px; height: 140px;" src="images/Reihe 0/R.png" data-holder-rendered="true" id="R_lg">
						<span id="wie_Richard" class="itm"><h4>[εr]</h4>
							<p>
								wie <strong>R</strong>ichard
							</p></span>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 text-center">
						<img class="rounded-circle itm" alt="S wie Samuel" style="width: 140px; height: 140px;" src="images/Reihe 0/S.png" data-holder-rendered="true" id="S_lg">
						<span id="wie_Samuel" class="itm"><h4>[εs]</h4>
							<p>
								wie <strong>S</strong>amuel
							</p></span>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 text-center">
						<img class="rounded-circle itm" alt="Sch wie Schule" style="width: 140px; height: 140px;" src="images/Reihe 0/Sch.png" data-holder-rendered="true" id="Sch_lg">
						<span id="wie_Schule" class="itm"><h4>[ʃ]</h4>
							<p>
								wie <strong>Sch</strong>ule
							</p></span>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 text-center">
						<img class="rounded-circle itm" alt="β wie Eszett" style="width: 140px; height: 140px;" src="images/Reihe 0/ss.png" data-holder-rendered="true" id="ss_lg">
						<span id="wie_Eszett" class="itm"><h4>[ɛstsɛt]</h4>
							<p>
								wie Eszett
							</p></span>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 text-center">
						<img class="rounded-circle itm" alt="T wie Theodor" style="width: 140px; height: 140px;" src="images/Reihe 0/T.png" data-holder-rendered="true" id="T_lg">
						<span id="wie_Theodor" class="itm"><h4>[te]</h4>
							<p>
								wie <strong>T</strong>heodor
							</p></span>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 text-center">
						<img class="rounded-circle itm" alt="U wie Ulrich" style="width: 140px; height: 140px;" src="images/Reihe 0/U.png" data-holder-rendered="true" id="U_lg">
						<span id="wie_Ulrich" class="itm"><h4>[u]</h4>
							<p>
								wie <strong>U</strong>lrich
							</p></span>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 text-center">
						<img class="rounded-circle itm" alt="Ü wie Übermut" style="width: 140px; height: 140px;" src="images/Reihe 0/Ue.png" data-holder-rendered="true" id="Ue_lg">
						<span id="wie_Uebermut" class="itm"><h4>[y]</h4>
							<p>
								wie <strong>Ü</strong>bermut
							</p></span>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 text-center">
						<img class="rounded-circle itm" alt="V wie Viktor" style="width: 140px; height: 140px;" src="images/Reihe 0/V.png" data-holder-rendered="true" id="V_lg">
						<span id="wie_Viktor" class="itm"><h4>[fau̮]</h4>
							<p>
								wie <strong>V</strong>iktor
							</p></span>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 text-center">
						<img class="rounded-circle itm" alt="W wie Wilhelm" style="width: 140px; height: 140px;" src="images/Reihe 0/W.png" data-holder-rendered="true" id="W_lg">
						<span id="wie_Wilhelm" class="itm"><h4>[ve]</h4>
							<p>
								wie <strong>W</strong>ilhelm
							</p></span>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 text-center">
						<img class="rounded-circle itm" alt="X wie Xanthippe" style="width: 140px; height: 140px;" src="images/Reihe 0/X.png" data-holder-rendered="true" id="X_lg">
						<span id="wie_Xanthippe" class="itm"><h4>[iks]</h4>
							<p>
								wie <strong>X</strong>anthippe
							</p></span>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 text-center">
						<img class="rounded-circle itm" alt="Y wie Ypsilon" style="width: 140px; height: 140px;" src="images/Reihe 0/Y.png" data-holder-rendered="true" id="Y_lg">
						<span id="wie_Ypsilon" class="itm"><h4>[ʏpsilɔn]</h4>
							<p>
								wie <strong>Y</strong>psilon
							</p></span>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 text-center">
						<img class="rounded-circle itm" alt="Z wie Zeppelin" style="width: 140px; height: 140px;" src="images/Reihe 0/Z.png" data-holder-rendered="true" id="Z_lg">
						<span id="wie_Zeppelin" class="itm"><h4>[tsεt]</h4>
							<p>
								wie <strong>Z</strong>eppelin
							</p></span>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 mb-4 mt-2 text-center">
						<h2>Schreiben Sie Ihren Namen und buchstabieren Sie.
						<br>
						<small>이름을 써보고 스펠링을 말해보아요.</small></h2>
						<input type="text" class="form-control-lg" placeholder="Namen">
					</div>
				</div>
			</div>
		</section>
<?php include "footer.php"; ?>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="./js/jquery-3.3.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="./js/popper.min.js"></script>
		<script src="./js/bootstrap.js"></script>
		<!-- ion.sound -->
		<script src="./js/ion.sound.min.js"></script>
		<script>
			// 일단 HV 버튼과 일시정지 버튼 숨기기
			$("#whole").hide();
			$("#whole_p").hide();
			
			$(document).ready(function() {

				ion.sound({
					sounds : [{
						name : "Buchstabe",
						
						sprite: {
							"whole": [3.6,154.3],
							"A": [3.8,.7],
							"wie_Anton": [5.1,1.1],
							"Ä": [8.8,.6],
							"wie_Ärger": [10.2,1.3],
							"B": [13.8,.7],
							"wie_Berta": [15,1.3],
							"C": [18.4,.9],
							"wie_Cäsar": [19.5,1.3],
							"Ch": [23,.5],
							"wie_Charlotte": [24.5,1.2],
							"D": [28.3,.7],
							"wie_Dora": [29.6,1.2],
							"E": [33,.7],
							"wie_Emil": [34.5,1.2],
							"F": [37.8,.8],
							"wie_Friedrich": [39.4,1.1],
							"G": [43.6,.6],
							"wie_Gustav": [44.9,1.2],
							"H": [48.6,.6],
							"wie_Heinrich": [49.6,1.2],
							"I": [53.1,.8],
							"wie_Ida": [54.6,1.1],
							"J": [58.1,.8],
							"wie_Julius": [59.6,1.5],
							"K": [63.3,.8],
							"wie_Kaufmann": [64.7,1.5],
							"L": [68.5,.8],
							"wie_Ludwig": [69.9,1.1],
							"M": [72.8,.9],
							"wie_Martha": [74.8,1.3],
							"N": [77.8,.8],
							"wie_Nordpol": [79.2,1.3],
							"O": [82.7,.6],
							"wie_Otto": [84.4,1.1],
							"Ö": [87.1,.8],
							"wie_Ökonom": [88.5,1.4],
							"P": [91.6,.7],
							"wie_Paula": [92.9,1.3],
							"Q": [96.2,.8],
							"wie_Quelle": [97.7,1.2],
							"R": [101.4,.8],
							"wie_Richard": [102.6,1.2],
							"S": [106.6,.8],
							"wie_Samuel": [107.8,1.2],
							"Sch": [111,.8],
							"wie_Schule": [112.4,1.2],
							"ss": [115.2,.8],
							"wie_Eszett": [116.8,1.2],
							"T": [120.3,.9],
							"wie_Theodor": [121.9,1.4],
							"U": [124.5,.8],
							"wie_Ulrich": [126.2,1.3],
							"Ue": [129.2,.8],
							"wie_Uebermut": [131.2,1.4],
							"V": [134.6,1],
							"wie_Viktor": [136.3,1.3],
							"W": [139.8,1.1],
							"wie_Wilhelm": [141.7,1.4],
							"X": [145.4,.8],
							"wie_Xanthippe": [146.8,1.5],
							"Y": [150.3,1.2],
							"wie_Ypsilon": [152.1,1.3],
							"Z": [155.3,.8],
							"wie_Zeppelin": [156.8,1.2]
						}
					}],
					path : "<?php echo(preg_replace("`\/[^/]*\.php$`i", "/", ($_SERVER['PHP_SELF']))); ?>sounds/Reihe 0/",
					preload : true,
					volume : 1.0,
					
					ended_callback: function(obj) {
						// 전체 재생 끝나면 일시정지 버튼 숨기고 HV 버튼 보이기
						if(obj.part=="whole") {
							$("#whole").show();
							$("#whole_p").hide();
						};
					},
					ready_callback: function() {
						$(".itm").on("click", function () {
							if($(this).attr("id").substr(-2) == "lg") {
								// 큰 알파벳 id에서 _lg 빼기
								ion.sound.play("Buchstabe", {
									part: $(this).attr("id").replace("_lg","")
								});
							} else if($(this).attr("id").substr(-2) == "_p") {
								// 일시정지 버튼 누르면 HV 버튼 보이고 일시정지 버튼 없애기
								ion.sound.pause("Buchstabe", {
									part: "whole"
								});
								$("#whole").show();
								$(this).hide();
							} else {
								// 위의 2가지 경우 아니면 id를 그대로 가져다가 part이름으로 사용
								ion.sound.play("Buchstabe", {
									part: $(this).attr("id")
								});
								
								if($(this).attr("id") == "whole") {
									$(this).hide();
									$("#whole_p").show();
								};
							};
						});
						
						// 음성 준비되면 HV 버튼 나타내기 
						$("#whole").show();
						$("#alt").hide();
					}
				});
			});


		</script>
		<!-- ion.sound finished -->
	</body>
</html>