<!DOCTYPE html>
<html lang="en">
<head>
    <?php require('inc/head.php') ?>
</head>
<body id="participating-schools">
<header>
    <?php require('inc/header.php') ?>
</header>
<div class="content">
    <section id="rvt">
        <div class="school-photo">
            <div class="overlay"></div>
            <div class="school-title">
                <div class="school-title-content">
                    <div class="school-title-content-inner text-center">
                        <div class="school-logo">
                            <img class="img-fluid" src="resources/img/logos/rvt.png" alt="VECC RSTS logo">
                        </div>
                        <h1 class="text-center font-weight-bold pt-3 pb-3">Vocational Education Competence Centre<br>“Riga State Technical School”</h1>
                        <button type="button" class="btn btn-outline-primary rvt-btn btn-lg" onClick="window.open('resources/files/RSTS_presentation.pdf', '_blank')">Presentation</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="school-info pt-5 pb-3">
            <div class="triangle-up rvt-triangle"></div>
            <div class="container-fluid">
                <div class="text-center">
                    <div class="social-icons pb-5">
                        <div class="d-inline">
                            <a href="https://www.facebook.com/rigasvalststehnikums" class="icon icon-facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        </div>
                        <div class="d-inline">
                            <a href="https://twitter.com/rvt_lv" class="icon icon-twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                        </div>
                        <div class="d-inline">
                            <a href="https://www.youtube.com/user/rigasvalststehnikums" class="icon icon-youtube" target="_blank"><i class="fab fa-youtube"></i></a>
                        </div>
                        <div class="d-inline">
                            <a href="http://rvt.lv" class="rvt icon icon-home" target="_blank"><i class="fas fa-home"></i></a>
                        </div>
                    </div>
                    <div id="rvt-map"></div>
                </div>
            </div>
        </div>
    </section>
    <section id="point">
        <div class="school-photo">
            <div class="overlay"></div>
            <div class="school-title">
                <div class="school-title-content">
                    <div class="school-title-content-inner text-center">
                        <div class="school-logo">
                            <img class="img-fluid" src="resources/img/logos/point.png" alt="Point College logo">
                        </div>
                        <h1 class="text-center font-weight-bold pt-3 pb-3">Porvoo International College/Point College</h1>
                        <button type="button" class="btn btn-outline-primary point-btn btn-lg"  onClick="window.open('resources/files/Point_College_presentation.pdf', '_blank')">Presentation</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="school-info pt-5 pb-3">
            <div class="triangle-up point-triangle"></div>
            <div class="container-fluid">
                <div class="text-center">
                    <div class="social-icons pb-5">
                        <div class="d-inline">
                            <a href="https://www.facebook.com/Point-College-817896378232470" class="icon icon-facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        </div>
                        <div class="d-inline">
                            <a href="https://twitter.com/Pointcollege" class="icon icon-twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                        </div>
                        <div class="d-inline">
                            <a href="https://www.instagram.com/pointcollegeporvoo/" class="icon icon-instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="d-inline">
                            <a href="http://www.pointcollege.fi" class=" point icon icon-home" target="_blank"><i class="point fas fa-home"></i></a>
                        </div>
                    </div>
                    <div id="point-map"></div>
                </div>
            </div>
        </div>
    </section>
    <section id="valga">
        <div class="school-photo">
            <div class="overlay"></div>
            <div class="school-title">
                <div class="school-title-content">
                    <div class="school-title-content-inner text-center">
                        <div class="school-logo">
                            <img class="img-fluid" src="resources/img/logos/valga.png" alt="Valga logo">
                        </div>
                        <h1 class="text-center font-weight-bold pt-3 pb-3">Valga County Vocational Training Centre</h1>
                        <button type="button" class="btn btn-outline-primary valga-btn btn-lg" onClick="window.open('resources/files/VKOK_presentation.pdf', '_blank')">Presentation</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="school-info pt-5 pb-3">
            <div class="triangle-up valga-triangle"></div>
            <div class="container-fluid">
                <div class="text-center">
                    <div class="social-icons pb-5">
                        <div class="d-inline">
                            <a href="https://www.facebook.com/ValgamaaKOK" class="icon icon-facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        </div>
                        <div class="d-inline">
                            <a href="http://www.vkok.ee" class="valga icon icon-home" target="_blank"><i class="valga fas fa-home"></i></a>
                        </div>
                    </div>
                    <div id="valga-map"></div>
                </div>
            </div>
        </div>
    </section>
</div>
<footer class="footer">
    <script>
        function initMap() {
            var rvt = new google.maps.LatLng( 56.952983,24.103988);
            var point = new google.maps.LatLng( 60.388393,25.642793);
            var valga = new google.maps.LatLng( 57.789452,26.035355);

            var rvtOptions = {
                zoom: 17,
                center: rvt,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            var pointOptions = {
                zoom: 17,
                center: point,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            var valgaOptions = {
                zoom: 17,
                center: valga,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            var rvtMap = new google.maps.Map(document.getElementById('rvt-map'), rvtOptions);
            var pointMap = new google.maps.Map(document.getElementById('point-map'), pointOptions);
            var valgaMap = new google.maps.Map(document.getElementById('valga-map'), valgaOptions);

            var rvtImage = 'resources/img/markers/marker-rvt.png';
            var pointImage = 'resources/img/markers/marker-porvoo.png';
            var valgaImage = 'resources/img/markers/marker-valga.png';

            var rvtMarker = new google.maps.Marker({
                position: rvt,
                map: rvtMap,
                title: 'Kr.Valdemāra iela 1c, Rīga, LV-1010',
                icon: rvtImage
            });

            var pointMarker = new google.maps.Marker({
                position: point,
                map: pointMap,
                title: 'Opistokuja 1, 06100 Porvoo, Finland',
                icon: pointImage
            });

            var valgaMarker = new google.maps.Marker({
                position: valga,
                map: valgaMap,
                title: 'Loode 3, 68206 Valga, Estonia',
                icon: valgaImage
            });
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3xWnFMKOxj1vrC3XXwpd2fvpPRgwZkXY&callback=initMap">
    </script>
    <?php require('inc/footer.php') ?>
</footer>
</body>
</html>