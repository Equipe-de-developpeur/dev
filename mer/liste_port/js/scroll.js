 jQuery(function(){
                $(function () {
                    $(window).scroll(function () {
                        if ($(this).scrollTop() >10 ) { 
                            $('#scrollUp').css('right','50px');
                        } else { 
                            $('#scrollUp').removeAttr( 'style' );
                        }
 
                    });
                });
            });