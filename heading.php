<?php
    /* 기본을 만들자 */
    $bn = basename($_SERVER['PHP_SELF']);
    $fn = str_replace('%20', ' ', substr($_SERVER['REQUEST_URI'], 1));
    $lt = 4; /* 제목 데쉬 이후의 글자 수 제한 */

    $dash = strpos($fn, '-');
    if ( !empty($dash) ) {
        $hp = $dash + 1;
    }

    /* Reihe를 구해요*/
    if ( ( $fn[0] !== 'D' ) || ( $fn[0] !== 'i' ) ) {
        if ( !empty($dash) ) {
            $r = substr($fn, 1, ( $dash - 1 ));
        }
        if ( ( empty($dash) ) && ( strlen($fn) < 4 ) ) {
            $r = substr($fn, 1);
        }
    }

    /* 여기가 어디냐? */
    if ( $fn[0] === "D" ) {
        $lv = "Deu";
    }

    if ( $fn[0] === "i" ) {
        $lv = "int";
    }

    if ( ( isset($r) ) && ( strlen($fn) < 4 ) ) {
        $lv = "lv1";
    }

    if ( ( isset($r) ) && ( !empty($dash) ) && ( ( strlen($fn) - $hp ) > $lt ) ) {
        $lv = "lv2";
    }

    if ( ( isset($r) ) && ( !empty($dash) ) && ( ( strlen($fn) - $hp ) <= $lt ) ) {
        $lv = "lv3";
    }
    /* 색상 */
    $col = array(
        'blue',
        'brown',
        'darkblue',
        'darkgray',
        'flame',
        'gold',
        'grape',
        'gray',
        'green',
        'khaki',
        'lightcyan',
        'navy',
        'orange',
        'pink',
        'primary',
        'purple',
        'red',
        'redbeen',
        'scarlet',
        'skyblue',
        'violet',
        'warning',
        'wine',
        'yellowgreen'
    );

    /* 색상 뽑기 */
    $color = $col[array_rand($col)];


    /* 각 과별 대단원 파일명과 제목 */
    $men = array(
        'D' => array( 'Deutschland', '독일은…' ),
        0 =>
            array( 'Deutschland und die deutsche Spache', '독일과 독일어',
                array(
                    'r0-Alphabet' => array( 'A. Alphabet', '알파벳' ),
                    'r0-Quizzzz' => array( 'B. Quiz', '퀴즈' ),
                    'r0-Zuordnung' => array( 'C. Zuordnung', '연결하기' )
                )
            ),
        1 =>
            array( 'Wie heißen Sie?', '이름이 어떻게 되시나요?',
                array(
                    'r1-Guten Tag!' => array( 'A. Guten Tag!', '안녕하세요!',
                        array(
                            'A2' => array( 'Ordnen Sie zu.', '그림과 알맞은 표현을 연결해보세요.' ),
                            'A3' => array( 'Ergänzen Sie.', '말풍선에 알맞은 표현을 채우세요.' ),
                        )
                    ),
                    'r1-Wie heissen Sie' => array( 'B. Wie heißen Sie?', '이름이 어떻게 되시나요?',
                        array(
                            'B1' => array( 'Wie heißen Sie?', '이름이 어떻게 되시나요?' ),
                            'B3' => array( 'Wie heißt du?', '네 이름은 무엇이니?' ),
                            'B4' => array( 'Ergänzen Sie die Lücken!', '빈칸을 채우세요.' ),
                            'B5' => array( 'Sortieren Sie die Namen nach Vor- und Familiennamen.', '다음을 성과 이름으로 분류하세요.' ),
                        )
                    ),
                    'r1-Wie geht es Ihnen' => array( 'C. Wie geht es Ihnen?', '어떻게 지내시나요?',
                        array(
                            'C2' => array( 'Ordnen Sie zu.', '연결하세요.' ),
                            'C1' => array( 'Wie geht es Ihnen?', '어떻게 지내시나요?' ),
                            'C3' => array( 'Wie geht es dir?', '어떻게 지내?' ),
                        )
                    ),
                    'r1-Wer ist Hyun Kim' => array( 'D. Wer ist Hyun Kim?', '김현이 누구인가요?',
                        array(
                            'D1' => array( 'Im Deutschunterricht', '독일어 수업시간에' ),
                        )
                    ),
                    'r1-Zahlen(1-10)' => array( 'F. Zahlen(1~10)', '수(1~10)',
                        array(
                            'F1' => array( 'Zahlen(1-10)', '수(1~10)' ),
                            'F2' => array( 'Wie heißen die Zahlen?', '다음 숫자들은 어떻게 불리나요?' ),
                        )
                    ),
                    'r1-Uebungen' => array( 'G. Übungen', '연습하기',
                        array(
                            'G1' => array( 'Begrüßung', '인사' ),
                            'G2' => array( 'Was sagen die Personen?', '사람들이 뭐라고 하나요?' ),
                            'G3' => array( 'Frage oder Antwort?', '질문인가요? 대답인가요?' ),
                            'G7' => array( 'Ergänzen Sie: „du“ oder „Sie“.', '„du“ 혹은 „Sie“를 쓰세요.' ),
                            'G8' => array( 'Ergänzen Sie die passende Form.', '빈칸에 동사의 알맞은 형태로 채우세요.' ),
                            'G11' => array( 'Hören Sie und ergänzen Sie.', '듣고 알맞은 억양(Satzmelodie)기호를 채우세요.' ),
                        )
                    ),
                    'r1-Grammatik und Wendungen' => array( 'H. Grammatik und Wendungen', '문법과 표현' )
                )
            ),
        2 =>
            array( 'Woher kommen Sie?', '어디서 오셨나요?',
                array(
                    'r2-Woher kommen Sie!' => array( 'A. Woher kommen Sie?', '어디서 오셨나요?',
                        array(
                            'A1' => array( 'Welche Hauptstädte und Länder kennen Sie?', '어떤 수도와 국가를 알고 계시나요?' ),
                            'A2' => array( 'Woher kommen die Figuren?', '이들은 어디에서 왔을까요?' ),
                            'A4' => array( 'Hören Sie und ergänzen Sie.', '듣고 빈 칸을 채우세요.' ),
                            'A5' => array( 'Hören Sie noch einmal.', '다시 한번 들으세요.' ),
                            'A6' => array( 'Ergänzen Sie.', '빈칸에 알맞은 동사의 어미를 넣어보세요.' ),
                        )
                    ),
                    'r2-Ich bin Koreanerin' => array( 'B. Ich bin Koreanerin.', '저는 한국(여)인입니다.',
                        array(
                            'B1' => array( 'Ich bin Koreanerin.', '저는 한국(여)인입니다.' ),
                        )
                    ),
                    'r2-Welche Sprachen sprechen Sie' => array( 'C. Welche Sprachen sprechen Sie?', '어떠한 언어를 말할 수 있나요?',
                        array(
                            'C1' => array( 'Ergänzen Sie die Lücken.', '빈칸을 채우세요.' ),
                            'C2' => array( 'Ergänzen Sie die Lücken.', '빈칸을 채우세요.' ),
                        )
                    ),
                    'r2-Wo liegt das Land' => array( 'D. Wo liegt das Land?', '이 나라는 어디에 있나요?',
                        array(
                            'D1' => array( 'Wo liegt das Land?', '빈칸에 알맞은 대륙 이름을 넣어보세요.' ),
                            'D2' => array( 'Hören Sie und sprechen Sie nach.', '듣고 따라 하세요.' ),
                            'D3' => array( 'Antworten Sie.', '질문에 대답하세요.' ),
                        )
                    ),
                    'r2-Uebungen' => array( 'E. Übungen', '연습문제',
                        array(
                            'E1' => array( 'Herkunft', '출생지' ),
                            'E2' => array( 'Raten Sie! Wo ist das? Sprechen Sie über die Sehenswürdigkeiten.', '맞춰보세요! 이것은 어디에 있나요? 세계 명소에 대해 말해보세요.' ),
                            'E3' => array( 'Ergänzen Sie die Lücken.', '빈칸을 채우세요.' ),
                            'E4' => array( 'Bilden Sie Sätze und markieren Sie die Verben.', '문장을 만들고 동사에 표시하세요.' ),
                            'E5' => array( 'Ordnen Sie zu.', '맞는 답끼리 연결하세요.' ),
                            'E6' => array( 'Ergänzen Sie die Fragen.', '질문을 채우세요.' ),
                        )
                    ),
                    'r2-Grammatik und Wendungen' => array( 'F. Grammatik und Wendungen', '문법과 표현' )
                )
            ),
        3 =>
            array( 'Wer ist das?', '이 분은 누구인가요?',
                array(
                    'r3-Wer ist das' => array( 'A. Wer ist das?', '이 분은 누구인가요?',
                        array(
                            'A1' => array( 'Meine Familie', '나의 가족' ),
                            'A2' => array( 'Wer ist das?', '이분은 누구인가요?' ),
                        )
                    ),
                    'r3-Wie alt ist er' => array( 'B. Wie alt ist er?', '그는 몇 살인가요?',
                        array(
                            'B1' => array( 'Zahlen(11-100)', '숫자(11~100)' ),
                            'B2' => array( 'Wie alt ist er?', '몇 살인가요?' ),
                        )
                    ),
                    'r3-Wie viele Geschwister hast du' => array( 'C. Wie viele Geschwister hast du?', '형제자매가 몇 명이니?',
                        array(
                            'C1' => array( 'Wie viele Geschwister hast du?', '형제자매가 몇 명이니?' ),
                            'C2' => array( 'Familienstand', '가족상황' ),
                        )
                    ),
                    'r3-Was sind Sie von Beruf' => array( 'D. Was sind Sie von Beruf?', '직업이 어떻게 되나요?',
                        array(
                            'D1' => array( 'Lesen Sie die Texte.', '듣고 텍스트를 읽으세요.' ),
                            'D2' => array( 'Ergänzen Sie die Tabelle.', '다음 표를 작성하세요.' ),
                            'D4' => array( 'Was sind die Leute von Beruf?', '이 사람들은 어떤 직업을 가지고 있나요?' ),
                            'D5' => array( 'Was sind Sie von Beruf?', '직업이 어떻게 돠나요?' ),
                        )
                    ),
                    'r3-Visitenkarten' => array( 'E. Visitenkarten', '명함',
                        array(
                            'E1a' => array( 'Visitenkarten', '명함' ),
                            'E1b' => array( 'Visitenkarten', '명함' ),
                        )
                    ),
                    'r3-Uebungen' => array( 'F. Übungen', '연습문제',
                        array(
                            'F1' => array( 'Wer ist das?', '이 사람은 누구인가요?' ),
                            'F2' => array( 'Ergänzen Sie.', '빈칸을 채우세요.' ),
                            'F3' => array( 'Ergänzen Sie die Verben.', '빈칸에 동사를 채우세요.' ),
                            'F5' => array( 'Ergänzen Sie', '아래의 정보를 가지고 빈 칸을 채우세요.' ),
                        )
                    ),
                    'r3-Grammatik und Wendungen' => array( 'G. Grammatik und Wendungen', '문법과 표현' )
                )
            ),
        4 =>
            array( 'In meiner Wohnung', '나의 집에서',
                array(
                    'r4-Wohnen' => array( 'A. Wohnen', '사는 것',
                        array(
                            'A1' => array( 'Wie wohnen die Leute?', '사람들은 어떻게 사나요?' ),
                            'A2' => array( 'Ordnen Sie die Bilder dem passenden Text zu.', '그림을 알맞은 텍스트와 연결하세요.' ),
                            'A3' => array( 'In meiner Wohnung', '나의 집' ),
                        )
                    ),
                    'r4-Im Zimmer' => array( 'B. Im Zimmer', '방에서',
                        array(
                            'B1' => array( 'Was ist das?', '이것은 무엇인가요?' ),
                            'B2' => array( 'Sortieren Sie die Wörter.', '위의 단어들을 성에 따라 분류하세요.' ),
                            'B4' => array( 'Wie heißt das auf Deutsch?', '이것은 독일어로 뭐라고 하나요?' ),
                            'B5' => array( 'Was passt zusammen?', '무엇이 서로 어울리나요?' ),
                        )
                    ),
                    'r4-Was ist das' => array( 'C. Was ist das?', '이것은 무엇인가요?',
                        array(
                            'C1' => array( 'Was ist das?', '이것은 무엇일까요?' ),
                            'C2a' => array( 'Wie heißt das?', '뭐라고 부르나요?' ),
                            'C2b' => array( 'Was hat er/sie oder was hat er/sie nicht?', '그(녀)는 무엇을 가지고 있고 무엇을 가지고 있지 않나요?' ),
                        )
                    ),
                    'r4-Wie ist das' => array( 'D. Wie ist das?', '이것은 어떤가요?',
                        array(
                            'D1' => array( 'Wie heißt das Gegenteil?', '반대말은 무엇인가요?' ),
                            'D2' => array( 'Adjektive', '형용사' ),
                            'D3' => array( 'In meiner Wohnung', '나의 집에서' ),
                        )
                    ),
                    'r4-Uebungen' => array( 'E. Übungen', '연습문제',
                        array(
                            'E1' => array( 'Sortieren Sie die Wörter.', '다음 단어들을 성에 따라 분류하세요.' ),
                            'E2' => array( 'Ergänzen Sie mit Artikeln.', '동사 표를 채우세요.' ),
                            'E3' => array( 'sein oder haben?', 'sein 혹은 haben?' ),
                            'E4' => array( 'Ergänzen Sie mit Artikeln.', '관사를 채우세요.' ),
                            'E5' => array( '„kein” oder „nicht”?', 'kein 혹은 nicht?' ),
                            'E6' => array( 'Schreiben Sie die Sätze.', '보기와 같이 문장을 만드세요.' ),
                        )
                    ),
                    'r4-Grammatik und Wendungen' => array( 'F. Grammatik und Wendungen', '문법과 표현' )
                )
            ),
        5 =>
            array( 'Essen und Trinken', '먹고 마시기',
                array(
                    'r5-Essen und Trinken' => array( 'A. Essen und Trinken', '먹고 마시기',
                        array(
                            'A1' => array( 'Wo sind die Leute und was machen sie?', '사람들은 어디 있고 무엇을 하나요?' ),
                            'A2' => array( 'Lesen Sie und ergänzen Sie die Lücken.', '읽고 각 그림에 해당하는<br>알맞은 단어를 찾아 넣으세요.' ),
                            'A3' => array( 'Ordnen Sie zu.', '알맞게 분류하세요.' ),
                        )
                    ),
                    'r5-Was isst du gern und was trinkst du gern' => array( 'B. Was isst du gern und was trinkst du gern?', '무엇을 즐겨 먹고 마셔?',
                        array(
                            'B1' => array( 'Mein Lieblingsessen', '내가 좋아 하는 음식' ),
                            'B2' => array( 'Was trinkst du gern?', '무엇을 즐겨 마시니?' ),
                            'B4' => array( 'Ich esse lieber Brot.', '나는 차라리 빵을 먹겠어요.' ),
                        )
                    ),
                    'r5-Was isst und trinkt er,sie' => array( 'C. Was isst und trinkt er/sie?', '그(녀)는 무엇을 먹고 마시나요?',
                        array(
                            'C1' => array( 'Was isst er(sie)?', '그(녀)는 무엇을 먹고 마시나요?' ),
                            'C2' => array( 'Was isst du und was trinkst du?', '무엇을 먹고 마시니?' ),
                            'C4' => array( 'Mahlzeiten: Was isst und trinkt Tim Sager?', '식사: 팀 자거가 무엇을 먹고 마시나요?' ),
                            'C5' => array( 'Mahlzeiten: Was isst und trinkt Monika Mai?', '식사: 모니카 마이는 무엇을 먹고 마시나요?' ),
                            'C6' => array( 'Mahlzeiten in Korea', '한국의 식사' ),
                        )
                    ),
                    'r5-Im Restaurant. Was bekommen Sie' => array( 'D. Im Restaurant. Was bekommen Sie?', '레스토랑에서.<br>무엇을 주문하시겠어요?',
                        array(
                            'D1' => array( 'Bestellen', '주문하기' ),
                            'D3' => array( 'Wer sagt das?', '누가 이야기 하나요?' ),
                            'D4' => array( 'Wir möchten gern bestellen.', '우리는 주문하고 싶어요.' ),
                            'D5' => array( 'Was möchten die Personen essen? Was möchten sie trinken?', '이 사람들은 무엇을 먹으려하나요?<br>그들은 무엇을 마시려하나요?' ),
                        )
                    ),
                    'r5-Waehrend des Essens' => array( 'E. Während des Essens', '식사 중에',
                        array(
                            'E2' => array( 'Geschmack', '입맛' ),
                            'E3' => array( 'Üben Sie.', '연습하세요.' ),
                        )
                    ),
                    'r5-Was bezahlen Sie' => array( 'F. Was bezahlen Sie?', '무엇을 지불하시겠어요?',
                        array(
                            'F1' => array( 'Bezahlen', '지불하기' ),
                            'F2' => array( 'Wir möchten bezahlen.', '계산하고 싶어요.' ),
                        )
                    ),
                    'r5-Uebungen' => array( 'G. Übungen', '연습문제',
                        array(
                            'G1' => array( 'Ordnen Sie und tragen Sie unten ein.', '알맞게 나열하세요.' ),
                            'G3' => array( 'Was essen und trinken<br>Tim und Monika gern?', '팀과 모니카는<br>무엇을 즐겨 먹고 마시나요?' ),
                            'G4' => array( 'Der Kellner bringt das Falsche.', '점원이 잘못된 음식을 가져 왔습니다.' ),
                            'G5' => array( 'Wer möchte was?', '누가 무엇을 주문하나요?' ),
                            'G7' => array( 'Was passt zusammen?', '무엇이 맞나요?' ),
                            'G10' => array( 'Ergänzen Sie die Tabelle.', '표를 채우세요.' ),
                            'G11' => array( 'Ergänzen Sie ‚e’ oder ‚i’', '‘e’ 또는 ‘i’를 채우세요.' ),
                            'G12' => array( 'Ergänzen Sie.', '채우세요.' ),
                            'G13' => array( 'Ergänzen Sie.', '채우세요.' ),
                            'G14' => array( 'Ergänzen Sie: der/den/die/das.', '정관사·지시대명사를 채우세요.' ),
                            'G16' => array( 'Ich möchte bestellen. Ich möchte bezahlen.', '주문하고 싶어요 계산하고 싶어요.' ),
                        )
                    ),
                    'r5-Grammatik und Wendungen' => array( 'H. Grammatik und Wendungen', '문법과 표현' )
                )
            ),
        6 =>
            array( 'Was machst du heute?', '오늘 뭐하니?',
                array(
                    'r6-Was machst du gern' => array( 'A. Was machst du gern?', '하루일과 중 무엇을 즐겨 하니?',
                        array(
                            'A1' => array( 'Was machen sie gern?', '그들은 무엇하기를 좋아하나요?' ),
                            'A2' => array( 'Was machen sie (nicht) gern?', '무엇을 즐겨 하나(하지 않나)요?' ),
                            'A3' => array( 'Haushalt', '가사일' ),
                        )
                    ),
                    'r6-Wie spaet ist es' => array( 'B. Wie spät ist es?', '몇시인가요?',
                        array(
                            'B0' => array( 'Wie spät ist es?', '몇시인가요?' ),
                            'B1' => array( 'Hören Sie die Uhrzeiten und notieren Sie. Wie spät ist es?', '시각을 듣고 메모를 하세요. 몇시인가요?' ),
                        )
                    ),
                    'r6-Wann hast du Deutschunterricht' => array( 'C. Wann hast du Deutschunterricht?', '독일어 수업이 언제니?',
                        array(
                            'C1' => array( 'Hören Sie und sprechen Sie nach.', '듣고 따라 하세요.' ),
                            'C2' => array( 'Wie sind die Fragen?', '어떤 질문을 할까요?' ),
                        )
                    ),
                    'r6-Tagesablauf' => array( 'D. Tagesablauf', '하루일과',
                        array(
                            'D1' => array( 'Wohin passt das? Schreiben Sie.', '무엇이 어디에 맞을까요? 써보세요.' ),
                            'D2' => array( 'Wohin passt das? Schreiben Sie.', '무엇이 어디에 맞을까요? 써보세요.' ),
                        )
                    ),
                    'r6-Uebungen' => array( 'E. Übungen', '연습문제',
                        array(
                            'E1' => array( 'Was machen die Leute?', '이 사람들은 무엇을 하나요?' ),
                            'E2' => array( 'Antworten Sie mit ja, nein, doch.', 'ja, nein, doch로 대답하세요.' ),
                            'E3' => array( 'Schreiben Sie die Uhrzeiten auf.', '시각을 쓰세요.' ),
                            'E4' => array( 'Trennbar oder nicht trennbar?', '분리 혹은 비분리 동사?' ),
                            'E5' => array( 'Sortieren Sie die Verben.', '동사를 분류하세요.' ),
                            'E6' => array( 'Was macht er am Freitag?', '그는 금요일에 실제로 무엇을 하나요?' ),
                            'E7' => array( 'Lesen Sie den Text.', '다음 글을 읽으세요.' ),
                        )
                    ),
                    'r6-Grammatik und Wendungen' => array( 'F. Grammatik und Wendungen', '문법과 표현' )
                )
            ),
        7 =>
            array( 'Was hast du am Wochenende vor?', '주말에 뭐 하니?',
                array(
                    'r7-Wochenende Was haben Sie am Wochenende vor' => array( 'A. Wochenende: Was haben Sie am Wochenende vor?', '주말: 주말에 무엇을 하나요?',
                        array(
                            'A0' => array( 'Wo ist das?', '어디인가요?' ),
                            'A1' => array( 'Was machen Sie am Wochenende?', '주말에 뭐하세요?' ),
                            'A2' => array( 'Was möchten Sie am Wochenende machen?', '주말에 무엇을 하고 싶나요?' ),
                            'A3' => array( 'Sehen Sie sich den Kalender an und lesen Sie. Was geht (nicht)?', '행사 캘린더를 보면 무엇이 가능(불가능)한가요?' ),
                        )
                    ),
                    'r7-Verabredung. Hast du heute Abend Zeit' => array( 'B. Verabredung. Hast du heute Abend Zeit?', '약속. 오늘저녁시간있니?',
                        array(
                            'B1' => array( 'Verabredung I', '약속 I' ),
                            'B2' => array( 'Verabredung II (Telefon)', '약속 II (전화)' ),
                            'B3' => array( 'Verabredung III (Chat)', '약속 III (채팅)' ),
                            'B4' => array( 'Was passt?', '무엇이 알맞은가요?' ),
                            'B5' => array( 'Verabredung IV (SMS)', '약속 III (문자메시지)' ),
                            'B6' => array( 'Höfliches Absagen bei Kurznachrichten', '문자메시지 상에서의 공손한 거절' ),
                        )
                    ),
                    'r7-Anweisungen' => array( 'C. Anweisungen: Was kann man, was darf man nicht?', '지시문. 무엇을 할 수 있고 해서는 안되나요?',
                        array(
                            'C1' => array( 'Was kann / muss / darf man (nicht)?', '무엇을 할 수 있고 해야만 하고 해도 되나요?' ),
                            'C2' => array( 'Was soll / will / möchte man (nicht)?', '무엇을 해야만 하고 하려고 하고 하고싶어 하나요?' ),
                            'C3' => array( 'Was kann man, was darf man nicht und was muss man machen?', '무엇을 할 수 있고, 해서는 안되고 해야만 할까요?' ),
                            'C4' => array( 'Lesen Sie den Text und unterstreichen Sie alle Verben.', '텍스트를 읽고 모든 동사에 줄을 그으세요.' ),
                            'C6' => array( 'Anweisung: Ordnen Sie die Sätze.', '지시문: 순서대로 나열하세요.' ),
                            'C7' => array( 'Hören Sie den Dialog und ergänzen Sie.', '대화문을 듣고 채우세요.' ),
                        )
                    ),
                    'r7-Uebungen' => array( 'D. Übungen', '연습문제',
                        array(
                            'D1' => array( 'Was passt zu welchem Bild?', '어느 그림에 무엇이 맞나요?' ),
                            'D2' => array( 'Ergänzen Sie die Lücken.', '빈칸을 채우세요.' ),
                            'D3' => array( 'Ergänzen Sie die Modalverben in der richtigen Form.', '괄호안에 알맞은 형태의 화법조동사를 넣으세요.' ),
                            'D4' => array( 'Ergänzen Sie.', '빈칸을 채우세요.' ),
                            'D5' => array( 'Wohin sollte man gehen?', '어디로 가는 것이 좋은가요?' ),
                            'D6' => array( 'Schreiben Sie die Sätze neu.', '밑줄친 단어를 이용해 문장을 다시 써보세요.' ),
                            'D7' => array( 'Ergänzen Sie um, am oder in.', '빈칸에 um, am 또는 in 중 알맞은 전치사를 넣어 보세요.' ),
                            'D8' => array( 'Ergänzen Sie das Telefongespräch.', '다음 전화통화 내용에 알맞은 답을 넣어 문장을 완성해 보세요.' ),
                        )
                    ),
                    'r7-Grammatik und Wendungen' => array( 'E. Grammatik und Wendungen', '문법과 표현' )
                )
            ),
        8 =>
            array( 'Was fehlt Ihnen?', '어디가 아픈가요?',
                array(
                    'r8-Koerper und Sport' => array( 'A. Körper und Sport', '신체와 스포츠',
                        array(
                            'A1' => array( 'Was machen die Personen?', '사람들이 무엇을 하고 있나요?' ),
                            'A2' => array( 'Lesen Sie die Texte.', '본문을 읽으세요.' ),
                        )
                    ),
                    'r8-Koerperteile und Taetigkeiten' => array( 'B. Körperteile und Tätigkeiten', '신체부위와 하는 일',
                        array(
                            'B1' => array( 'Wie heißen die Körperteile?', '신체 부위를 어떻게 부르나요?' ),
                            'B2' => array( 'Singen wir das Lied „Kopf, Schulter, Knie” zusammen.', '“머리, 어깨, 무릎” 노래를 불러보아요.' ),
                            'B3' => array( 'Suchen Sie die Körperteile.', '신체부위를 찾아 보세요.' ),
                            'B4' => array( 'Körperteile und Tätigkeiten. Was passt?', '신체부위와 그 기능들을 나열해보세요.' ),
                            'B5' => array( 'Was passt?', '무엇이 알맞은가요?' ),
                        )
                    ),
                    'r8-Krankheiten und Schmerzen' => array( 'C. Krankheiten und Schmerzen', '질병과 통증',
                        array(
                            'C1' => array( 'Was für Schmerzen sind das?', '어떤 통증인가요?' ),
                            'C2' => array( 'Er/Sie ist krank. Was hat er/sie?', '그/그녀가 아픕니다. 어디가 아픈가요?' ),
                            'C3' => array( 'Krankheiten: Ergänzen Sie.', '병명을 채우세요.' ),
                            'C4' => array( 'Hören Sie die Gespräche und klicken Sie an.', '대화를 듣고 맞는 곳에 표시하세요.' ),
                            'C5' => array( 'Welche Verben sind im Nominativ, Akkusativ, Dativ und Akkusativ oder Dativ?', '어떤 동사가 주격동사, 직접목적격동사, 간접목적격동사 혹은 직접·간접목적격 동사인가요?' ),
                            'C7' => array( 'Bilden Sie mit den Verben im Dativ einen Text.', '3격 (간접목적격) 지배동사를 가지고 텍스트를 만들어 보세요.' ),
                        )
                    ),
                    'r8-Beim Arzt' => array( 'D. Beim Arzt', '개인병원에서',
                        array(
                            'D1' => array( 'Arztbesuch: Zu welchem Arzt gehen Sie?', '병원방문: 어느병원에 가야할까요?' ),
                            'D2' => array( 'Zu Hause', '집에서' ),
                            'D3' => array( 'Termin beim Arzt', '병원예약' ),
                            'D4' => array( 'Bei der Ärztin', '개인병원에서' ),
                            'D5' => array( 'Und jetzt sind Sie der Doktor! Was sollen die Personen tun?', '당신은 의사입니다. 사람들이 무엇을 해야 하나요?' ),
                            'D6' => array( 'Ihr(e) Freund(in) hat Probleme. Was würden Sie ihm (ihr) empfehlen?', '당신의 친구에게 문제가 있어요. 그에게 뭐라고 조언을 해야 하나요?' ),
                        )
                    ),
                    'r8-Uebungen' => array( 'E. Übungen', '연습문제',
                        array(
                            'E1' => array( 'Wie heißen die Körperteile?', '신체 부위를 어떻게 부르나요?' ),
                            'E2' => array( 'Was fehlt Ihnen?', '어디가 아픈가요?' ),
                            'E3' => array( 'Bei der Ärztin: Was sagen sie?', '개인병원에서: 의사와 김선생님은 무엇이라고 말하나요?' ),
                            'E4' => array( 'Schreiben Sie die passenden Personalpronomen im Dativ.', '알맞은 간접목적어를 넣으세요.' ),
                            'E5' => array( 'Was muss man tun? Was darf man nicht?', '무엇을 해야 하고 하지말아야 하나요?' ),
                            'E6' => array( 'Imperativ: Was sagen Sie?', '명령형: 무엇이라고 말해야 하나요?' ),
                        )
                    ),
                    'r8-Grammatik und Wendungen' => array( 'F. Grammatik und Wendungen', '문법과 표현' )
                )
            ),
        9 =>
            array( 'Feste! Feste!', '축제! 축제!',
                array(
                    'r9-Feste in Deutschland' => array( 'A. Feste in Deutschland', '독일의 축제',
                        array(
                            'A0' => array( 'Wie heißen die Feste in Deutschland?', '독일의 축일을 뭐라고 하나요?' ),
                            'A1' => array( 'Wie begrüßt man sich auf den Festen?', '축제 때 어떻게 인사하나요?' ),
                            'A2' => array( 'Wie heißen die Feste in Deutschland?', '독일의 축일을 뭐라고 하나요?' ),
                            'A3' => array( 'Temporale Angaben und Zahlen.', '시간정보와 수' ),
                            'AGR' => array( 'Grundzahlen und Ordnungszahlen', '기수 · 서수' ),
                            'A4' => array( 'Schreiben Sie die Tage.', '날짜를 쓰세요.' ),
                            'A5' => array( 'Wann ist welcher Feiertag?', '언제 어떤 축제일인가요?' ),
                            'A6' => array( 'Neujahr in Korea. Frohes neues Jahr!', '한국의 설날. 새해 복많이 받으세요!' ),
                        )
                    ),
                    'r9-Geburtstagsfeier' => array( 'B. Geburtstagsfeier', '생일파티',
                        array(
                            'B1' => array( 'Wer spricht mit wem?', '누가 누구랑 이야기하나요?' ),
                            'B2' => array( 'Geburtstagsfeier in Deutschland und in Korea', '독일과 한국에서의 생일파티' ),
                            'B3' => array( 'Feste und Geschenkideen', '축제와 선물아이템: 무엇인가요?' ),
                        )
                    ),
                    'r9-Geschenke. Wer schenkt wem was' => array( 'C. Geschenke. Wer schenkt wem was?', '선물. 누가 누구에게 무엇을 선물하나요?',
                        array(
                            'C1' => array( 'Was passt zusammen?', '무엇이 무엇과 어울리나요?' ),
                            'CGR' => array( 'Personalpronomen und (un)bestimmter Artikel im Dativ und Akkusativ', '3, 4격 인칭대명사 및 정관사, 부정관사' ),
                            'C4' => array( 'Was möchten Sie zum Geburtstag haben?', '생일선물로 무엇을 가지고 싶나요? 왜요?' ),
                        )
                    ),
                    'r9-Einladungskarte' => array( 'D. Einladungskarte', '초대장',
                        array(
                            'D1' => array( 'Schreiben Sie eine Einladungskarte.', '초대장을 써보세요. 순서에 맞게 문장을 써보세요.' ),
                            'D2' => array( 'Ergänzen Sie die Personalpronomen.', '알맞은 인칭대명사를 쓰세요.' ),
                            'D3' => array( 'Schreiben Sie einen Einladungskarte zur Einweihungsfeier.', '집들이 파티에 초장을 쓰세요.' ),
                            'D4a' => array( 'Meine 20. Geburtstagsfeier', '나의 스무번째 생일' ),
                            'D4b' => array( 'Hören Sie und ergänzen Sie die passenden Partizip II-Formen.', '듣고 알맞은 과거분사형을 채우세요.' ),
                            'D4c' => array( 'Hören Sie den Text und klicken Sie an.', '듣고 알맞은 답을 선택하세요.' ),
                        )
                    ),
                    'r9-Uebungen' => array( 'E. Übungen', '연습문제',
                        array(
                            'E1' => array( 'Feste und Jahreszeiten', '축일과 계절' ),
                            'E2' => array( 'Wie heißen die Feste?', '축일 이름은?' ),
                            'E3' => array( 'Schreiben Sie die Tage.', '날짜를 쓰세요.' ),
                            'E4' => array( 'Diese Personen haben Geburtstag. Was kann man ihnen schenken? Warum?', '아래의 사람들이 생일을 맞이하였어요. 그들에게 무엇을 선물할까요?' ),
                            'E5' => array( 'Mein schönstes Fest', '나의 가장 아름다운 축일' ),
                            'E6' => array( 'Wann sagt man das?', '언제 이렇게 말하지요?' ),
                            'E7' => array( 'Ergänzen Sie die Personalpronomen im Dativ und die Verben in der richtigen Form.', '3격 인칭대명사와 동사를 올바르게 써넣으세요.' ),
                            'E8' => array( 'Ergänzen Sie die Personalpronomen im Nominativ, Akkusativ oder Dativ.', '1, 3, 4격 인칭대명사를 넣으세요.' ),
                            'E9a' => array( 'Präteritum', '과거형' ),
                            'E9b' => array( 'Präteritum von sein und haben.', 'haben과 sein의 과거형' ),
                            'E10a' => array( 'Das Perfekt mit „haben“ oder „sein“ ?', '완료형에서 조동사 haben 혹은 sein 중 어느 것이 맞나요?' ),
                            'E10b' => array( 'TIPP', '현재완료형' ),
                            'E11' => array( 'Perfekt', '완료형' ),
                            'E12' => array( 'Wie war das Fest zu Neujahr, in Korea ,Seolnal’? Schreiben Sie an Ihrer Freundin Mina.', '한국의 설날은 어떻게 보내셨나요? 친구인 미나에게 써보세요.' ),
                        )
                    ),
                    'r9-Grammatik und Wendungen' => array( 'F. Grammatik und Wendungen', '문법과 표현' )
                )
            ),
        10 =>
            array( 'Wie komme ich zur Bank?', '은행에 어떻게 가나요?',
                array(
                    'r10-Stadtplan' => array( 'A. Stadtplan', '지도',
                        array(
                            'A1' => array( 'Wo ist das?', '어디인가요?' ),
                            'A2' => array( 'Wo sind die Leute?', '사람들이 어디에 있나요?' ),
                            'A3' => array( 'Entschuldigung, wo ist das Café Dornbusch?', '실례하지만 도른부쉬 카페가 어디있나요?' ),
                            'A4' => array( 'Wohin gehen Sie, wenn Sie ...... ?', '당신이 만약 ... 하고 싶다면 어디로 가나요?' ),
                        )
                    ),
                    'r10-Nach dem Weg fragen' => array( 'B. Nach dem Weg fragen', '길 묻기',
                        array(
                            'B1' => array( 'Nach dem Weg fragen', '길 묻기' ),
                            'B2' => array( 'Entschuldigung, wie komme ich ...?', '죄송하지만.. 어디로 .... ?' ),
                            'B3a' => array( 'Wie heißen die Fahrzeuge auf Deutsch?', '독일어로 교통기관들을 뭐라고 하나요?' ),
                            'B3b' => array( 'Wie heißen die Fahrzeuge auf Deutsch?', '독일어로 교통기관들을 뭐라고 하나요?' ),
                            'B4' => array( 'Ergänzen Sie die passenden Präpositionen.', '알맞은 전치사를 채우세요.' ),
                            'BGR' => array( 'Wechselpräpositionen', '3·4격 전치사' ),
                        )
                    ),
                    'r10-Sehenswuerdigkeiten in Dresden' => array( 'C. Sehenswürdigkeiten in Dresden', '드레스덴의 명소들',
                        array(
                            'C1' => array( 'Welche Fotos und Texte passen zusammen?', '어떤 사진이 어떤 텍스트와 어울릴까요?' ),
                            'C2' => array( 'Wie heißen die Orte?', '명소의 이름은 무엇인가요?' ),
                            'C3' => array( 'Suchen Sie die Orte auf dem Stadtplan von Dresden und ergänzen Sie die Nummern.', '드레스덴 시내 지도에서 장소를 찾아 번호를 집어넣으세요.' ),
                            'C4' => array( 'Die Leute sind auf dem Theaterplatz. Wohin und wie wollen sie fahren (gehen)?', '사람들이 테아터광장에 있습니다. 어디로 그리고 어떤 교통수단으로 가려고 합니다.' ),
                        )
                    ),
                    'r10-Urlaub in Dresden' => array( 'D. Urlaub in Dresden', '드레스덴에서의 휴가',
                        array(
                            'D1' => array( 'Perfekt: Perfekt- und Infinitivformen', '완료형: 완료형과 부정형' ),
                            'D2' => array( 'Mein Urlaub in Dresden', '드레스덴에서의 휴가' ),
                        )
                    ),
                    'r10-Uebungen' => array( 'E. Übungen', '연습문제',
                        array(
                            'E1a' => array( 'Wo ist der Spatz?', '어디에 참새가 있나요?' ),
                            'E1b' => array( 'Wohin fliegt der Spatz?', '어디로 참새가 날라가나요?' ),
                            'E2a' => array( 'Wo sind die Gegenstände im Zimmer?', '문장을 채우세요.' ),
                            'E2b' => array( 'Wohin bringt sie die Gegenstände?', '문장을 채우세요.' ),
                            'E3' => array( 'Wo kann man in Gartenstadt was machen?', '가르텐시의 어디서 무엇을 할 수 있나요?' ),
                            'E4' => array( 'Ordnen Sie die Ausdrücke aus dem Kasten in die Tabelle ein.', '상자안의 표현구들을 표안에 넣으세요.' ),
                            'E5' => array( 'Entschuldigung, wo ist ... ?', '실례하지만...' ),
                            'E6' => array( 'Wie komme ich zum/zur ...?', '어떻게 ... 가야할까요?' ),
                            'E7a' => array( 'Hören Sie die Dialoge und ergänzen Sie die Lücken: Am Alexanderplatz', '문장을 대화문을 듣고 빈칸을채우세요: 알렉산더 플라자' ),
                            'E7b' => array( 'Hören Sie die Dialoge und ergänzen Sie die Lücken: An der Frauenkirche', '문장을 대화문을 듣고 빈칸을채우세요: 프라우엔 교회' ),
                            'E7c' => array( 'Hören Sie die Dialoge und ergänzen Sie die Lücken: An der Bushaltestelle', '문장을 대화문을 듣고 빈칸을채우세요: 버스 정류장' ),
                            'E8' => array( 'Ordnen Sie die Verben je nach der Partizip –II Formen zu.', '과거분사형태에 따라 구분해보세요.' ),
                            'E10' => array( 'Ergänzen Sie die Perfekt-Formen.', '완료형을 넣으세요.' ),
                            'E11' => array( 'Mein Urlaub in Dresden: Ordnen Sie die Bildungen zu und Schreiben Sie die Sätze ins Perfekt.', '드레스덴에서의 나의 휴가: 그림을 연결하고 완료형의 문장으로 쓰세요.' ),
                        )
                    ),
                    'r10-Grammatik und Wendungen' => array( 'F. Grammatik und Wendungen', '문법과 표현' )
                )
            ),
        12 =>
            array( 'Reise und Urlaub', '여행 및 휴가',
                array(
                    'r12-Reise und Urlaubstypen' => array( 'A. Reise und Urlaubstypen', '여행 및 휴가종류',
                        array(
                            'A1' => array( 'Wie heißen die Urlaubs und Reisetypen?', '휴가 및 여행 타입을 뭐라 하나요? 연결하세요.' ),
                            'A2' => array( 'Welche Urlaubs-und Reisetypen aus A1 passen mit den folgenden Textausschnitten zusammen?', 'A1의 어떤 휴가 및 여행의 종류가 아래의 텍스트와 어울리나요?' ),
                            'A3' => array( 'Was möchten die Leute im Urlaub machen?', '사람들은 휴가중에 무엇을 하기를 원하나요?' ),
                            'A4' => array( 'Hören Sie die Interviews und antworten Sie auf die Fragen.', '인터뷰를 듣고 질문에 답하세요.' ),
                        )
                    ),
                    'r12-Sprachreise' => array( 'B. Sprachreise', '어학 연수',
                        array(
                            'B1' => array( 'Anfrage nach dem Sommersparchkurs (per Mail)', '여름어학코스에 관한 문의 (이메일)' ),
                            'B2' => array( 'Rückmeldung vom Sprachinstitut (per Mail)', '어학 기관으로부터의 답장 (메일)' ),
                            'B3' => array( 'Anmeldung für den Sommersprachkurs (online)', '여름코스 등록 (온라인)' ),
                        )
                    ),
                    'r12-Reservierungen' => array( 'C. Reservierungen', '예약',
                        array(
                            'C1' => array( 'Zimmerreservierung im Studentenwerk (online)', '학교 기숙사 방예약 (온라인)' ),
                            'C2' => array( 'Bahnkartereservierung', '기차표 예약' ),
                            'C4' => array( 'Hotelzimmerreservierung (per Telefon)', '호텔방 예약 (전화로)' ),
                        )
                    ),
                    'r12-Minas Reisebeitraege (auf Facebook)' => array( 'D. Minas Reisebeiträge (auf Facebook)', '미나의 여행일지 (페이스북)',
                        array(
                            'D1' => array( 'Mein erster Flug (auf Facebook)', '나의 첫 비행' ),
                            'D2' => array( 'Formulieren Sie die Aktivsätze in Passivsätze um.', '능동태의 문장을 수동태로 바꾸세요.' ),
                            'D4' => array( 'Meine Sprachreise (auf Facebook)', '나의 어학연수 (페이스북)' ),
                        )
                    ),
                    'r12-Uebungen' => array( 'E. Übungen', '연습문제',
                        array(
                            'E2' => array( 'Sehen Sie sich die Bilder an. Wie heißen die Urlaubs-und Reisetypen Was passt zusammen?', '그림을 보세요. 이러한 휴가 및 여행을 뭐하고 부르나요? 무엇이 어울리나요?' ),
                            'E3' => array( 'Was bedeuten die Symbole (Piktogramme)?', '다음의 상징(픽토그램)들은 무슨 뜻일까요? 연결해보세요.' ),
                            'E5' => array( 'Mina fliegt ins Fernland. Ihre Mutter fragt sie, ob alles in Ordnung ist.', '미나는 멀리 여행을 떠납니다. 엄마가 미나에게 모든 것이 다 잘 준비되었는지를 묻습니다.' ),
                            'E6' => array( 'Welches Bild passt zu welchem Dialog?', '어떤 그림이 어떤 대화에 알맞습니까?' ),
                            'E7' => array( 'Durchsagen und Ansagen . Welche Durchsage passt nicht?', '안내방송. 어떤 말이 어울리지 않나요?' ),
                            'E8' => array( 'Mina ist zur Teilnahme am Sprachkurs in Frankfurt gelandet.', '미나가 어학연수를 위하여 프랑크프르트에 도착하였습니다.' ),
                            'E9a' => array( 'Wen siezt oder duzt man normalerweise in Deutschland?', '독일에서 누구에게 존칭 그리고 친칭하나요?' ),
                            'E9b' => array( 'Welche Anrede und Grußformeln benutzen Sie beim Siezen und beim Duzen?', 'Sie를 사용할 때와 du를 사용할 때 어떤 인사말 (호칭) 과 끝 인사를 사용하나요' ),
                            'E10' => array( 'Schema der E-Mail: Redemitttel (Anfang und Schluss)', '이메일의 형식: 표현법 (그리고 도입과 맺음말)' ),
                            'E11a' => array( 'Indikativ Präteritum und Konjunktiv II.', '과거형과 가정법 II식.' ),
                            'E11b' => array( 'Bilden Sie Sätze in Konjunkitv II', '가정법 II식으로 문장을 만드세요.' ),
                        )
                    ),
                    'r12-Grammatik und Wendungen' => array( 'F. Grammatik und Wendungen', '문법과 표현' )
                )
            )
    );

    /* 주 제목과 부 제목 추출 */
    switch ( $lv ) {
        case 'int':
            $main_title = '
            <img src="./dev/images/Na geht\'s title.png"
                 width="50%" class="mx-auto" alt=""/>
            <h1>Willkommen auf der PUTS
                Lern-Website!<br/><small>PUTS 학습 웹사이트에 오신 것을
                    환영합니다!</small></h1>
            <h2><small>보이지 않는 단원은 작업 중입니다.<br>문의 사항은 <a
                        href="https://www.nagehts.org/together"><small>함께해요</small></a>
                    공간을 이용해주세요.</small></h2>
            ';
            break;
        case 'Deu':
            $main_title = $men['D'][0];
            $sub_title = $men['D'][1];
            break;
        case 'lv1':
            $main_title = 'Reihe ' . $r;
            $sub_title = $men[$r][0] . '<br /><small>' . $men[$r][1] . '</small>';
            break;
        case 'lv2':
            $main_title = $men[$r][2][$fn][0];
            $sub_title = $men[$r][2][$fn][1];
            break;
        case 'lv3':
            $item = substr($fn, $hp);
            foreach ( $men[$r][2] as $first_key => $first ) {
                for ( $f = 0, $fMax = count($first); $f < $fMax; $f++ ) {
                    if ( $f === 2 ) {
                        foreach ( $first[$f] as $second_key => $second ) {
                            if ( $second_key === $item ) {
                                $main_title = $second[0];
                                $sub_title = $second[1];

                                if ( preg_match('/[a-z]/', ( substr($second_key, -1) )) ) {
                                    $item_head = substr($second_key, 0, ( strlen($second_key) - 1 ));
                                    $item_tail = ord(substr($second_key, -1)) - 96;
                                }

                                if ( preg_match('/[^a-z]/', ( substr($second_key, -1) )) ) {
                                    $item_head = $second_key;
                                }

                                if ( substr($second_key, -2) === 'GR' ) {
                                    $item_head = 'GR';
                                }
                            }
                        }
                    }
                }
            }
            break;
        default:
            throw new RuntimeException('있을 수 없는 값이네요');

    }
?>

<!-- 상단 큰 제목 -->
<header>
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center align-middle">
                    <h1 class="display-4 font-weight-bold">
                        <?php
                            /* 주 제목 출력 */
                            if ( !empty($main_title) ) {
                                echo $main_title;
                            }
                        ?>
                    </h1>
                    <h2>
                        <?php
                            /* 부 제목 출력 */
                            if ( !empty($sub_title) ) {
                                echo $sub_title;
                            }

                            /* 교재 항목 번호 출력 */
                            if ( $lv === 'lv3' ) {
                                echo '<br /><small class="mt-2">( 교재 <span class="bg-' . $color . ' p-1 px-2 m-1 rounded text-white">' . $item_head;
                                if ( !empty($item_tail) ) echo '<small>-' . $item_tail . '</small>';
                                echo '</span>)</small>';
                            }
                        ?>
                    </h2>
                </div>
            </div>
        </div>
    </div>
</header>
<?php
    /* Deutschland */
    if ( $lv === "Deu" ) {
        ?>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <img class="mx-auto" width="100%" src="dev/images/Reihe 0/Reihe-0-0.png" alt=""/>
                        <p>&nbsp;</p>
                        <p class="text-start">독일(Bundesrepublik Deutschland)은 중부유럽 북부에 위치하고 있으며 북쪽으로는 덴마크, 네덜란드, 벨기에,
                            룩셈부르크, 프랑스, 남쪽으로는
                            스위스, 오스트리아, 동쪽으로는 체코공화국, 폴란드 등 9 개의 나라에 둘러 쌓여있다. 이러한 지형적인 특성으로 유럽의 심장(das Herz Europas)이라고
                            불린다. 독일의 면적은 35만
                            7,104㎢로서 세계에서 61번째로 큰 나라로 우리 나라의1.6배에 해당하며 1990년 통일 이후 16개의 주로 구성된 연방국가이다.</p>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
?>

<!--스타일 먼저 보이기-->
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="./dev/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="./dev/css/bootstrap-custom.css" rel="stylesheet" type="text/css">
<link href="./dev/css/global.css" rel="stylesheet" type="text/css">
