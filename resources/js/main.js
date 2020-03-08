$(document).ready(function() {
    $('#calendar').fullCalendar({
        firstDay: 1,

        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'listDay,listWeek,month'
        },

        views: {
            listDay: { buttonText: 'list day' },
            listWeek: { buttonText: 'list week' }
        },

        events: [
            {
                title: 'Partner meeting in Porvoo International College/Point College, Finland',
                start: '2017-11-08',
                end: '2017-11-10'
            },
            {
                title: 'Working meeting and experience exchange in Porvoo International College/Point College, Finland',
                start: '2017-11-08',
                end: '2017-11-11'
            },
            {
                title: 'Partner meeting in Valga County Vocational Training Centre, Estonia',
                start: '2018-03-07',
                end: '2018-03-09'
            },
            {
                title: 'Working meeting and experience exchange in Valga County Vocational Training Centre, Estonia',
                start: '2018-03-07',
                end: '2018-03-10'
            },
            {
                title: 'Final conference in Riga State Technical School, Latvia',
                start: '2018-05-23'
            },
            {
                title: 'Last partner meeting in Riga State Technical School, Latvia',
                start: '2018-05-22'
            },
        ],

        defaultView: 'listWeek'
    });


    if ($('#home').length > 0)
    {
        if($(window).width() > 991) {
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();

                if (scroll >= 50) {
                    $(".navbar").addClass("navbar-shrink");
                    $(".dropdown-menu").addClass("dropdown-shrink");
                } else {
                    $(".navbar").removeClass("navbar-shrink");
                    $(".dropdown-menu").removeClass("dropdown-shrink");
                }
            });
        }
    }

    $('.dropdown').on('show.bs.dropdown', function() {
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
    });

    $('.dropdown').on('hide.bs.dropdown', function() {
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
    });

});
