$(document).ready(function() {
    console.log("hello");
    $('.modalDialog').fadeIn();

    $('.close').on('click', function(event) {
        event.preventDefault();
        /* Act on the event */

        $('.modalDialog').fadeOut();

    });
    $('#video-intro').autoplay = true;
    $('.control-video').on('click', function() {
        var video = $('#video-intro').get(0);
        if (video.paused) {
            video.play();
            $(".play").hide();
            $(".pause").show();
            $("#video-icon").removeClass("icon-play_arrow");
            $("#video-icon").addClass("icon-pause1");
        } else {
            video.pause();
            $(".play").show();
            $(".pause").hide();
            $("#video-icon").removeClass("icon-pause1");
            $("#video-icon").addClass("icon-play_arrow");

        }
        return false;
    });

    $('.all-values').slick({

        dots: false,
        
        infinite: false,
        
        speed: 300,
        
        slidesToShow: 4,
        
        slidesToScroll: 4,

        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: false,
                arrows: false
            }
        },
        {
            breakpoint: 1000,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                infinite: false,
                arrows: false
            }
        },
        {
            breakpoint: 780,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                infinite: false,
                arrows: false
            }
        },

        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false
            }
        }

    ]
 
    });
});