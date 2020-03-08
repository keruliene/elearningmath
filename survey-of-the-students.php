<!DOCTYPE html>
<html lang="en">
<head>
    <?php require('inc/head.php') ?>
</head>
<body id="survey-of-the-students" class="bg-light">
<div class="content">
    <header>
        <?php require('inc/header.php') ?>
    </header>
    <div class="cover-photo">
        <div class="overlay"></div>
        <div class="survey-title">
            <div class="survey-title-content">
                <div class="survey-title-content-inner text-center">
                    <h1 class="text-center font-weight-bold">Survey of the students</h1>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-5">
        <div class="container">
            <section id="first-inquiry-form" class="mb-5">
                <div class="link-to-form">
                    <h2 class="font-weight-bold d-inline">First inquiry form </h2>
                    <a class="open-form"
                       href="https://docs.google.com/forms/d/e/1FAIpQLSf4ubMCd0zrIxFFUirpighgUfjx-vA7toKonpgDurXDwP8EFg/viewform"
                       target="_blank"><i class="fas fa-external-link-alt"></i></a>
                </div>
                <div class="results pt-5">
                    <h3 class="font-weight-bold pb-3">Results</h3>
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <div class="school-results school-results-rvt">
                                <div class="overlay-results"></div>
                                <div class="school-results-info">
                                    <div class="school-results-img">
                                        <img class="img-fluid" src="resources/img/logos/rvt.png" alt="VECC RSTS logo">
                                    </div>
                                    <div class="pt-3">
                                        <button type="button" class="btn btn-outline-primary rvt-btn"
                                                onClick="window.open('resources/files/mathematics_results/VECC_RSTS_mathematics_results.pdf', '_blank')">
                                            View results
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="school-results school-results-point">
                                <div class="overlay-results"></div>
                                <div class="school-results-info">
                                    <div class="school-results-img">
                                        <img class="img-fluid" src="resources/img/logos/point.png"
                                             alt="Point College logo">
                                    </div>
                                    <div class="pt-3">
                                        <button type="button" class="btn btn-outline-primary point-btn"
                                                onClick="window.open('resources/files/mathematics_results/Point_College_mathematics_results.pdf', '_blank')">
                                            View results
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="school-results school-results-valga">
                                <div class="overlay-results"></div>
                                <div class="school-results-info">
                                    <div class="school-results-img">
                                        <img class="img-fluid" src="resources/img/logos/valga.png" alt="Valga logo">
                                    </div>
                                    <div class="pt-3">
                                        <button type="button" class="btn btn-outline-primary valga-btn"
                                                onClick="window.open('resources/files/mathematics_results/VCVTC_mathematics_results.pdf', '_blank')">
                                            View results
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="first-inquiry-form">
                <div class="link-to-form">
                    <h2 class="font-weight-bold d-inline">Second inquiry form </h2>
                    <a class="open-form"
                       href="https://docs.google.com/forms/d/e/1FAIpQLSfkeXQfOPG9mIaUUBgnbK6o0mQqx4bh2hld5K6tgDwOzRbUcA/viewform"
                       target="_blank"><i class="fas fa-external-link-alt"></i></a>
                </div>
            </section>
        </div>
    </div>
</div>

<footer class="footer">
    <?php require('inc/footer.php') ?>
</footer>
</body>
</html>