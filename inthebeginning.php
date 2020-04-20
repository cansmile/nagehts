<?php require "header.php"; ?>

<body>
    <?php require "nav.php"; ?>
    <header>
        <div class="jumbotron">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="./<?php echo($root); ?>images/Na geht's title.png"
                            width="50%" class="mx-auto" alt="" />
                        <h1>Willkommen auf der PUTS
                            Lern-Website!<br /><small>PUTS 학습 웹사이트에 오신 것을
                                환영합니다!</small></h1>
                        <h2><small>보이지 않는 단원은 작업 중입니다.<br>문의 사항은 <a
                                    href="https://www.nagehts.org/together"><small>함께해요</small></a>
                                공간을 이용해주세요.</small></h2>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="container">
            <div class="row">
                <?php require "inhalt.php"; ?>
            </div>
        </div>
    </section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="./<?php echo($root); ?>js/jquery-3.4.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./<?php echo($root); ?>js/popper.min.js"></script>
    <script src="./<?php echo($root); ?>js/bootstrap.js"></script>
    <?php require "footer.php"; ?>
</body>

</html>
