<?php require "header.php"; ?>

<body>
    <?php require "nav.php"; ?>
    <!--이정표 시작-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-4 mt-2 text-center">
                    <h2>Inhalt</h2>
                </div>
            </div>
            <div class="row">
                <?php  require "inhalt.php"; ?>
            </div>
            <div class="row">
                <div class="col-lg-12 mb-4 mt-2 text-center">
                    <p>
                        &nbsp;
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--이정표 끝-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="./<?php echo($root); ?>js/jquery-3.4.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./<?php echo($root); ?>js/popper.min.js"></script>
    <script src="./<?php echo($root); ?>js/bootstrap.js"></script>
    <?php require "footer.php"; ?>
</body>

</html>