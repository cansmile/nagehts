<?php include "header.php"; ?>
	<body>
		<?php include "nav.php"; ?>
		<?php require_once "ready.php"; ?>
<style>
	.video-container {position:relative; padding-bottom:56.25%; height:0; overflow:hidden;} 
	.video-container iframe,.video-container object,.video-container embed {position:absolute; top:0; left:0; width:100%; height:100%;} 
</style>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
	이 페이지의 알파벳이나 발음기호를 <strong>누르면 누른 위치에 해당하는 발음이 들립니다!</strong>
	<br>
	<button type="button" class="btn btn-<?=$color ?> btn-sm d-inline" disabled>
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
				<small>듣고 따라해보세요.</small>
				<button type="button" class="btn btn-<?=$color ?> ml-2 btn-inline itm" id="whole">
					HV
				</button></h2>
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
				-
				<button type="button" class="btn btn-outline-primary my-2 btn-lg itm" id="Ä">
					<strong>Ä</strong>
				</button>
				-
				<button type="button" class="btn btn-outline-primary my-2 btn-lg itm" id="Ö">
					<strong>Ö</strong>
				</button>
				-
				<button type="button" class="btn btn-outline-primary my-2 btn-lg itm" id="Ü">
					<strong>Ü</strong>
				</button>
				-
				<button type="button" class="btn btn-outline-primary my-2 btn-lg itm" id="ß">
					<strong>ß</strong>
				</button>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 mb-4 mt-2 text-center">
				<h3>Telefon-Alphabet
				<br>
				<small>텔레폰알파벳</small></h3>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="A wie Anton" style="width: 140px; height: 140px;" src="<?=$root ?>images/Reihe 0/A.png">
				<button class="itm btn btn-outline-dark" id="a">▶</button>
				<span><h4>[a]</h4>
					<p>
						wie <strong>A</strong>nton
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Anton">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="Ä wie Ärger" style="width: 140px; height: 140px;" src="<?=$root ?>images/Reihe 0/Ae.png">
				<button class="itm btn btn-outline-dark" id="ɛ">▶</button>
				<span><h4>[ɛ]</h4>
					<p>
						wie <strong>Ä</strong>rger
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Ärger">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="B wie Berta" style="width: 140px; height: 140px;" src="<?=$root ?>images/Reihe 0/B.png">
				<button class="itm btn btn-outline-dark" id="be">▶</button>
				<span><h4>[be]</h4>
					<p>
						wie <strong>B</strong>erta
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Berta">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="C wie Cäsar" style="width: 140px; height: 140px;" src="<?=$root ?>images/Reihe 0/C.png">
				<button class="itm btn btn-outline-dark" id="tse">▶</button>
				<span><h4>[tse]</h4>
					<p>
						wie <strong>C</strong>äsar
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Cäsar">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="Ch wie Charlotte" style="width: 140px; height: 140px;" src="<?=$root ?>images/Reihe 0/Ch.png"true">
				<button class="itm btn btn-outline-dark" id="ç">▶</button>
				<span><h4>[ç] [x] [k] [ʃ] [tʃ]</h4>
					<p>
						wie <strong>Ch</strong>arlotte
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Charlotte">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="D wie Dora" style="width: 140px; height: 140px;" src="<?=$root ?>images/Reihe 0/D.png">
				<button class="itm btn btn-outline-dark" id="de">▶</button>
				<span><h4>[de]</h4>
					<p>
						wie <strong>D</strong>ora
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Dora">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="E wie Emil" style="width: 140px; height: 140px;" src="<?=$root ?>images/Reihe 0/E.png">
				<button class="itm btn btn-outline-dark" id="e">▶</button>
				<span><h4>[e]</h4>
					<p>
						wie <strong>E</strong>mil
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Emil">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="F wie Friedrich" style="width: 140px; height: 140px;" src="<?=$root ?>images/Reihe 0/F.png">
				<button class="itm btn btn-outline-dark" id="εf">▶</button>
				<span><h4>[εf]</h4>
					<p>
						wie <strong>F</strong>riedrich
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Friedrich">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="G wie Gustav" style="width: 140px; height: 140px;" src="<?=$root ?>images/Reihe 0/G.png">
				<button class="itm btn btn-outline-dark" id="ge">▶</button>
				<span><h4>[ge]</h4>
					<p>
						wie <strong>G</strong>ustav
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Gustav">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="H wie Heinrich" style="width: 140px; height: 140px;" src="<?=$root ?>images/Reihe 0/H.png">
				<button class="itm btn btn-outline-dark" id="ha">▶</button>
				<span><h4>[ha]</h4>
					<p>
						wie <strong>H</strong>einrich
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Heinrich">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="I wie Ida" style="width: 140px; height: 140px;" src="<?=$root ?>images/Reihe 0/I.png">
				<button class="itm btn btn-outline-dark" id="i">▶</button>
				<span><h4>[i]</h4>
					<p>
						wie <strong>I</strong>da
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Ida">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="J wie Julius" style="width: 140px; height: 140px;" src="<?=$root ?>images/Reihe 0/J.png">
				<button class="itm btn btn-outline-dark" id="jɔt">▶</button>
				<span><h4>[jɔt]</h4>
					<p>
						wie <strong>J</strong>ulius
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Julius">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="K wie Kaufmann" style="width: 140px; height: 140px;" src="<?=$root ?>images/Reihe 0/K.png">
				<button class="itm btn btn-outline-dark" id="ka">▶</button>
				<span><h4>[ka]</h4>
					<p>
						wie <strong>K</strong>aufmann
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Kaufmann">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="L wie Ludwig" style="width: 140px; height: 140px;" src="<?=$root ?>images/Reihe 0/L.png">
				<button class="itm btn btn-outline-dark" id="εl">▶</button>
				<span><h4>[εl]</h4>
					<p>
						wie <strong>L</strong>udwig
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Ludwig">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="M wie Martha" style="width: 140px; height: 140px;" src="<?=$root ?>images/Reihe 0/M.png">
				<button class="itm btn btn-outline-dark" id="εm">▶</button>
				<span><h4>[εm]</h4>
					<p>
						wie <strong>M</strong>artha
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Martha">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="N wie Nordpol" style="width: 140px; height: 140px;" src="<?=$root ?>images/Reihe 0/N.png">
				<button class="itm btn btn-outline-dark" id="εn">▶</button>
				<span><h4>[εn]</h4>
					<p>
						wie <strong>N</strong>ordpol
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Nordpol">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="O wie Otto" style="width: 140px; height: 140px;" src="<?=$root ?>images/Reihe 0/O.png">
				<button class="itm btn btn-outline-dark" id="o:">▶</button>
				<span><h4>[o:]</h4>
					<p>
						wie <strong>O</strong>tto
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Otto">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="Ö wie Ökonom" style="width: 140px; height: 140px;" src="<?=$root ?>images/Reihe 0/Oe.png">
				<button class="itm btn btn-outline-dark" id="ø">▶</button>
				<span><h4>[ø]</h4>
					<p>
						wie <strong>Ö</strong>konom
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Ökonom">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="P wie Paula" style="width: 140px; height: 140px;" src="<?=$root ?>images/Reihe 0/P.png">
				<button class="itm btn btn-outline-dark" id="pe">▶</button>
				<span><h4>[pe]</h4>
					<p>
						wie <strong>P</strong>aula
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Paula">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="Q wie Quelle" style="width: 140px; height: 140px;" src="<?=$root ?>images/Reihe 0/Q.png">
				<button class="itm btn btn-outline-dark" id="ku">▶</button>
				<span><h4>[ku]</h4>
					<p>
						wie <strong>Q</strong>uelle
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Quelle">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="R wie Richard" style="width: 140px; height: 140px;" src="<?=$root ?>images/Reihe 0/R.png">
				<button class="itm btn btn-outline-dark" id="εr">▶</button>
				<span><h4>[εr]</h4>
					<p>
						wie <strong>R</strong>ichard
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Richard">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="S wie Samuel" style="width: 140px; height: 140px;" src="<?=$root ?>images/Reihe 0/S.png">
				<button class="itm btn btn-outline-dark" id="εs">▶</button>
				<span><h4>[εs]</h4>
					<p>
						wie <strong>S</strong>amuel
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Samuel">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="Sch wie Schule" style="width: 140px; height: 140px;" src="<?=$root ?>images/Reihe 0/Sch.png">
				<button class="itm btn btn-outline-dark" id="ʃ">▶</button>
				<span><h4>[ʃ]</h4>
					<p>
						wie <strong>Sch</strong>ule
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Schule">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="β wie Eszett" style="width: 140px; height: 140px;" src="<?=$root ?>images/Reihe 0/ss.png">
				<button class="itm btn btn-outline-dark" id="ɛstsɛt">▶</button>
				<span><h4>[ɛstsɛt]</h4>
					<p>
						wie Eszett
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Eszett">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="T wie Theodor" style="width: 140px; height: 140px;" src="<?=$root ?>images/Reihe 0/T.png">
				<button class="itm btn btn-outline-dark" id="te">▶</button>
				<span><h4>[te]</h4>
					<p>
						wie <strong>T</strong>heodor
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Theodor">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="U wie Ulrich" style="width: 140px; height: 140px;" src="<?=$root ?>images/Reihe 0/U.png">
				<button class="itm btn btn-outline-dark" id="u">▶</button>
				<span><h4>[u]</h4>
					<p>
						wie <strong>U</strong>lrich
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Ulrich">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="Ü wie Übermut" style="width: 140px; height: 140px;" src="<?=$root ?>images/Reihe 0/Ue.png">
				<button class="itm btn btn-outline-dark" id="y">▶</button>
				<span><h4>[y]</h4>
					<p>
						wie <strong>Ü</strong>bermut
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Uebermut">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="V wie Viktor" style="width: 140px; height: 140px;" src="<?=$root ?>images/Reihe 0/V.png">
				<button class="itm btn btn-outline-dark" id="fau">▶</button>
				<span><h4>[fau̮]</h4>
					<p>
						wie <strong>V</strong>iktor
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Viktor">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="W wie Wilhelm" style="width: 140px; height: 140px;" src="<?=$root ?>images/Reihe 0/W.png">
				<button class="itm btn btn-outline-dark" id="ve">▶</button>
				<span><h4>[ve]</h4>
					<p>
						wie <strong>W</strong>ilhelm
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Wilhelm">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="X wie Xanthippe" style="width: 140px; height: 140px;" src="<?=$root ?>images/Reihe 0/X.png">
				<button class="itm btn btn-outline-dark" id="iks">▶</button>
				<span><h4>[iks]</h4>
					<p>
						wie <strong>X</strong>anthippe
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Xanthippe">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="Y wie Ypsilon" style="width: 140px; height: 140px;" src="<?=$root ?>images/Reihe 0/Y.png">
				<button class="itm btn btn-outline-dark" id="ʏpsilɔn">▶</button>
				<span><h4>[ʏpsilɔn]</h4>
					<p>
						wie <strong>Y</strong>psilon
					</p>
					<button class="itm btn btn-sm btn-outline-dark" id="wie_Ypsilon">▶</button>
				</span>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 text-center">
				<img class="rounded-circle" alt="Z wie Zeppelin" style="width: 140px; height: 140px;" src="<?=$root ?>images/Reihe 0/Z.png">
				<button class="itm btn btn-outline-dark" id="tsεt">▶</button>
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
		<div class="row"><div class="col-12"><div class="video-container rounded"><object width="320" height="240"><param name="movie" value="https://www.youtube.com/v/N8JP3aSDqWY?version=3"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="https://www.youtube.com/v/N8JP3aSDqWY?version=3" type="application/x-shockwave-flash" width="320" height="240" allowscriptaccess="always" allowfullscreen="true"></embed></object></div></div></div>
	</div>
</section>
<div id="last" class="d-none"></div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="./<?=$root ?>js/jquery-3.4.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="./<?=$root ?>js/popper.min.js"></script>
<script src="./<?=$root ?>js/bootstrap.js"></script>
<!-- ion.sound -->
<script src="./<?=$root ?>js/howler.core.js"></script>
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
	src: ["./<?=$root ?>sounds/Reihe 0/r0 Alphabet.mp3"],
	sprite : {
		"whole": [1490,257528],
		"A": [11531, 1219],
		"a": [113658, 679],
		"wie_Anton": [114634, 1410],
		"Ä": [98349, 1846],
		"ɛ": [117667, 570],
		"wie_Ärger": [118500, 1403],
		"B": [14566, 1352],
		"be": [121604, 700],
		"wie_Berta": [122639, 1432],
		"C": [17500, 1542],
		"tse": [125693, 743],
		"wie_Cäsar": [126820, 1380],
		"ç": [129977, 613],
		"wie_Charlotte": [130980, 1407],
		"D": [21091, 1531],
		"de": [134308, 754],
		"wie_Dora": [135420, 1375],
		"E": [24285, 1548],
		"e": [138569, 876],
		"wie_Emil": [139642, 1430],
		"F": [28172, 1419],
		"εf": [143433, 722],
		"wie_Friedrich": [144520, 1446],
		"G": [31118, 1395],
		"ge": [147741, 850],
		"wie_Gustav": [148712, 1443],
		"H": [34514, 1262],
		"ha": [151950, 1263],
		"wie_Heinrich": [153095, 1591],
		"I": [37705, 1457],
		"i": [156304, 734],
		"wie_Ida": [157339, 1225],
		"J": [41126, 1696],
		"jɔt": [160514, 716],
		"wie_Julius": [161648, 1699],
		"K": [44902, 1355],
		"ka": [164852, 891],
		"wie_Kaufmann": [166044, 1396],
		"L": [48465, 1662],
		"εl": [169679, 758],
		"wie_Ludwig": [170797, 1317],
		"M": [52056, 1469],
		"εm": [174577, 564],
		"wie_Martha": [175615, 1352],
		"N": [56193, 1386],
		"εn": [178995, 699],
		"wie_Nordpol": [179917, 1468],
		"O": [59244, 1448],
		"o:": [183571, 654],
		"wie_Otto": [184998, 1092],
		"Ö": [101064, 1828],
		"ø": [187734, 666],
		"wie_Ökonom": [188806, 1341],
		"P": [62728, 1296],
		"pe": [192358, 805],
		"wie_Paula": [193490, 1297],
		"Q": [66127, 1388],
		"ku": [197121, 655],
		"wie_Quelle": [198154, 1288],
		"R": [69486, 1381],
		"εr": [201653, 671],
		"wie_Richard": [202729, 1251],
		"S": [72826, 1428],
		"εs": [207139, 757],
		"wie_Samuel": [208238, 1274],
		"ʃ": [211058, 744],
		"wie_Schule": [212144, 1362],
		"ß": [106480, 1688],
		"ɛstsɛt": [215901, 1063],
		"wie_Eszett": [217263, 1379],
		"T": [76150, 1498],
		"te": [221423, 859],
		"wie_Theodor": [222560, 1630],
		"U": [79621, 1670],
		"u": [225886, 744],
		"wie_Ulrich": [227017, 1550],
		"Ü": [103915, 1871],
		"y": [230705, 726],
		"wie_Uebermut": [231739, 1586],
		"V": [83022, 1399],
		"fau": [235257, 814],
		"wie_Viktor": [236359, 1425],
		"W": [87520, 1526],
		"ve": [239876, 577],
		"wie_Wilhelm": [240959, 1542],
		"X": [90508, 1454],
		"iks": [244646, 722],
		"wie_Xanthippe": [245755, 1539],
		"Y": [93334, 1354],
		"ʏpsilɔn": [249555, 1138],
		"wie_Ypsilon": [250961, 1821],
		"Z": [95923, 998],
		"tsεt": [254956, 994],
		"wie_Zeppelin": [256186, 1697]
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
		// $(".alert").hide();

		$(".itm").on("click", function(idx) {
				var t = $(this);
				var ti = t.attr("id");
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
<?php include "footer.php"; ?>

	</body>
</html>
