<!DOCTYPE html>
<html lang="en">
<head>
    <?php require('inc/head.php') ?>
</head>
<body id="news">
<div class="content">
    <header>
        <?php require('inc/header.php') ?>
    </header>
    <section id="news-feed" class="pb-5">
        <div class="container">
            <h1 class="text-center">News</h1>
            <hr>
            <div class="news-info">
                <div class="media">
                    <img class="d-flex align-self-center mr-3" src="resources/img/logos/rvt-200.png" width="200"
                         alt="Point">
                    <div class="media-body">
                        <p class="lead">
                            The final conference will be in <strong>Riga State Technical School</strong>, Latvia on May 23, 2018.
                        </p>

                        <button type="button" class="btn btn-outline-primary rvt-btn btn-lg"
                                onClick="location.href='resources/files/Nordplus_konference_programma.pdf'">Agenda
                        </button>
                    </div>
                </div>
            </div>

            <div class="news-info">
                <div class="media">
                    <img class="d-flex align-self-center mr-3" src="resources/img/logos/rvt-200.png" width="rvt"
                         alt="Point">
                    <div class="media-body">
                        <p class="lead">
                            The last partner meeting will be in <strong>Riga State Technical School</strong>, Latvia on May 22, 2018.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="news-calendar" class="pt-5 pb-5">
        <div class="container">
            <h2 class="text-center">Calendar</h2>
            <hr>
            <div id="calendar"></div>
        </div>
    </section>
</div>
<footer class="footer">
    <?php require('inc/footer.php') ?>
</footer>
</body>
</html>