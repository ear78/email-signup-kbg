<?php

function my_scripts() {
// Page ID, title, slug, or array of such.
// e.g. is_page('My page title') - page title
// e.g. is_page(2) - page id
// e.g. is_page('my-page-title') - page slug
// e.g. is_page( array( 'page1', 'page1')) - in this example an array of page slugs.
// Check out the references for more on this function.
    if( is_page( array( 'subscribe', 'home' ) ) {
        wp_enqueue_script( 'script-name', 'path/to/example.js', array(), '1.0.0', true )
    }
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );


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

