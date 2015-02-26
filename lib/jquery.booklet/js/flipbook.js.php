<script>
$(document).ready(function() {
    $(function() {
        //multiple books with a class
        $('.rocketgalleries-flipbook .container').booklet({
            pageNumbers: false,
            pageBorder: 0,
            pagePadding: 0,
            speed: 500,
            manual: true,
            hovers: false,
            width: 460,
            height: 300,
            closed: true,
            prev: ".prev",
            next: ".next",
        });
    });

    $( '.rocketgalleries-flipbook' ).on( 'swipeleft', swipeleftHandler );
    $( '.rocketgalleries-flipbook' ).on( 'swiperight', swiperightHandler );

    function swipeleftHandler() {
        $('.rocketgalleries-flipbook .container').booklet('next');
    }

    function swiperightHandler() {
        $('.rocketgalleries-flipbook .container').booklet('prev');
    }

});
</script>