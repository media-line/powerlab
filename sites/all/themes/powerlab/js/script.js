jQuery(document).ready(function () {
    //анимация блока "примеры работ" (тахометр и авто)
    var exemplesBlock = jQuery('.uk-exemples_block');
    var exempleCar = jQuery('.uk-exemples_block-slider-car');
    var tachonometer = jQuery('.uk-exemples_block-slider-tachometer');
    var tachMarker = jQuery('.uk-exemples_block-slider-tachometer-marker');


    jQuery('.uk-exemples_block-slider-car[data-uk-scrollspy]').on('inview.uk.scrollspy', function(){

        //UIkit.init.uk.scrollspy(jQuery('.uk-exemples_block-slider-tachometer'), {});
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

