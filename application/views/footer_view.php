
</div><!-- #wrapper -->

<script>


    $(document).ready(function(){

        // calculate height
        var screen_ht = $(window).height();
        var preloader_ht = 5;
        var padding =(screen_ht/2)-preloader_ht;

        $("#preloader").css("padding-top",padding+"px");

    });



    $(document).ready(function(){

// loading animation using script

        /* 	function anim() {
                $("#preloader_image").animate({left:'-1400px'}, 5000,
                function(){ $("#preloader_image"),animate({left:'0px'}, 5000 );
                    if (rotate==1){
                        anim();
                    }
                }
                );
            }

            anim(); */

    });



    rotate = 1;

/*    function hide_preloader() {
        // To stop the preloader
        rotate = 0;
        // To apply Fade Out Effect to the Preloader
        $("#preloader"). css('display','none') .queue(function() {

            start_page();
        })
    }*/

</script>

<footer id="footer" class="container-fluid">
123
</footer><!-- #footer -->

</body>
</html>