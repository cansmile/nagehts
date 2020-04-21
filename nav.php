<!-- 넵바 시작 -->
<?php
/* 당분간 필요한 변수 */
$lt = 4; /* 제목 데쉬 이후의 글자 수 제한 */
$rm = 8; /* 완성된 페이지만 메인에 노출 */
$subttl = 21; /* 모바일 레이아웃에서 잘리는 글자수 */

/* 개발자용 */
$edt = true;

/* 색상 */
$col = array(
    "blue",
    "brown",
    "darkblue",
    "darkgray",
    "flame",
    "gold",
    "grape",
    "gray",
    "green",
    "khaki",
    "lightcyan",
    "navy",
    "orange",
    "pink",
    "primary",
    "purple",
    "red",
    "redbeen",
    "scarlet",
    "skyblue",
    "violet",
    "warning",
    "wine",
    "yellowgreen"
);
/* $col = array(
    "blue",
    "brown",
    "danger",
    "darkblue",
    "darkgray",
    "default",
    "flame",
    "gold",
    "grape",
    "gray",
    "green",
    "info",
    "inverse",
    "khaki",
    "lightcyan",
    "navy",
    "orange",
    "pink",
    "primary",
    "purple",
    "red",
    "redbeen",
    "scarlet",
    "skyblue",
    "success",
    "violet",
    "warning",
    "wine",
    "yellow",
    "yellowgreen"
); */
$color = $col[array_rand($col)];

/* header 에서 정의된 변수 [ $fn 은 파일명만,
$bn 은 확장자 포함 ] */
$a = " active";
$sr = " <span class=\"sr-only\">(current)<\/span><\/a>";


/* 각 과별 대단원 파일명과 제목 */
$itl = array(
    "D" => "Deutschland",
    0 => "Deutschland und die deutsche Spache",
    1 => "Wie heißen Sie?",
    2 => "Woher kommen Sie?",
    3 => "Wer ist das?",
    4 => "In meiner Wohnung",
    5 => "Essen und Trinken",
    6 => "Was machst du heute?",
    7 => "Was hast du am Wochenende vor?",
    8 => "Was fehlt Ihnen?",
    9 => "Feste! Feste!",
    10 => "Wie komme ich zur Bank?"
);

$itl_k = array(
    "D" => "독일은…",
    0 => "독일과 독일어",
    1 => "이름이 어떻게 되시나요?",
    2 => "어디서 오셨나요?",
    3 => "이 분은 누구인가요?",
    4 => "나의 집에서",
    5 => "먹고 마시기",
    6 => "오늘 뭐하니?",
    7 => "주말에 뭐 하니?",
    8 => "어디가 아픈가요?",
    9 => "축제! 축제!",
    10 => "은행에 어떻게 가나요?"
);

/* 각 과별 중단원 파일명과 제목 */
$tl = array(
    array(
        "r0-Alphabet"=>"A. Alphabet",
        "r0-Quizzzz"=>"B. Quiz",
        "r0-Zuordnung"=>"C. Zuordnung"
    ),
    array(
        "r1-Guten Tag!"=> "A. Guten Tag!",
        "r1-Wie heissen Sie"=>"B. Wie heißen Sie?",
        "r1-Wie geht es Ihnen"=>"C. Wie geht es Ihnen?",
        "r1-Wer ist Hyun Kim"=>"D. Wer ist Hyun Kim?",
        "r1-Zahlen(1-10)"=>"F. Zahlen(1~10)",
        "r1-Uebungen"=>"G. Übungen",
        "r1-Grammatik und Wendungen"=>"H. Grammatik und Wendungen"
    ),
    array(
        "r2-Woher kommen Sie!"=>"A. Woher kommen Sie?",
        "r2-Ich bin Koreanerin"=>"B. Ich bin Koreanerin.",
        "r2-Welche Sprachen sprechen Sie"=>"C. Welche Sprachen sprechen Sie?",
        "r2-Wo liegt das Land"=>"D. Wo liegt das Land?",
        "r2-Uebungen"=>"E. Übungen",
        "r2-Grammatik und Wendungen"=>"F. Grammatik und Wendungen"
    ),
    array(
        "r3-Wer ist das"=>"A. Wer ist das?",
        "r3-Wie alt ist er"=>"B. Wie alt ist er?",
        "r3-Wie viele Geschwister hast du"=>"C. Wie viele Geschwister hast du?",
        "r3-Was sind Sie von Beruf"=>"D. Was sind Sie von Beruf?",
        "r3-Visitenkarten"=>"E. Visitenkarten",
        "r3-Uebungen"=>"F. Übungen",
        "r3-Grammatik und Wendungen"=>"G. Grammatik und Wendungen"
    ),
    array(
        "r4-Wohnen"=>"A. Wohnen",
        "r4-Im Zimmer"=>"B. Im Zimmer",
        "r4-Was ist das"=>"C. Was ist das?",
        "r4-Wie ist das"=>"D. Wie ist das?",
        "r4-Uebungen"=>"E. Übungen",
        "r4-Grammatik und Wendungen"=>"F. Grammatik und Wendungen"
    ),
    array(
        "r5-Essen und Trinken"=>"A. Essen und Trinken",
        "r5-Was isst du gern und was trinkst du gern"=>"B. Was isst du gern und was trinkst du gern?",
        "r5-Was isst und trinkt er,sie"=>"C. Was isst und trinkt er/sie?",
        "r5-Im Restaurant. Was bekommen Sie"=>"D. Im Restaurant. Was bekommen Sie?",
        "r5-Waehrend des Essens"=>"E. Während des Essens",
        "r5-Was bezahlen Sie"=>"F. Was bezahlen Sie?",
        "r5-Uebungen"=>"G. Übungen",
        "r5-Grammatik und Wendungen"=>"H. Grammatik und Wendungen"
    ),
    array(
        "r6-Was machst du gern"=>"A. Was machst du gern?",
        "r6-Wie spaet ist es"=>"B. Wie spät ist es?",
        "r6-Wann hast du Deutschunterricht"=>"C. Wann hast du Deutschunterricht?",
        "r6-Tagesablauf"=>"D. Tagesablauf",
        "r6-Uebungen"=>"E. Übungen",
        "r6-Grammatik und Wendungen"=>"F. Grammatik und Wendungen"
    ),
    array(
        "r7-Wochenende Was haben Sie am Wochenende vor"=>"A. Wochenende: Was haben Sie am Wochenende vor?",
        "r7-Verabredung. Hast du heute Abend Zeit"=>"B. Verabredung. Hast du heute Abend Zeit?",
        "r7-Anweisungen"=>"C. Anweisungen: Was kann man, was darf man nicht?",
        "r7-Uebungen"=>"D. Übungen",
        "r7-Grammatik und Wendungen"=>"E. Grammatik und Wendungen"
    ),
    array(
        "r8-Koerper und Sport"=>"A. Körper und Sport",
        "r8-Koerperteile und Taetigkeiten"=>"B. Körperteile und Tätigkeiten",
        "r8-Krankheiten und Schmerzen"=>"C. Krankheiten und Schmerzen",
        "r8-Beim Arzt"=>"D. Beim Arzt",
        "r8-Uebungen"=>"E. Übungen",
        "r8-Grammatik und Wendungen"=>"F. Grammatik und Wendungen"
    ),
    array(
        "r9-Feste in Deutschland"=>"A. Feste in Deutschland",
        "r9-Geburtstagsfeier"=>"B. Geburtstagsfeier",
        "r9-Geschenke. Wer schenkt wem was"=>"C. Geschenke. Wer schenkt wem was?",
        "r9-Einladungskarte"=>"D. Einladungskarte",
        "r9-Uebungen"=>"E. Übungen",
        "r9-Grammatik und Wendungen"=>"F. Grammatik und Wendungen"
    ),
    array(
        "r10-Stadtplan"=>"A. Stadtplan",
        "r10-Nach dem Weg fragen"=>"B. Nach dem Weg fragen",
        "r10-Sehenswuerdigkeiten in Dresden"=>"C. Sehenswürdigkeiten in Dresden",
        "r10-Urlaub in Dresden"=>"D. Urlaub in Dresden",
        "r10-Uebungen"=>"E. Übungen",
        "r10-Grammatik und Wendungen"=>"F. Grammatik und Wendungen"
    )
);

/* 각 과별 중단원 파일명과 제목 번역 */
$tl_k = array(
    array(
        "r0-Alphabet"=>"알파벳",
        "r0-Quizzzz"=>"퀴즈",
        "r0-Zuordnung"=>"연결하기"
    ),
    array(
        "r1-Guten Tag!"=> "안녕하세요!",
        "r1-Wie heissen Sie"=>"이름이 어떻게 되시나요?",
        "r1-Wie geht es Ihnen"=>"어떻게 지내시나요?",
        "r1-Wer ist Hyun Kim"=>"김현이 누구인가요?",
        "r1-Zahlen(1-10)"=>"수(1~10)",
        "r1-Uebungen"=>"연습하기",
        "r1-Grammatik und Wendungen"=>"문법과 표현"
    ),
    array(
        "r2-Woher kommen Sie!"=>"어디서 오셨나요?",
        "r2-Ich bin Koreanerin"=>"저는 한국(여)인입니다.",
        "r2-Welche Sprachen sprechen Sie"=>"어떠한 언어를 말할 수 있나요?",
        "r2-Wo liegt das Land"=>"이 나라는 어디에 있나요?",
        "r2-Uebungen"=>"연습문제",
        "r2-Grammatik und Wendungen"=>"문법과 표현"
    ),
    array(
        "r3-Wer ist das"=>"이 분은 누구인가요?",
        "r3-Wie alt ist er"=>"그는 몇 살인가요?",
        "r3-Wie viele Geschwister hast du"=>"형제자매가 몇 명이니?",
        "r3-Was sind Sie von Beruf"=>"직업이 어떻게 되나요?",
        "r3-Visitenkarten"=>"명함",
        "r3-Uebungen"=>"연습문제",
        "r3-Grammatik und Wendungen"=>"문법과 표현"
    ),
    array(
        "r4-Wohnen"=>"사는 것",
        "r4-Im Zimmer"=>"방에서",
        "r4-Was ist das"=>"이것은 무엇인가요?",
        "r4-Wie ist das"=>"이것은 어떤가요?",
        "r4-Uebungen"=>"연습문제",
        "r4-Grammatik und Wendungen"=>"문법과 표현"
    ),
    array(
        "r5-Essen und Trinken"=>"먹고 마시기",
        "r5-Was isst du gern und was trinkst du gern"=>"무엇을 즐겨 먹고 마셔?",
        "r5-Was isst und trinkt er,sie"=>"그(녀)는 무엇을 먹고 마시나요?",
        "r5-Im Restaurant. Was bekommen Sie"=>"레스토랑에서.<br>무엇을 주문하시겠어요?",
        "r5-Waehrend des Essens"=>"식사 중에",
        "r5-Was bezahlen Sie"=>"무엇을 지불하시겠어요?",
        "r5-Uebungen"=>"연습문제",
        "r5-Grammatik und Wendungen"=>"문법과 표현"
    ),
    array(
        "r6-Was machst du gern"=>"하루일과 중 무엇을 즐겨 하니?",
        "r6-Wie spaet ist es"=>"몇시인가요?",
        "r6-Wann hast du Deutschunterricht"=>"독일어 수업이 언제니?",
        "r6-Tagesablauf"=>"하루일과",
        "r6-Uebungen"=>"연습문제",
        "r6-Grammatik und Wendungen"=>"문법과 표현"
    ),
    array(
        "r7-Wochenende Was haben Sie am Wochenende vor"=>"주말: 주말에 무엇을 하나요?",
        "r7-Verabredung. Hast du heute Abend Zeit"=>"약속. 오늘저녁시간있니?",
        "r7-Anweisungen"=>"지시문. 무엇을 할 수 있고 해서는 안되나요?",
        "r7-Uebungen"=>"연습문제",
        "r7-Grammatik und Wendungen"=>"문법과 표현"
    ),
    array(
        "r8-Koerper und Sport"=>"신체와 스포츠",
        "r8-Koerperteile und Taetigkeiten"=>"신체부위와 하는 일",
        "r8-Krankheiten und Schmerzen"=>"질병과 통증",
        "r8-Beim Arzt"=>"개인병원에서",
        "r8-Uebungen"=>"연습문제",
        "r8-Grammatik und Wendungen"=>"문법과 표현"
    ),
    array(
        "r9-Feste in Deutschland"=>"독일의 축제",
        "r9-Geburtstagsfeier"=>"생일파티",
        "r9-Geschenke. Wer schenkt wem was"=>"선물. 누가 누구에게 무엇을 선물하나요?",
        "r9-Einladungskarte"=>"초대장",
        "r9-Uebungen"=>"연습문제",
        "r9-Grammatik und Wendungen"=>"문법과 표현"
    ),
    array(
        "r10-Stadtplan"=>"지도",
        "r10-Nach dem Weg fragen"=>"길 묻기",
        "r10-Sehenswuerdigkeiten in Dresden"=>"드레스덴의 명소들",
        "r10-Urlaub in Dresden"=>"드레스덴에서의 휴가",
        "r10-Uebungen"=>"연습문제",
        "r10-Grammatik und Wendungen"=>"문법과 표현"
    )
);

/* 각 중단원 아래의 소단원 */
$rtl = array(
    1 =>
    array(
        "A" => array(
            "A2" => "Ordnen Sie zu.",
    "A3" => "Ergänzen Sie."
        ),
        "B" => array(
            "B1" => "Wie heißen Sie?",
            "B3" => "Wie heißt du?",
            "B4" => "Ergänzen Sie die Lücken!",
            "B5" => "Sortieren Sie die Namen nach Vor- und Familiennamen."
        ),
        "C" => array(
            "C2" => "Ordnen Sie zu.",
            "C1" => "Wie geht es Ihnen?",
            "C3" => "Wie geht es dir?"
        ),
        "D" => array(
            "D1" => "Im Deutschunterricht"
        ),
        "F" => array(
            "F1" => "Zahlen(1-10)",
    "F2" => "Wie heißen die Zahlen?"
        ),
        "G" => array(
            "G1" => "Begrüßung",
            "G2" => "Was sagen die Personen?",
            "G3" => "Frage oder Antwort?",
            "G7" => "Ergänzen Sie: „du“ oder „Sie“.",
            "G8" => "Ergänzen Sie die passende Form.",
            "G11" => "Hören Sie und ergänzen Sie."
        )
    ),
    2 =>
    array(
        "A" => array(
            "A1" => "Welche Haupstädte und Länder kennen Sie?",
            "A2" => "Woher kommen die Figuren?",
            "A4" => "Hören Sie und ergänzen Sie.",
            "A5" => "Hören Sie noch einmal.",
            "A6" => "Ergänzen Sie."
        ),
        "B" => array(
            "B1" => "Ich bin Koreanerin."
        ),
        "C" => array(
            "C1" => "Ergänzen Sie die Lücken.",
            "C2" => "Ergänzen Sie die Lücken."
        ),
        "D" => array(
            "D1" => "Wo liegt das Land?",
            "D2" => "Hören Sie und sprechen Sie nach.",
            "D3" => "Antworten Sie."
        ),
        "E" => array(
            "E1" => "Herkunft",
            "E2" => "Raten Sie! Wo ist das?",
            "E3" => "Ergänzen Sie die Lücken.",
            "E4" => "Bilden Sie Sätze und markieren Sie die Verben.",
            "E5" => "Ordnen Sie zu.",
            "E6" => "Ergänzen Sie die Fragen."
        )
    ),
    3 =>
    array(
        "A" => array(
            "A1" => "Meine Familie",
            "A2" => "Wer ist das?"
        ),
        "B" => array(
            "B1" => "Zahlen(11-100)",
            "B2" => "Wie alt ist er?"
        ),
        "C" => array(
            "C1" => "Wie viele Geschwister hast du?",
            "C2" => "Familienstand"
        ),
        "D" => array(
            "D1" => "Lesen Sie die Texte.",
            "D2" => "Ergänzen Sie die Tabelle.",
            "D4" => "Was sind die Leute von Beruf?",
            "D5" => "Was sind Sie von Beruf?"
        ),
        "E" => array(
            "E1a" => "Visitenkarten",
            "E1b" => "Visitenkarten"
        ),
        "F" => array(
            "F1" => "Wer ist das?",
            "F2" => "Ergänzen Sie.",
            "F3" => "Ergänzen Sie die Verben.",
            "F5" => "Ergänzen Sie"
        )
    ),
    4 =>
    array(
        "A" => array(
            "A1" => "Wie wohnen die Leute?",
            "A2" => "Ordnen Sie die Bilder dem passenden Text zu.",
            "A3" => "In meiner Wohnung"
        ),
        "B" => array(
            "B1" => "Was ist das?",
            "B2" => "Sortieren Sie die Wörter.",
            "B4" => "Wie heißt das auf Deutsch?",
            "B5" => "Was passt zusammen?"
        ),
        "C" => array(
            "C1" => "Was ist das?",
            "C2a" => "Wie heißt das?",
            "C2b" => "Was hat er/sie oder was hat er/sie nicht?"
        ),
        "D" => array(
            "D1" => "Wie heißt das Gegenteil?",
            "D2" => "Adjektive",
            "D3" => "In meiner Wohnung"
        ),
        "E" => array(
            "E1" => "Sortieren Sie die Wörter.",
            "E2" => "Ergänzen Sie mit Artikeln.",
            "E3" => "sein oder haben?",
            "E4" => "Ergänzen Sie mit Artikeln.",
            "E5" => "„kein” oder „nicht”?",
            "E6" => "Schreiben Sie die Sätze."
        )
    ),
    5 =>
    array(
        "A" => array(
            "A1" => "Wo sind die Leute und was machen sie?",
            "A2" => "Lesen Sie und ergänzen Sie die Lücken.",
            "A3" => "Ordnen Sie zu."
        ),
        "B" => array(
            "B1" => "Mein Lieblingsessen",
            "B2" => "Was trinkst du gern?",
            "B4" => "Ich esse lieber Brot."
        ),
        "C" => array(
            "C1" => "Was isst er(sie)?",
            "C2" => "Was isst du und was trinkst du?",
            "C4" => "Mahlzeiten: Was isst und trinkt Tim Sager?",
            "C5" => "Mahlzeiten: Was isst und trinkt Monika Mai?",
            "C6" => "Mahlzeiten in Korea"
        ),
        "D" => array(
            "D1" => "Bestellen",
            "D3" => "Wer sagt das?",
            "D4" => "Wir möchten gern bestellen.",
            "D5" => "Was möchten die Personen essen? Was möchten sie trinken?"
        ),
        "E" => array(
            "E2" => "Geschmack",
    "E3" => "Üben Sie."
        ),
        "F" => array(
            "F1" => "Bezahlen",
    "F2" => "Wir möchten bezahlen."
        ),
        "G" => array(
            "G1" => "Ordnen Sie und tragen Sie unten ein.",
            "G3" => "Was essen und trinken<br>Tim und Monika gern?",
            "G4" => "Der Kellner bringt das Falsche.",
            "G5" => "Wer möchte was?",
            "G7" => "Was passt zusammen?",
            "G10" => "Ergänzen Sie die Tabelle.",
            "G11" => "Ergänzen Sie ‚e’ oder ‚i’",
            "G12" => "Ergänzen Sie.",
            "G13" => "Ergänzen Sie.",
            "G14" => "Ergänzen Sie: der/den/die/das.",
            "G16" => "Ich möchte bestellen. Ich möchte bezahlen."
        )
    ),
    6 =>
    array(
        "A" => array(
            "A1" => "Was machen sie gern?",
            "A2" => "Was machen sie (nicht) gern?",
            "A3" => "Haushalt"
        ),
        "B" => array(
            "B0" => "Wie spät ist es?",
            "B1" => "Hören Sie die Uhrzeiten und notieren Sie."
        ),
        "C" => array(
            "C1" => "Hören Sie und sprechen Sie nach.",
            "C2" => "Wie sind die Fragen?"
        ),
        "D" => array(
            "D1" => "Wohin passt das? Schreiben Sie.",
            "D2" => "Wohin passt das? Schreiben Sie."
        ),
        "E" => array(
            "E1" => "Was machen die Leute?",
            "E2" => "Antworten Sie mit ja, nein, doch.",
            "E3" => "Schreiben Sie die Uhrzeiten auf.",
            "E4" => "Trennbar oder nicht trennbar?",
            "E5" => "Sortieren Sie die Verben.",
            "E6" => "Was macht er am Freitag?",
            "E7" => "Lesen Sie den Text."
        )
    ),
    7 =>
    array(
        "A" => array(
            "A0" => "Wo ist das?",
            "A1" => "Was machen Sie am Wochenende?",
            "A2" => "Was möchten Sie am Wochenende machen?",
            "A3" => "Sehen Sie sich den Kalender an und lesen Sie. Was geht (nicht)?"
        ),
        "B" => array(
            "B1" => "Verabredung I",
            "B2" => "Verabredung II (Telefon)",
            "B3" => "Verabredung III (Chat)",
            "B4" => "Was passt?",
            "B5" => "Verabredung IV (SMS)",
            "B6" => "Höfliches Absagen bei Kurznachrichten"
        ),
        "C" => array(
            "C1" => "Was kann / muss / darf man (nicht)?",
            "C2" => "Was soll / will / möchte man (nicht)?",
            "C3" => "Was kann man, was darf man nicht und was muss man machen?",
            "C4" => "Lesen Sie den Text und unterstreichen Sie alle Verben.",
            "C6" => "Anweisung: Ordnen Sie die Sätze.",
            "C7" => "Hören Sie den Dialog und ergänzen Sie."
        ),
        "D" => array(
            "D1" => "Was passt zu welchem Bild?",
            "D2" => "Ergänzen Sie die Lücken.",
            "D3" => "Ergänzen Sie die Modalverben in der richtigen Form.",
            "D4" => "Ergänzen Sie.",
            "D5" => "Wohin sollte man gehen?",
            "D6" => "Schreiben Sie die Sätze neu.",
            "D7" => "Ergänzen Sie um, am oder in.",
            "D8" => "Ergänzen Sie das Telefongespräch."
        )
    ),
    8 =>
    array(
        "A" => array(
            "A1" => "Was machen die Personen?",
            "A2" => "Lesen Sie die Texte."
        ),
        "B" => array(
            "B1" => "Wie heißen die Körperteile?",
            "B2" => "Singen wir das Lied „Kopf, Schulter, Knie” zusammen.",
            "B3" => "Suchen Sie die Körperteile.",
            "B4" => "Körperteile und Tätigkeiten. Was passt?",
            "B5" => "Was passt?"
        ),
        "C" => array(
            "C1" => "Was für Schmerzen sind das?",
            "C2" => "Er/Sie ist krank. Was hat er/sie?",
            "C3" => "Krankheiten: Ergänzen Sie.",
            "C4" => "Hören Sie die Gespräche und klicken Sie an.",
            "C5" => "Welche Verben sind im Nominativ, Akkusativ, Dativ und Akkusativ oder Dativ?",
            "C7" => "Bilden Sie mit den Verben im Dativ einen Text."
        ),
        "D" => array(
            "D1" => "Arztbesuch: Zu welchem Arzt gehen Sie?",
            "D2" => "Zu Hause",
            "D3" => "Termin beim Arzt",
            "D4" => "Bei der Ärztin",
            "D5" => "Und jetzt sind Sie der Doktor! Was sollen die Personen tun?",
            "D6" => "Ihr(e) Freund(in) hat Probleme. Was würden Sie ihm (ihr) empfehlen?"
        ),
        "E" => array(
            "E1" => "Wie heißen die Körperteile?",
            "E2" => "Was fehlt Ihnen?",
            "E3" => "Bei der Ärztin: Was sagen sie?",
            "E4" => "Schreiben Sie die passenden Personalpronomen im Dativ.",
            "E5" => "Was muss man tun? Was darf man nicht?",
            "E6" => "Imperativ: Was sagen Sie?"
        )
    ),
    9 =>
    array(
        "A" => array(
            "A0" => "Wie heißen die Feste in Deutschland?",
            "A1" => "Wie begrüßt man sich auf den Festen?",
            "A2" => "Wie heißen die Feste in Deutschland?",
            "A3" => "Temporale Angaben und Zahlen.",
            "AGR" => "Grundzahlen und Ordnungszahlen",
            "A4" => "Schreiben Sie die Tage.",
            "A5" => "Wann ist welcher Feiertag?",
            "A6" => "Neujahr in Korea. Frohes neues Jahr!"
        ),
        "B" => array(
            "B1" => "Wer spricht mit wem?",
            "B2" => "Geburtstagsfeier in Deutschland und in Korea",
            "B3" => "Feste und Geschenkideen"
        ),
        "C" => array(
            "C1" => "Was passt zusammen?",
            "CGR" => "Personalpronomen und (un)bestimmter Artikel im Dativ und Akkusativ",
            "C4" => "Was möchten Sie zum Geburtstag haben?"
        ),
        "D" => array(
            "D1" => "Schreiben Sie eine Einladungskarte.",
            "D2" => "Ergänzen Sie die Personalpronomen.",
            "D3" => "Schreiben Sie einen Einladungskarte zur Einweihungsfeier.",
            "D4a" => "Meine 20. Geburtstagsfeier",
            "D4b" => "Hören Sie und ergänzen Sie die passenden Partizip II-Formen.",
            "D4c" => "Hören Sie den Text und klicken Sie an."
        ),
        "E" => array(
            "E1" => "Feste und Jahreszeiten",
            "E2" => "Wie heißen die Feste?",
            "E3" => "Schreiben Sie die Tage.",
            "E4" => "Diese Personen haben Geburtstag. Was kann man ihnen schenken? Warum?",
            "E5" => "Mein schönstes Fest",
            "E6" => "Wann sagt man das?",
            "E7" => "Ergänzen Sie die Personalpronomen im Dativ und die Verben in der richtigen Form.",
            "E8" => "Ergänzen Sie die Personalpronomen im Nominativ, Akkusativ oder Dativ.",
            "E9a" => "Präteritum",
            "E9b" => "Präteritum von sein und haben.",
            "E10a" => "Das Perfekt mit „haben“ oder „sein“ ?",
            "E10b" => "TIPP",
            "E11" => "Perfekt",
            "E12" => "Wie war das Fest zu Neujahr, in Korea, Seolnal‘? Schreiben Sie an Ihrer Freundin Mina."
        )
    ),
    10 =>
    array(
        "A" => array(
            "A1" => "Wo ist das?",
            "A2" => "Wo sind die Leute?",
            "A3" => "Entschuldigung, wo ist das Café Dornbusch?",
            "A4" => "Wohin gehen Sie, wenn Sie ...... ?"
        ),
        "B" => array(
            "B1" => "Nach dem Weg fragen",
            "B2" => "Entschuldigung, wie komme ich ...?",
            "B3a" => "Wie heißen die Fahrzeuge auf Deutsch?",
            "B3b" => "Wie heißen die Fahrzeuge auf Deutsch?",
            "B4" => "Ergänzen Sie die passenden Präpositionen.",
            "BGR" => "Wechselpräpositionen"
        ),
        "C" => array(
            "C1" => "Welche Fotos und Texte passen zusammen?",
            "C2" => "Wie heißen die Orte?",
            "C3" => "Suchen Sie die Orte auf dem Stadtplan von Dresden und ergänzen Sie die Nummern.",
            "C4" => "Die Leute sind auf dem Theaterplatz. Wohin und wie wollen sie fahren (gehen)?"
        ),
        "D" => array(
            "D1" => "Perfekt: Perfekt- und Infinitivformen",
            "D2" => "Mein Urlaub in Dresden"
        ),
        "E" => array(
            "E1a" => "Wo ist der Spatz?",
            "E1b" => "Wohin fliegt der Spatz?",
            "E2a" => "Wo sind die Gegenstände im Zimmer?",
            "E2b" => "Wohin bringt sie die Gegenstände?",
            "E3" => "Wo kann man in Gartenstadt was machen?",
            "E4" => "Ordnen Sie die Ausdrücke aus dem Kasten in die Tabelle ein.",
            "E5" => "Entschuldigung, wo ist ... ?",
            "E6" => "Wie komme ich zum/zur ...?",
            "E7a" => "Hören Sie die Dialoge und ergänzen Sie die Lücken: Am Alexanderplatz",
            "E7b" => "Hören Sie die Dialoge und ergänzen Sie die Lücken: An der Frauenkirche",
            "E7c" => "Hören Sie die Dialoge und ergänzen Sie die Lücken: An der Bushaltestelle",
            "E8" => "Ordnen Sie die Verben je nach der Partizip –II Formen zu.",
            "E10" => "Ergänzen Sie die Perfekt-Formen.",
            "E11" => "Mein Urlaub in Dresden"
        )
    )
);

/* 각 중단원 아래의 소단원 해석 */
$rtl_k = array(
1 =>
    array(
        "A" => array(
            "A2" => "그림과 알맞은 표현을 연결해보세요.",
    "A3" => "말풍선에 알맞은 표현을 채우세요."
        ),
        "B" => array(
            "B1" => "이름이 어떻게 되시나요?",
            "B3" => "네 이름은 무엇이니?",
            "B4" => "빈칸을 채우세요.",
            "B5" => "다음을 성과 이름으로 분류하세요."
        ),
        "C" => array(
            "C2" => "연결하세요.",
            "C1" => "어떻게 지내시나요?",
            "C3" => "어떻게 지내?"
        ),
        "D" => array(
            "D1" => "독일어 수업시간에"
        ),
        "F" => array(
            "F1" => "수(1~10)",
            "F2" => "다음 숫자들은 어떻게 불리나요?"
        ),
        "G" => array(
            "G1" => "인사",
            "G2" => "사람들이 뭐라고 하나요?",
            "G3" => "질문인가요? 대답인가요?",
            "G7" => "„du“ 혹은 „Sie“를 쓰세요.",
            "G8" => "빈칸에 동사의 알맞은 형태로 채우세요.",
            "G11" => "듣고 알맞은 억양(Satzmelodie)기호를 채우세요."
        )
    ),
    2 =>
    array(
        "A" => array(
            "A1" => "어떤 수도와 국가를 알고 계시나요?",
            "A2" => "이들은 어디에서 왔을까요?",
            "A4" => "듣고 빈 칸을 채우세요.",
            "A5" => "다시 한번 들으세요.",
            "A6" => "빈칸에 알맞은 동사의 어미를 넣어보세요."
        ),
        "B" => array(
            "B1" => "저는 한국(여)인입니다."
        ),
        "C" => array(
            "C1" => "빈칸을 채우세요.",
            "C2" => "빈칸을 채우세요."
        ),
        "D" => array(
            "D1" => "빈칸에 알맞은 대륙 이름을 넣어보세요.",
            "D2" => "듣고 따라 하세요.",
            "D3" => "질문에 대답하세요."
        ),
        "E" => array(
            "E1" => "출생지",
            "E2" => "맞춰보세요! 이것은 어디에 있나요?",
            "E3" => "빈칸을 채우세요.",
            "E4" => "문장을 만들고 동사에 표시하세요.",
            "E5" => "맞는 답끼리 연결하세요.",
            "E6" => "질문을 채우세요."
        )
    ),
    3 =>
    array(
        "A" => array(
            "A1" => "나의 가족",
            "A2" => "이분은 누구인가요?"
        ),
        "B" => array(
            "B1" => "숫자(11~100)",
            "B2" => "몇 살인가요?"
        ),
        "C" => array(
            "C1" => "형제자매가 몇 명이니?",
            "C2" => "가족상황"
        ),
        "D" => array(
            "D1" => "듣고 텍스트를 읽으세요.",
            "D2" => "다음 표를 작성하세요.",
            "D4" => "이 사람들은 어떤 직업을 가지고 있나요?",
            "D5" => "직업이 어떻게 돠나요?"
        ),
        "E" => array(
            "E1a" => "명함",
            "E1b" => "명함"
        ),
        "F" => array(
            "F1" => "이 사람은 누구인가요?",
            "F2" => "빈칸을 채우세요.",
            "F3" => "빈칸에 동사를 채우세요.",
            "F5" => "아래의 정보를 가지고 빈 칸을 채우세요."
        )
    ),
    4 =>
    array(
        "A" => array(
            "A1" => "사람들은 어떻게 사나요?",
            "A2" => "그림을 알맞은 텍스트와 연결하세요.",
            "A3" => "나의 집"
        ),
        "B" => array(
            "B1" => "이것은 무엇인가요?",
            "B2" => "위의 단어들을 성에 따라 분류하세요.",
            "B4" => "이것은 독일어로 뭐라고 하나요?",
            "B5" => "무엇이 서로 어울리나요?"
        ),
        "C" => array(
            "C1" => "이것은 무엇일까요?",
            "C2a" => "뭐라고 부르나요?",
            "C2b" => "그(녀)는 무엇을 가지고 있고 무엇을 가지고 있지 않나요?"
        ),
        "D" => array(
            "D1" => "반대말은 무엇인가요?",
            "D2" => "형용사",
            "D3" => "나의 집에서"
        ),
        "E" => array(
            "E1" => "다음 단어들을 성에 따라 분류하세요.",
            "E2" => "동사 표를 채우세요.",
            "E3" => "sein 혹은 haben?",
            "E4" => "관사를 채우세요.",
            "E5" => "kein 혹은 nicht?",
            "E6" => "보기와 같이 문장을 만드세요."
        )
    ),
    5 =>
    array(
        "A" => array(
            "A1" => "사람들은 어디 있고 무엇을 하나요?",
            "A2" => "읽고 각 그림에 해당하는<br>알맞은 단어를 찾아 넣으세요.",
            "A3" => "알맞게 분류하세요."
        ),
        "B" => array(
            "B1" => "내가 좋아 하는 음식",
            "B2" => "무엇을 즐겨 마시니?",
            "B4" => "나는 차라리 빵을 먹겠어요."
        ),
        "C" => array(
            "C1" => "그(녀)는 무엇을 먹고 마시나요?",
            "C2" => "무엇을 먹고 마시니?",
            "C4" => "식사: 팀 자거가 무엇을 먹고 마시나요?",
            "C5" => "식사: 모니카 마이는 무엇을 먹고 마시나요?",
            "C6" => "한국의 식사"
        ),
        "D" => array(
            "D1" => "주문하기",
            "D3" => "누가 이야기 하나요?",
            "D4" => "우리는 주문하고 싶어요.",
            "D5" => "이 사람들은 무엇을 먹으려하나요?<br>그들은 무엇을 마시려하나요?"
        ),
        "E" => array(
            "E2" => "입맛",
            "E3" => "연습하세요."
        ),
        "F" => array(
            "F1" => "지불하기",
            "F2" => "계산하고 싶어요."
        ),
        "G" => array(
            "G1" => "알맞게 나열하세요.",
            "G3" => "팀과 모니카는<br>무엇을 즐겨 먹고 마시나요?",
            "G4" => "점원이 잘못된 음식을 가져 왔습니다.",
            "G5" => "누가 무엇을 주문하나요?",
            "G7" => "무엇이 맞나요?",
            "G10" => "표를 채우세요.",
            "G11" => "‘e’ 또는 ‘i’를 채우세요.",
            "G12" => "채우세요.",
            "G13" => "채우세요.",
            "G14" => "정관사·지시대명사를 채우세요.",
            "G16" => "주문하고 싶어요 계산하고 싶어요."
        )
    ),
    6 =>
    array(
        "A" => array(
            "A1" => "그들은 무엇하기를 좋아하나요?",
            "A2" => "무엇을 즐겨 하나(하지 않나)요?",
            "A3" => "가사일"
        ),
        "B" => array(
            "B0" => "몇시인가요?",
            "B1" => "시각을 듣고 메모를 하세요."
        ),
        "C" => array(
            "C1" => "듣고 따라 하세요.",
            "C2" => "어떤 질문을 할까요?"
        ),
        "D" => array(
            "D1" => "무엇이 어디에 맞을까요? 써보세요.",
            "D2" => "무엇이 어디에 맞을까요? 써보세요."
        ),
        "E" => array(
            "E1" => "이 사람들은 무엇을 하나요?",
            "E2" => "ja, nein, doch로 대답하세요.",
            "E3" => "시각을 쓰세요.",
            "E4" => "분리 혹은 비분리 동사?",
            "E5" => "동사를 분류하세요.",
            "E6" => "그는 금요일에 실제로 무엇을 하나요?",
            "E7" => "다음 글을 읽으세요."
        )
    ),
    7 =>
    array(
        "A" => array(
            "A0" => "어디인가요?",
            "A1" => "주말에 뭐하세요?",
            "A2" => "주말에 무엇을 하고 싶나요?",
            "A3" => "행사 캘린더를 보면 무엇이 가능(불가능)한가요?"
        ),
        "B" => array(
            "B1" => "약속 I",
            "B2" => "약속 II (전화)",
            "B3" => "약속 III (채팅)",
            "B4" => "무엇이 알맞은가요?",
            "B5" => "약속 III (문자메시지)",
            "B6" => "문자메시지 상에서의 공손한 거절"
        ),
        "C" => array(
            "C1" => "무엇을 할 수 있고 해야만 하고 해도 되나요?",
            "C2" => "무엇을 해야만 하고 하려고 하고 하고싶어 하나요?",
            "C3" => "무엇을 할 수 있고, 해서는 안되고 해야만 할까요?",
            "C4" => "텍스트를 읽고 모든 동사에 줄을 그으세요.",
            "C6" => "지시문: 순서대로 나열하세요.",
            "C7" => "대화문을 듣고 채우세요."
        ),
        "D" => array(
            "D1" => "어느 그림에 무엇이 맞나요?",
            "D2" => "빈칸을 채우세요.",
            "D3" => "괄호안에 알맞은 형태의 화법조동사를 넣으세요.",
            "D4" => "빈칸을 채우세요.",
            "D5" => "어디로 가는 것이 좋은가요?",
            "D6" => "밑줄친 단어를 이용해 문장을 다시 써보세요.",
            "D7" => "빈칸에 um, am 또는 in 중 알맞은 전치사를 넣어 보세요.",
            "D8" => "다음 전화통화 내용에 알맞은 답을 넣어 문장을 완성해 보세요."
        )
    )
,
    8 =>
    array(
        "A" => array(
            "A1" => "사람들이 무엇을 하고 있나요?",
            "A2" => "본문을 읽으세요."
        ),
        "B" => array(
            "B1" => "신체 부위를 어떻게 부르나요?",
            "B2" => "“머리, 어깨, 무릎” 노래를 불러보아요.",
            "B3" => "신체부위를 찾아 보세요.",
            "B4" => "신체부위와 그 기능들을 나열해보세요.",
            "B5" => "무엇이 알맞은가요?"
        ),
        "C" => array(
            "C1" => "어떤 통증인가요?",
            "C2" => "그/그녀가 아픕니다. 어디가 아픈가요?",
            "C3" => "병명을 채우세요.",
            "C4" => "대화를 듣고 맞는 곳에 표시하세요.",
            "C5" => "어떤 동사가 주격동사, 직접목적격동사, 간접목적격동사 혹은 직접·간접목적격 동사인가요?",
            "C7" => "3격 (간접목적격) 지배동사를 가지고 텍스트를 만들어 보세요."
        ),
        "D" => array(
            "D1" => "병원방문: 어느병원에 가야할까요?",
            "D2" => "집에서",
            "D3" => "병원예약",
            "D4" => "개인병원에서",
            "D5" => "당신은 의사입니다. 사람들이 무엇을 해야 하나요?",
            "D6" => "당신의 친구에게 문제가 있어요. 그에게 뭐라고 조언을 해야 하나요?"
        ),
        "E" => array(
            "E1" => "신체 부위를 어떻게 부르나요?",
            "E2" => "어디가 아픈가요?",
            "E3" => "개인병원에서: 의사와 김선생님은 무엇이라고 말하나요?",
            "E4" => "알맞은 간접목적어를 넣으세요.",
            "E5" => "무엇을 해야 하고 하지말아야 하나요?",
            "E6" => "명령형: 무엇이라고 말해야 하나요?"
        )
    ),
    9 =>
    array(
        "A" => array(
            "A0" => "독일의 축일을 뭐라고 하나요?",
            "A1" => "축제 때 어떻게 인사하나요?",
            "A2" => "독일의 축일을 뭐라고 하나요?",
            "A3" => "시간정보와 수",
            "AGR" => "기수 · 서수",
            "A4" => "날짜를 쓰세요.",
            "A5" => "언제 어떤 축제일인가요?",
            "A6" => "한국의 설날. 새해 복많이 받으세요!"
        ),
        "B" => array(
            "B1" => "누가 누구랑 이야기하나요?",
            "B2" => "독일과 한국에서의 생일파티",
            "B3" => "축제와 선물아이템: 무엇인가요?"
        ),
        "C" => array(
            "C1" => "무엇이 무엇과 어울리나요?",
            "CGR" => "3, 4격 인칭대명사 및 정관사, 부정관사",
            "C4" => "생일선물로 무엇을 가지고 싶나요? 왜요?"
        ),
        "D" => array(
            "D1" => "초대장을 써보세요. 순서에 맞게 문장을 써보세요.",
            "D2" => "알맞은 인칭대명사를 쓰세요.",
            "D3" => "집들이 파티에 초장을 쓰세요.",
            "D4a" => "나의 스무번째 생일",
            "D4b" => "듣고 알맞은 과거분사형을 채우세요.",
            "D4c" => "듣고 알맞은 답을 선택하세요."
        ),
        "E" => array(
            "E1" => "축일과 계절",
            "E2" => "축일 이름은?",
            "E3" => "날짜를 쓰세요.",
            "E4" => "아래의 사람들이 생일을 맞이하였어요. 그들에게 무엇을 선물할까요?",
            "E5" => "나의 가장 아름다운 축일",
            "E6" => "언제 이렇게 말하지요?",
            "E7" => "3격 인칭대명사와 동사를 올바르게 써넣으세요.",
            "E8" => "1, 3, 4격 인칭대명사를 넣으세요.",
            "E9a" => "과거형",
            "E9b" => "haben과 sein의 과거형",
            "E10a" => "완료형에서 조동사 haben 혹은 sein 중 어느 것이 맞나요?",
            "E10b" => "현재완료형",
            "E11" => "완료형",
            "E12" => "한국의 설날은 어떻게 보내셨나요? 한국인 미나에게 써보세요."
        )
    ),
    10 =>
    array(
        "A" => array(
            "A1" => "어디인가요?",
            "A2" => "사람들이 어디에 있나요?",
            "A3" => "실례하지만 도른부쉬 카페가 어디있나요?",
            "A4" => "당신이 만약 ... 하고 싶다면 어디로 가나요?"
        ),
        "B" => array(
            "B1" => "길 묻기",
            "B2" => "죄송하지만.. 어디로 .... ?",
            "B3a" => "독일어로 교통기관들을 뭐라고 하나요?",
            "B3b" => "독일어로 교통기관들을 뭐라고 하나요?",
            "B4" => "알맞은 전치사를 집어넣으세요.",
            "BGR" => "3·4격 전치사"
        ),
        "C" => array(
            "C1" => "어떤 사진이 어떤 텍스트와 어울릴까요?",
            "C2" => "명소의 이름은 무엇인가요?",
            "C3" => "드레스덴 시내 지도에서 장소를 찾아 번호를 집어넣으세요.",
            "C4" => "사람들이 테아터광장에 있습니다. 어디로 그리고 어떤 교통수단으로 가려고 합니다."
        ),
        "D" => array(
            "D1" => "완료형: 완료형과 부정형",
            "D2" => "드레스덴에서의 휴가"
        ),
        "E" => array(
            "E1a" => "어디에 참새가 있나요?",
            "E1b" => "어디로 참새가 날라가나요?",
            "E2a" => "문장을 채우세요.",
            "E2b" => "문장을 채우세요.",
            "E3" => "가르텐시의 어디서 무엇을 할 수 있나요?",
            "E4" => "상자안의 표현구들을 표안에 넣으세요.",
            "E5" => "실례하지만...",
            "E6" => "어떻게 ... 가야할까요?",
            "E7a" => "문장을 대화문을 듣고 빈칸을채우세요: 알렉산더 플라자",
            "E7b" => "문장을 대화문을 듣고 빈칸을채우세요: 프라우엔 교회",
            "E7c" => "문장을 대화문을 듣고 빈칸을채우세요: 버스 정류장",
            "E8" => "과거분사형태에 따라 구분해보세요.",
            "E10" => "완료형을 넣으세요.",
            "E11" => "드레스덴에서의 나의 휴가"
        )
    )
);

/* 페이지가 어디인지 판단 */
if ($fn == "inthebeginning"
) {
    $rl = "inthebeginning";
    $rt = "Na geht's?";
} elseif (strlen($fn) < $lt || $fn == "Deutschland") {
    $rl = "inthebeginning";
    $rt = "Na geht's? - Inhalt";
} elseif (strpos($fn, "-")) {
    $dash = strpos($fn, "-");
    $da = substr($fn, ($dash+1));
    $r = (int)substr($fn, 1, ($dash-1));
    if (strlen($da) < $lt) {
        $rk = array_keys($tl[$r]);
        for ($j = 0; $j < sizeof($rk); $j++) {
            if (($tl[$r][$rk[$j]])[0] == $da[0]) {
                $rl = $rk[$j];
            }
        }
        $rt = "Reihe {$r} - {$da[0]} - Inhalt";
    } else {
        $rl = substr($fn, 0, ($dash));
        if ($fn[2] == "-") {
            $rt = "Reihe {$fn[1]} - Inhalt";
        } else {
            $rt = "Reihe {$fn[1]}{$fn[2]} - Inhalt";
        }
    }
}
/* $dash 변수가 설정됐나? */
$ds = isset($dash);
if (!$ds) {
    $r = (int)substr($fn, 1);
}

if ($ds) {
    if (strlen($da) > $lt) {
        $kom = $tl[$r];
        /* 중단원 메뉴 */
        for ($i = 0; $i < sizeof($kom); $i++) {
            $cn = array_keys($kom)[$i];
            if (file_exists($root.$cn.".php")) {
                if ($fn == $cn) {
                    $jt1 = $tl[$r][$cn];
                    $jt2 = $tl_k[$r][$cn];
                }
            }
        }
    } else {
        $kom = $rtl[$r][$fn[($dash+1)]];
        /* 소단원 메뉴; 빼기 이후의 글자수가 4글자 미만 */
        for ($i = 0; $i < sizeof($kom); $i++) {
            /* 메뉴의 키 정보 */
            $mkey = array_keys($kom)[$i];
            $cn = "r".$r."-".$mkey;
            if (file_exists($root.($cn).".php")) {
                if ($da == $mkey) {
                    $jt1 = ($i+1).". ".$rtl[$r][$mkey[0]][$mkey];
                    $jt2 = $rtl_k[$r][$mkey[0]][$mkey];
                }
                $n = $i+1;
                if (substr($mkey, 1, 2) == "GR") {
                    $la = "GR";
                } elseif ($da == "Uebungen") {
                    $la = "Übungen";
                } else {
                    $la = $mkey;
                }
                for ($c = 97; $c < 121; $c++) {
                    if (substr($la, -1) == chr($c)) {
                        $la = substr($la, 0, (strlen($la) - 1))."<small>-".($c - 96)."</small>";
                    }
                }
            }
        }
    }
} else {
    $kom = $tl;
    /* 대단원 메뉴 */
    for ($i = 0; $i < sizeof($kom); $i++) {
        if ($i == 0) {
            $jt0 = $itl["D"];
            $jt1 = $itl_k["D"];
            $jt2 = "";
        }
        /* 작업 완료($rm) 단원 */
        if (($i-1) < $rm) {
            if ($fn == "r".($i)) {
                $jt0 = "Reihe ".$r;
                $jt1 = $itl[$r];
                $jt2 = $itl_k[$r];
            }
        }

        /* 작업 완료($rm) 단원 이상인데, 편집지 */
        if (($i-1) >= $rm && $edt) {
            if ($fn == "r".($i)) {
                $jt0 = "Reihe ".$r;
                $jt1 = $itl[$r];
                $jt2 = $itl_k[$r];
            }
        }
    }
}
?>

<!-- 상단 큰 제목 -->
<header>
    <?php
/* 인덱스가 아니냐? */
    if ($fn != "inthebeginning") {
        ?>

    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="text-center col-12">
                    <?php
                    if ($ds) {
/* 아마도 소·중단원 */
                        ?>
                    <h1 class="display-4"><?php echo($jt1); ?><br>
                        <small><?php echo($jt2); ?></small></h1>

                        <?php
                        if (strlen($da) < $lt) {
                            if (substr($da, 1, 2) == "GR") {
                                $da = "GR";
                            }
                            for ($c = 97; $c < 121; $c++) {
                                if (substr($da, -1) == chr($c)) {
                                    $da = substr($da, 0, (strlen($da) - 1))."<small>-".($c - 96)."</small>";
                                }
                            }

                            ?>
                    <h2>(교재 <span class="bg-<?php echo($color); ?> p-1 px-2 m-1 rounded text-white">
                            <strong><?php echo($da); ?></strong></span>)
                    </h2>
                            <?php
                        }
                    } else {
/* 이건 확실하게 대단원 */
                        ?>
                    <h1 class="display-4"><?php echo($jt0); ?></h1>
                    <h2><?php echo($jt1); ?><br><small><?php echo($jt2); ?></small>
                    </h2>
                        <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</header>
        <?php
    }
    ?>
