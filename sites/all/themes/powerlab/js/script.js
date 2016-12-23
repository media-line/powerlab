jQuery(document).ready(function () {

    //Видео для слайдера
    //Включение / отключение звука
    jQuery('.js-mute').click(function () {

        var videoId = jQuery(this).closest('.js-video-container').find('video').attr('id');
        var video = document.getElementById(videoId);

        if(video.muted){
            video.muted = false;
            jQuery(this).removeClass('uk-muted');
        } else{
            video.muted = true;
            jQuery(this).addClass('uk-muted');
        }

    });

    //Play / pause videos on slideshow
    /*var allVideosIds = [];
    jQuery('.js-slideshow video').each(function (index) {
        var id = jQuery(this).attr('id');
        allVideosIds[index] = id;
        document.getElementById(id).pause();
    });

    var currentVideoId = jQuery(this).find('.uk-active video').attr('id');
    document.getElementById(currentVideoId).play();

    jQuery('.js-slideshow').on('show.uk.slideshow', function(){
        jQuery(this).find('video').each(function (index) {
            var id = jQuery(this).attr('id');
            allVideosIds[index] = id;
            document.getElementById(id).pause();
        });
        var currentVideoId = jQuery(this).find('.uk-active video').attr('id');
        document.getElementById(currentVideoId).play();
    });*/


    //анимация блока "примеры работ" (тахометр и авто)
    jQuery('.uk-exemples_block-slider-car[data-uk-scrollspy]').on('inview.uk.scrollspy', function(){
        var tachMarker = jQuery('.uk-exemples_block-slider-tachometer-marker');

        jQuery('.uk-exemples_block-slider-tachometer').addClass('uk-tachometer-visible');

        jQuery('.uk-exemples_block-slider-tachometer-counter').animate({ num: 80-1/* - начало */ }, {
            duration: 2500,
            step: function (num){
                this.innerHTML = (num + 1).toFixed(0)
            },
            complete: function() {
                jQuery('.uk-exemples_block-slider-tachometer-counter').animate({ num: 50+1/* - начало */ }, {
                    duration: 500,
                    step: function (num){
                        this.innerHTML = (num - 1).toFixed(0)
                    },
                    complete: function() {
                        jQuery('.uk-exemples_block-slider-tachometer-counter').animate({ num: 180-1/* - начало */ }, {
                            duration: 2000,
                            step: function (num){
                                this.innerHTML = (num + 1).toFixed(0)
                            }

                        });
                    }
                });
            }
        });
        tachMarker.addClass('uk-marker-rotate uk-marker-rotate-180');

        //tachMarker.addClass('test');
        /*tachMarker.delay(500).queue(function(next) {
            jQuery(this).css({
                'transform' : 'rotate(90deg)'
            });
            next();
        });*/

    });
});

