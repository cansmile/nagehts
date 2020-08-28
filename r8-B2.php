<?php require_once("heading.php"); ?>
    <style>
        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
        }

        .video-container iframe,
        .video-container object,
        .video-container embed {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

    </style>
    <section>
        <div class="container">
            <!-- 고르는 아이템들 -->
            <div class="row">
                <div
                    class="col-12 text-center align-middle display-4 p-5 m-1 border border-dark rounded">
                    <small>
                        <div
                            class="bg-light text-secondary p-1 px-2 m-1 rounded">
                            Kopf und Schulter, Knie und Fuß, Knie und Fuß.</div>
                        <div
                            class="bg-secondary text-white p-1 px-2 m-1 rounded">
                            Kopf und Schulter, Knie und Fuß, Knie und Fuß.</div>
                        <div
                            class="bg-light text-secondary p-1 px-2 m-1 rounded">
                            Augen, Ohren und Nase und Mund.</div>
                        <div
                            class="bg-secondary text-white p-1 px-2 m-1 rounded">
                            Kopf und Schulter, Knie und Fuß, Knie und Fuß.</div>
                    </small></div>
                <div class="col-12">
                    <div class="video-container rounded"><object width="320"
                            height="240">
                            <param name="movie"
                                value="https://www.youtube.com/v/vyTNuVCdUzw?version=3">
                            </param>
                            <param name="allowFullScreen" value="true">
                            </param>
                            <param name="allowscriptaccess" value="always">
                            </param><embed
                                src="https://www.youtube.com/v/vyTNuVCdUzw?version=3"
                                type="application/x-shockwave-flash" width="320"
                                height="240" allowscriptaccess="always"
                                allowfullscreen="true"></embed></object></div>
                </div>
            </div>

        </div>
    </section>



    <?php require "footer.php"; ?>
    </body>

</html>
