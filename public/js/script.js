jQuery( document ).ready( function () {
    jQuery( document ).on( 'click' , '.news li' , function () {
        jQuery( ".popup" ).show();
        var bg = jQuery( this ).css( 'background-image' );
        jQuery( ".popup" ).css( "background-image" , bg );
        jQuery( ".popup" ).css( "background-size" , "cover" );
    } );

    jQuery( document ).on( 'click' , '.popup' , function () {
        jQuery( ".popup" ).hide();
    } );

    jQuery( document ).on( 'click' , '.closeBtn' , function () {
        jQuery( ".popup" ).hide();
    } );


    jQuery( document ).on( 'click' , '.popup_img' , function () {
        jQuery( ".popupGallery" ).show();
        var bg = $( this ).attr( 'src' );
        jQuery( ".popupGallery" ).css( "background" , 'url(' + bg + ')' );
    } );
    jQuery( document ).on( 'click' , '.popupGallery' , function () {
        jQuery( ".popupGallery" ).hide();
    } );

    jQuery( document ).on( 'click' , '.closeBtn' , function () {
        jQuery( ".popupGallery" ).hide();
    } );

    $( 'ul.nav li.dropdown' ).hover( function () {
        $( this ).find( '.dropdown-menu' ).stop( true , true ).delay( 200 ).fadeIn( 500 );
    } , function () {
        $( this ).find( '.dropdown-menu' ).stop( true , true ).delay( 200 ).fadeOut( 500 );
    } );
    // $(".parent_menu").hover(function () {
    //     $(".dropdown-menu").stop().slideDown('medium');
    // }, function () {
    //     $(".dropdown-menu").stop().slideUp('medium');
    // });
    //
    // $(".login").hover(function () {
    //     $(".login_sub_menu").stop().slideDown('medium');
    // }, function () {
    //     $(".login_sub_menu").stop().slideUp('medium');
    // });


    $( "#slideshow > div:gt(0)" ).hide();

    setInterval( function () {
        $( '#slideshow > div:first' )
            .fadeOut( 2000 )
            .next()
            .fadeIn( 2000 )
            .end()
            .appendTo( '#slideshow' );
    } , 5000 );
    $( ".dropdown-menu li a" ).hover( function () {
        var name = $( this ).html();
        $( this ).html( '<i class="fas fa-caret-right" style="position: relative"></i>' + name );
    } , function () {
        $( ".dropdown-menu li a i" ).remove();
    } );
} );

function dropdownLabel () {

    var cls = $( ".dropdown-toggle" );
    for (var i = 0; i < cls.length; i++) {
        var name = cls.eq( i ).html();
        // cls[i].append('label');
        cls[i].innerHTML = '<i class="fa fa-caret-down" style="font-size:16px;padding-right: 5px;"></i>' + name;
    }
}

dropdownLabel();

/* Slider (work in progress)
 * 03/09/2015 by Andrew Errico
 */
$(function() {

    // slider type
    $t = "slide"; // opitions are fade and slide

    //variables
    $f = 1000,  // fade in/out speed
        $s = 1000,  // slide transition speed (for sliding carousel)
        $d = 5000;  // duration per slide

    $n = $('.slide').length; //number of slides
    $w = $('.slide').width(); // slide width
    $c = $('.container').width(); // container width
    $ss = $n * $w; // slideshow width


    function timer() {
        $('.timer').animate({"width":$w}, $d);
        $('.timer').animate({"width":0}, 0);
    }


    // fading function
    function fadeInOut() {
        timer();
        $i = 0;
        // var setCSS = {
        //     'position' : 'relative',
        // }
        //
        // $('.slide').css(setCSS);

        //show first item
        $('.slide').eq($i).show();


        setInterval(function() {
            timer();
            $('.slide').eq($i).fadeOut($f);
            if ($i == $n - 1) {
                $i = 0;
            } else {
                $i++;
            }
            $('.slide').eq($i).fadeIn($f, function() {
                $('.timer').css({'width' : '0'});
            });

        }, $d);

    }

    function slide() {
        timer();
        // var setSlideCSS = {
        //     'float' : 'left',
        //     'display' : 'inline-block',
        //     'width' : $c
        // }
        // var setSlideShowCSS = {
        //     'width' : $ss // set width of slideshow container
        // }
        // $('.slide').css(setSlideCSS);
        // $('.slideshow').css(setSlideShowCSS);


        setInterval(function() {
            timer();
            $('.slideshow').animate({"left": -$w}, $s, function(){
                // to create infinite loop
                $('.slideshow').css('left',0).append( $('.slide:first'));
            });
        }, $d);

    }

    if ($t == "fade") {
        fadeInOut();

    } if ($t == "slide") {
        slide();

    } else {

    }
});