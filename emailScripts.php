<?php



/*
 *  Script Email Subscribe Autofill
 */
function enqueue_email_subscribe() {
    //check if page is subscribe page
    if( is_page( 'subscribe')){ ?>
        <script>
            var urlParams = new URLSearchParams(window.location.search);// get query params set in url
            var urlValue = urlParams.toString().substring(6).replace('%40', '@');// strip string and save email value
            setTimeout(function(){
                var emailInput = document.getElementById('mce-EMAIL').value = urlValue;
            },500);// allow mail chimp to load first

        </script>
        <?php
    }
}
add_action('wp_enqueue_scripts', 'enqueue_email_subscribe' );

