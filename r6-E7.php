<?php include "header.php"; ?>
<body>
<?php include "nav.php"; ?>
	<!-- 알림 시작 -->
	<?php require_once "ready.php"; ?>
	<!-- 알림 끝 -->
	<!-- 보기시작 -->
	<section class="bg-white rounded p-2" style="position: fixed; left: 0; bottom: 0; z-index: 9999; width: 100%;" id="wahl">
		<div class="container">
			<div class="row">
				<div class="col display-4 bg-<?php echo($color); ?> rounded text-center text-white font-weight-bold col-12">Wahl</div>
				<div class="col-12" id="itms">
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="1">Am</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="2">Samstagabend</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans1 btn-lg btn-outline-dark itm border-0" id="3">macht<span class="tran">&nbsp;<small>~을 하다</small></span></button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="4">Mina</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="5">eine</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="6">große</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="7">Party</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="8">.</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="9">Sie</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans1 btn-lg btn-outline-dark itm border-0" id="10">feiert<span class="tran">&nbsp;<small>축하하다</small></span></button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="11">ihren</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="12">20</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="13">.</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="14">Geburtstag</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="15">.</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="16">Am</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="17">Mittwoch</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans2 btn-lg btn-outline-dark itm border-0" id="18">ruft<span class="tran">&nbsp;<small>전화하다</small></span></button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="19">sie</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="20">ihre</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="21">Freunde</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans2 btn-lg btn-outline-dark itm border-0 18" id="22">an</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="23">und</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans2 btn-lg btn-outline-dark itm border-0" id="24">lädt<span class="tran">&nbsp;<small>초대하다</small></span></button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="25">sie</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans2 btn-lg btn-outline-dark itm border-0 24" id="26">ein</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="27">.</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="28">Alle</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans1 btn-lg btn-outline-dark itm border-0" id="29">kommen<span class="tran">&nbsp;<small>오다</small></span></button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="30">gern</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="31">zur</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="32">Party</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="33">.</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="34">Sie</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans2 btn-lg btn-outline-dark itm border-0" id="35">bringen<span class="tran">&nbsp;<small>가지고 오다</small></span></button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="36">einiges</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans2 btn-lg btn-outline-dark itm border-0 35" id="37">mit</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="38">:</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="39">Tim</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans3 btn-lg btn-outline-dark itm border-0" id="40">besorgt<span class="tran">&nbsp;<small>구입하다</small></span></button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="41">Getränke</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="42">,</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="43">Julia</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="44">und</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="45">Max</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans1 btn-lg btn-outline-dark itm border-0" id="46">kaufen<span class="tran">&nbsp;<small>사다</small></span></button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="47">Kekse</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="48">.</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="49">Sumin</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans2 btn-lg btn-outline-dark itm border-0" id="50">bringt<span class="tran">&nbsp;<small>가지고오다</small></span></button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="51">Musik-CDs</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans2 btn-lg btn-outline-dark itm border-0 50" id="52">mit</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="53">.</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="54">Es</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans1 btn-lg btn-outline-dark itm border-0" id="55">ist<span class="tran">&nbsp;<small>~이다</small></span></button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="56">Samstag</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="57">.</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="58">Mina</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans1 btn-lg btn-outline-dark itm border-0" id="59">schmückt<span class="tran">&nbsp;<small>꾸미다</small></span></button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="60">schön</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="61">die</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="62">Wohnung</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="63">und</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans2 btn-lg btn-outline-dark itm border-0" id="64">bereitet<span class="tran">&nbsp;<small>준비하다</small></span></button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="65">Essen</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="66">und</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="67">Trinken</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans2 btn-lg btn-outline-dark itm border-0 64" id="68">vor</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="69">.</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="70">Um</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="71">17</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="72">Uhr</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans3 btn-lg btn-outline-dark itm border-0" id="73">beginnt<span class="tran">&nbsp;<small>시작하다</small></span></button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="74">die</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="75">Party</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="76">.</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="77">Alle</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans1 btn-lg btn-outline-dark itm border-0" id="78">feiern<span class="tran">&nbsp;<small>축하하다</small></span></button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="79">,</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans1 btn-lg btn-outline-dark itm border-0" id="80">tanzen<span class="tran">&nbsp;<small>춤추다</small></span></button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="81">,</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans1 btn-lg btn-outline-dark itm border-0" id="82">lachen<span class="tran">&nbsp;<small>웃다</small></span></button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="83">und</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans3 btn-lg btn-outline-dark itm border-0" id="84">unterhalten sich<span class="tran">&nbsp;<small>말하다</small></span></button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="85">.</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="86">Nur</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="87">Minas</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="88">Eltern</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans1 btn-lg btn-outline-dark itm border-0" id="89">liegen<span class="tran">&nbsp;<small>누워있다</small></span></button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="90">wach</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="91">im</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="92">Bett</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="93">und</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans1 btn-lg btn-outline-dark itm border-0" id="94">denken sich<span class="tran">&nbsp;<small>생각하다</small></span></button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="95">:</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="96">„</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="97">Hoffentlich</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans2 btn-lg btn-outline-dark itm border-0" id="98">hört<span class="tran">&nbsp;<small>끝나다</small></span></button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="99">die</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="100">Party</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="101">bald</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 ml-1 btn ans2 btn-lg btn-outline-dark itm border-0 98" id="102">auf</button>
					<button type="button" class="p-0 m-0 pt-1 mt-1 btn ans0 btn-lg btn-outline-dark itm border-0" id="103">!“</button>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<!-- 고르는 아이템들 -->
			<div class="row">
				<div class="col-lg-12 mb-4 mt-2 text-center">
					<h2>[ <small>단어를 알맞은 칸(einfache Verben, trennbare Verben, untrennbare Verben)에<br> 넣으세요.</small> ]
					<button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0">
					HV
					</button><button type="button" class="btn btn-<?php echo($color); ?> ml-2 btn-inline so" id="0_p">
					❚❚
					</button>
					</h2>
				</div>
			</div>
			<div class="row">
				<div class="col border border-dark rounded p-2" id="trans">
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C1">Am</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C2">Samstagabend</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C3">macht</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C4">Mina</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C5">eine</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C6">große</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C7">Party</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C8">.</span>
					<span class="tran"><br>토요일 저녁에 미나는 파티를 크게 연다.<br></span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C9">Sie</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C10">feiert</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C11">ihren</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C12">20</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C13">.</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C14">Geburtstag</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C15">.</span>
					<span class="tran"><br>그녀는 자기의 스무살 생일을 축하한다.<br></span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C16">Am</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C17">Mittwoch</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C18">ruft</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C19">sie</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C20">ihre</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C21">Freunde</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C22">an</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C23">und</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C24">lädt</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C25">sie</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C26">ein</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C27">.</span>
					<span class="tran"><br>수요일에 친구들에게 전화를 해서 초대한다. <br></span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C28">Alle</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C29">kommen</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C30">gern</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C31">zur</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C32">Party</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C33">.</span>
					<span class="tran"><br>모두가 파티에 오는 것을 좋아한다.<br></span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C34">Sie</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C35">bringen</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C36">einiges</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C37">mit</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C38">:</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C39">Tim</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C40">besorgt</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C41">Getränke</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C42">,</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C43">Julia</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C44">und</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C45">Max</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C46">kaufen</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C47">Kekse</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C48">.</span>
					<span class="tran"><br>그들은 몇 가지를 가져온다: 팀은 음료를, 율리아와 맥스는 과자를 사온다.<br></span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C49">Sumin</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C50">bringt</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C51">Musik-CDs</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C52">mit</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C53">.</span>
					<span class="tran"><br>수민이는 음악 CD를 가져온다.<br></span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C54">Es</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C55">ist</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C56">Samstag</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C57">.</span>
					<span class="tran"><br>토요일이다.<br></span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C58">Mina</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C59">schmückt</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C60">schön</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C61">die</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C62">Wohnung</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C63">und</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C64">bereitet</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C65">Essen</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C66">und</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C67">Trinken</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C68">vor</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C69">.</span>
					<span class="tran"><br>미나는 아파트를 예쁘게 꾸미고 음식과 음료를 준비한다.<br></span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C70">Um</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C71">17</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C72">Uhr</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C73">beginnt</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C74">die</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C75">Party</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C76">.</span>
					<span class="tran"><br>17시에 파티가 시작된다.<br></span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C77">Alle</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C78">feiern</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C79">, </span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C80">tanzen</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C81">, </span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C82">lachen</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C83">und</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C84">unterhalten sich</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C85">.</span>
					<span class="tran"><br>모두 생일을 축하하고, 춤주고, 웃고, 이야기를 나눈다.<br></span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C86">Nur</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C87">Minas</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C88">Eltern</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C89">liegen</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C90">wach</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C91">im</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C92">Bett</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C93">und</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C94">denken sich</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C95">:</span>
					<span class="tran"><br>그녀의 부모님만 깨어서 침대에서 생각하신다.<br></span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C96">„</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C97">Hoffentlich</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C98">hört</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C99">die</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C100">Party</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C101">bald</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C102">auf</span>
					<span class="op-0 m-0 pt-1 mt-2 cbtn" style="font-size: 1.5em;" id="C103">!“</span>
					<span class="tran"><br>“파티가 금방 끝나길 바란다!”<br></span>
				</div>
			</div>
			<!-- 리스트  시작 -->
			<div class="row" id="lsts">
				<div style="min-height: 240px;" class="rounded-top bg-danger so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-1">
					<h2 class="btn btn-light btn-xl ttl d-block">
					<strong>einfache Verben</strong><br><small>단순동사</small></h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top bg-success so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-2">
					<h2 class="btn btn-light btn-xl ttl d-block">
					<strong>trennbare Verben</strong><br><small>분리동사</small></h2>&nbsp;
				</div>
				<div style="min-height: 240px;" class="rounded-top bg-info so itm-lst col-xs col-sm col-md col-lg pt-1 m-1" id="lst-3">
					<h2 class="btn btn-light btn-xl ttl d-block">
					<strong>untrennbare Verben</strong><br><small>비분리동사</small></h2>&nbsp;
				</div>
			</div>
			<!-- 리스트 끝 -->
			<!-- 정답화인 버튼 시작 -->
			<div class="row">
				<div class="btn my-3 btn-light col-sm-12 col-md-12 col-lg-12" id="chk">
					정답확인
				</div>
			</div>
			<!-- 정답확인 버튼 끝 -->
			<div class="row">
				<div class="col">&nbsp;</div>
				<div class="col-6">
					<table class="table">
						<thead>
							<tr>
								<th scope="col"><span class="px-2 py-1 m-1 bg-secondary text-white">TIPP</span></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>unter는 분리 및 비분리 전철로 사용될 수 있다.</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col">&nbsp;</div>
			</div>
		</div>
	</section>
	
	<div id="marg"></div>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="./<?php echo($root); ?>js/jquery-3.4.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="./<?php echo($root); ?>js/popper.min.js"></script>
	<script src="./<?php echo($root); ?>js/bootstrap.js"></script>
	<script src="./<?php echo($root); ?>js/taptogroup.js"></script>
	<!-- interact.min.js -->
	<script src="./<?php echo($root); ?>js/ion.sound.min.js"></script>
		<script>
			$("#0").hide();
			$("#0_p").hide();
			$(".tran").hide();
			$("#chk").hide();
			
			$(document).ready(function() {
				// 각 문장 재생 횟수 초기화
				var hm=new Array(), sen=new Array();
				for(i=0;
				i < $(".so").length;
				i++) {
					hm[i]=0;
					sen[i]=0;
				}
				ion.sound( {
					sounds : [ {
						name : "r6 U7",
						sprite : {
							"0": [19.55, 50.23]
						}
					}
					, {
						name: "dingdongdang",
							path: "sounds/"
					}
					, {
						name: "Cartoon_Boing",
							path: "sounds/"
					}
					],
					path : "<?php echo($root); ?>sounds/Reihe 6/",
					preload : true,
					volume : 1.0,
					multiplay: false,
					ended_callback: function(obj) {
						// 재생이 끝날 때 2번 이상이면 번역 보이기
						hmn=obj.part;
						hm[hmn]++;
						// 전체 재생 끝나면 일시정지 버튼 숨기고 HV 버튼 보이기
						if(obj.part=="0") {
							$("#0").show();
							$("#0_p").hide();
							if(hm[hmn] > 1) {
								$(".tran").show();
							}
						}
						else {
							if(obj.part > 17) {
								$("#"+obj.part).html("▶");
							}
							if(hm[hmn] > 1) {
								$("#"+hmn).closest("tr").find(".tran").show();
							}
						}
					}
					, ready_callback: function () {
						$(".o").on("click", function() {
							ion.sound.play("dingdongdang");
						}
						);
						$(".x").on("click", function() {
							ion.sound.play("Cartoon_Boing");
						}
						);
						$(".so").on("click", function () {
							if($(this).attr("id").substr(-2)=="_p") {
								// _p 붙어 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
								ion.sound.pause("r6 U7", {
									part: "0"
								}
								);
								$("#0").show();
								$(this).hide();
							}
							else if($(this).html()=="▶") {
								// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
								ion.sound.play("r6 U7", {
									part: $(this).attr("id")
								}
								);
								$(this).html("❚❚");
							}
							else if($(this).html()=="❚❚") {
								// 재생되고 있는 것은 일시정지 버튼 숨기고 HV 버튼 보이기
								ion.sound.pause("r6 U7", {
									part: $(this).attr("id")
								}
								);
								$(this).html("▶");
							}
							else {
								// _p 붙어 있지 않으면 id 그대로 재생
								ion.sound.play("r6 U7", {
									part: $(this).attr("id")
								}
								);
								// 전체 듣기 재생일 때는 일시정지 버튼 보이기
								if($(this).attr("id")=="0") {
									$(this).hide();
									$("#0_p").show();
								}
								;
							}
							;
						}
						);
						// 브라우져 어디를 누르든 실행
						$(document).on("click", function() {
							// 색 넣기
							ccl();
						}
						) // 색칠하자
						function crr(ts) {
							var cr="#C"+ ts.attr("id");
							if(ts.hasClass("ans1")) {
								$(cr).addClass("bg-danger");
								$(cr).addClass("text-white font-weight-bold rounded px-1");
							}
							else if(ts.hasClass("ans2")) {
								$(cr).addClass("bg-success");
								$(cr).addClass("text-white font-weight-bold rounded px-1");
							}
							else if(ts.hasClass("ans3")) {
								$(cr).addClass("bg-info");
								$(cr).addClass("text-white font-weight-bold rounded px-1");
							}
						}
						// 단어들 색칠하기: 상자 안에 있거나 선택되어 있거나
						function ccl() {
							// 단어색 모두 취소
							$(".cbtn").removeClass("bg-danger");
							$(".cbtn").removeClass("bg-success");
							$(".cbtn").removeClass("bg-info");
							$(".cbtn").removeClass("text-white font-weight-bold rounded px-1");
							// 상자 안에 있으면 색칠하기
							var il=$(".itm-lst").length;
							var bl=$(".cbtn").length;
							// 리스트 갯수 구하기
							for(var i=1;
							i <=il;
							i++) {
								// 버튼 정렬
								for(var j=bl;
								j > 0;
								j--) {
									var rr=$("#lst-"+ i + ">#"+ j);
									rr.insertAfter("#lst-"+ i + ">h2");
									crr(rr);
								}
							}
							// 선택되었으면 색칠하기
							$(".btn-secondary").each(function() {
								crr($(this));
							}
							) // 분리 전철을 합쳐볼까?
							var fl=0, lf, fn;
							$("#lst-2>button").each(function() {
								for(var i=1;
								i <=bl;
								i++) {
									if($(this).hasClass(i)) {
										if($("#lst-2>#"+ i).length) {
											$(this).html($(this).html() + " | "+ $("#"+i).html());
											$("#"+i).hide();
											$(this).removeClass(String(i));
										}
									}
								}
							}
							);
							$(".itm-lst>button").each(function() {
								if($(this).attr("id")==94) {
									$(this).html("sich denken<span class=\"tran\">&nbsp;<small>생각하다</small></span></button>");
									$(this).find(".tran").hide();
								}
								if($(this).attr("id")==84) {
									$(this).html("sich unterhalten<span class=\"tran\">&nbsp;<small>말하다</small></span></button>");
									$(this).find(".tran").hide();
								}
							}
							) // 버튼에 속성 넣기
							$(".itm-lst>button").addClass("btn-block btn-light");
							if($("#itms>button.ans1").length < 1 && $("#itms>button.ans2").length < 1 && $("#itms>button.ans3").length < 1) {
								$(".tran").show();
								$(".ans0").hide();
							}
						}
						<?php include "wahl.php";
						?> // 정답확인
						$("#chk").on("click", function() {
				if($("#wahl").visibility != "visible" && $(this).attr("id") == "chk") {
					$(this).attr("id", "done");
					$(".itm").each(function() {
						if($(this).parent().attr("id").length > 5) {
							var a = $(this).parent().attr("id").substr($(this).parent().attr("id").length - 2, 2);
						} else {
							var a = $(this).parent().attr("id").substr($(this).parent().attr("id").length - 1, 1);
						}
						$(".tran").show();
						if($(this).hasClass("ans"+ (a))) {
							$(this).addClass("text-success font-weight-bold");
						}
						else {
							$(this).addClass("text-warning font-weight-bold");
							$(this).find(".tran").show();

						}
						;

						if($(this).hasClass("text-warning")) {
							// $(this).text().insertAfter($("lst-"+($(this).attr("id").substr(3,))))
							for(var i = 1; i <= $(".itm-lst").length; i++) {
								if($(this).hasClass("ans"+i)) {
									for(var c = 1; c <= $(".cbtn").length; c++) {
										if($(this).hasClass(c)) {
											var cc = c;
										}
									}
									$(eval('"#lst-' + i + '"')).append("<button class=\"mt-1 mx-1 btn btn-lg btn-outline-dark btn-block text-danger bg-white font-weight-bold " + cc + "\" id=\"" + $(this).attr("id") + "\">" + $(this).html() + "</button>");
								}
							}
						};

					}
				);

				ccl();
				$("#lst-2>.undefined").each(function() {
					if(!$(this).hasClass("text-warning")) {
						$(this).remove();
					}
				}
				)
				;


				// 정답 확인 div 상자 배경색 속성 없애기
				$(this).removeClass("btn-light ");

				$(".itm-lst").each(function() {
					if($(this).find(".btn")) {
						$(this).find(".btn").addClass("okay");
					}
				});

				var qa = $(".okay").length; // 전체 문항 수
				var qr = $(".okay").length; // 맞춘 항목 수
				var pe = (qr / qa) * 100; // 정답 비율
				var tcl = "white"; // 기본 문자색

				// 분류 기준은 100%, 80%, 60%, 40%
				if(pe > 99) {
					var st = "원어민이세요?";
					var cl = "lime";
					var tcl = "dark";
				} else if(pe > 74) {
					var st = "어! 좀 하시는데요~^^";
					var cl = "success";
				} else if(pe > 49) {
					var st = "쓰읍~ 다시 해 보실까요?";
					var cl = "primary";
				} else {
					var st = "좀 더 분발해 주세요~";
					var cl = "danger";
				}

				$(this).addClass("btn-" + cl + " text-" + tcl);
				$(this).html("<h4>" + qa + "문제 중 " + qr + "개를 맞히셨네요!<br>" + st + "</h4>");

			}
			}
						);
						$("#0").show();
						$(".alert").hide();
						$("#3").insertAfter("#lst-1>h2");
						ccl();
					}
				}
				);
			}
			);

		</script>
		<!-- ion.sound finished -->
<?php include "footer.php"; ?>
	</body>
</html>