<?php
$hdr = "nagehts";
$dbn = "wordpress";
$em = array("0228khw@naver.com","1121totoro@daum.net","1l2j3h4g@gmail.com","2014khm@naver.com","402wnwn@naver.com","467pink00ju@naver.com","489sean224@naver.com","601moon_jihoo@naver.com","9707570@naver.com","a77078615@gmail.com","ac_1217@naver.com","adg6110@naver.com","agapia1104@naver.com","anita0811@naver.com","ankt1228@naver.com","artpqlile00@naver.com","been612@naver.com","bellsa99@naver.com","bhseo21@naver.com","bing_gu_dira@naver.com","bis8348@naver.com","choudge@naver.com","chris3251@naver.com","cjycjy8237@naver.com","cv4541@naver.com","da-vely@naver.com","danbeena@naver.com","daniel5909@naver.com","david285@naver.com","dbtprhkd3324@gmail.com","ddd0819@naver.com","dhtmdghks1729@naver.com","dksgytjs123@naver.com","dksleek@naver.com","dldmlwo999@naver.com","dlfp4248@naver.com","dlthf2109@naver.com","dodo001031@naver.com","dpfls0928@naver.com","dpwl2325@naver.com","dudrhkd115@naver.com","duswn6654@naver.com","dydxhrlsla@naver.com","eacu123@naver.com","ejbang2002@naver.com","elysia76@naver.com","eogns0410@naver.com","felizeunsu@gmail.com","flsk0726@naver.com","gc71316@gmail.com","ghe54@naver.com","gig3390@gmail.com","goko641@naver.com","grace010707@naver.com","grace8261@naver.com","guitarist0910@naver.com","guiyong08@naver.com","guralwn@gmail.com","ha03e0@naver.com","hajinny01@naver.com","hand1795@naver.com","hanju0131@naver.com","happy1ii@naver.com","harnon68@gmail.com","hayoung_98@naver.com","heeseung7925@naver.com","hjlee1124@naver.com","hmm0929@naver.com","hsr0274@naver.com","hsw3655@naver.com","hw662@naver.com","hybe0215@naver.com","inaa1506@naver.com","iybjing2987@naver.com","jangwnsgk@gmail.com","jcityfys@gmail.com","jebisori@gmail.com","jenny8749@naver.com","jiho5457@naver.com","jihyunkim14@naver.com","jin12@puts.ac.kr","jiyc2000@naver.com","jiye910910@naver.com","jo7714@naver.com","john-choi84@naver.com","john504666@gmail.com","johnje01@naver.com","jueuney@naver.com","juhebaek@naver.com","just378@naver.com","justine1103@naver.com","jw000818@naver.com","jyhaha7@naver.com","kal321098@naver.com","kangblue1227@naver.com","kesita.eta@gmail.com","khaoh@naver.com","khjkhj830@naver.com","kickbot@naver.com","kieuthuanlx@gmail.com","kimyejoo630@naver.com","kkss5132@naver.com","kpo9004@naver.com","kyi998876@naver.com","kyn93416@gmail.com","leesoomin112@naver.com","lovein12181@naver.com","lyutaehyun@gmail.com","mindelion1962@naver.com","misukan@hanmail.net","moomin0527@naver.com","moonhaney0526@gmail.com","moonjh0116@gmail.com","moonpark03@naver.com","nsk05999@gmail.com","okokvvv@naver.com","osr1126@naver.com","park2000t@naver.com","pdy4918@naver.com","pf0915@naver.com","pinktb@naver.com","powergkdus@naver.com","reindeer7146@naver.com","rinhanai@naver.com","rkdalthd678@naver.com","rkdtjdals42@naver.com","rnjswnd301@naver.com","rwg0941@naver.com","samyulchung02@gmail.com","seochanduk@naver.com","seongbin337@naver.com","sgjung76@hotmail.com","shineypark@naver.com","shw6531@naver.com","silveriggo@nate.com","sionyr0714@naver.com","sjyy4330@gmail.com","skudream@gmail.com","somee39@naver.com","sonhyona@naver.com","sooeon0424@naver.com","starsy15@naver.com","thatonedudyoujustdontknow@gmail.com","thd090335@gmail.com","thfwldkd@naver.com","timothy3682@naver.com","tisdhqm@naver.com","tjghks0831@hanmail.net","tlsdbcjf1012@naver.com","toptm@naver.com","vc3482@naver.com","wdr0131@naver.com","wisdom_east@naver.com","wjsejswl@naver.com","wldnjs9092@naver.com","wngud3060@naver.com","wolfwolfbb@naver.com","xodms980410@naver.com","y011125@naver.com","yckim5675@naver.com","yedam337@naver.com","yesel0906@naver.com","yeyuki@naver.com","yg3412@naver.com","yhe320@naver.com","yjlovesky12@naver.com","yonghw1234@naver.com","you1852@hanmail.net","youngchan6839@gmail.com","zezonesjy@naver.com");
$link = mysqli_connect('localhost', 'root', 'qudwnWkd321!@#');
if (!$link) { die('연결에 실패했습니다: ' . mysqli_error());}
echo(date("Y-m-d H:i:s", time())."\n");
// echo 'MySQL 서버에 정상적으로 연결되었습니다.';


mysqli_select_db($link, $dbn);
for($i = 0; $i < sizeof($em); $i++) {
	$q = "SELECT * FROM `".$hdr."_users` WHERE `user_email` LIKE '".$em[$i]."' ORDER BY `ID` ASC";
	$qr = mysqli_query($link, $q);
	if($qr!=false) {
		$r = mysqli_fetch_array($qr);
		// print_r("<br>".$em[$i]." = ".$r[0]);
		$uid = $r[0];
		$q = "SELECT `meta_value` FROM `".$hdr."_usermeta` WHERE `user_id` = ".$uid." AND `meta_key` = '".$hdr."_capabilities'";
		// echo($q."<br>");
		$qr = mysqli_query($link, $q);
		if($qr!=false) {
			$r = mysqli_fetch_array($qr); 
			// echo("<br>역할: ".$r[0]."<br>");
			// print_r("<br>".$r."<br>");
			if($r[0] == "a:1:{s:10:\"subscriber\";b:1;}") {
				echo("맞다(".$em[i].")");
				$q = "UPDATE `".$hdr."_usermeta` SET `meta_value` = 'a:1:{s:7:\"student\";b:1;}' WHERE `".$hdr."_usermeta`.`user_id` = ".$uid." and `".$hdr."_usermeta`.`meta_key` = '".$hdr."_capabilities';";
				$qr = mysqli_query($link, $q);
				// echo("<br>".$q."<br>");
			} else {
				// echo("아냐");
			}
		}
		// echo("<br>");
	}
}
?>
