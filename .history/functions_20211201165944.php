<?php
function Noda_enqueue_styles() {

    global $post;
    wp_enqueue_style("bootstrap","https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" );
    wp_enqueue_script("popper", "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js");
    wp_enqueue_script("bootstrap-js","https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" );
    wp_enqueue_style('Nodastyle', get_stylesheet_uri());
    wp_enqueue_script("j-query", "https://code.jquery.com/jquery-3.2.1.slim.min.js");

    wp_enqueue_script("scroll-trigger-gsap", "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/ScrollTrigger.min.js");
    wp_enqueue_script("gsap", "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js");
    wp_enqueue_script("gsap-scroll-to", "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/ScrollToPlugin.min.js");

    if($post->post_name == "index") {
      wp_enqueue_script("animation-forside", get_stylesheet_directory_uri() . "/js/forside.js");
    }
    if($post->post_name == "om-os") {
      wp_enqueue_script("om-os-animation", get_stylesheet_directory_uri() . "/js/om_os.js");
    }


    wp_enqueue_style("our-theme-font-awesome","https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css");


    wp_enqueue_style("typography", get_stylesheet_directory_uri() . "/Styles/typography.css");
    wp_enqueue_style("navbar", get_stylesheet_directory_uri() . "/Styles/Forside/nav.css");
    wp_enqueue_style("kontakt", get_stylesheet_directory_uri() . "/Styles/Kontakt/kontakt.css");
    wp_enqueue_style("404", get_stylesheet_directory_uri() . "/Styles/page404.css");
    wp_enqueue_style("generalBP", get_stylesheet_directory_uri() . "/Styles/generalBP.css");
    wp_enqueue_style("galleri", get_stylesheet_directory_uri() . "/Styles/Galleri/galleri.css");
    wp_enqueue_style("services", get_stylesheet_directory_uri() . "/Styles/Services/services.css");
    wp_enqueue_style("forside", get_stylesheet_directory_uri() . "/Styles/Forside/forside.css");
    wp_enqueue_style("footer", get_stylesheet_directory_uri() . "/Styles/footer.css");
    wp_enqueue_style("om-os", get_stylesheet_directory_uri() . "/Styles/Om-Os/om-os.css");

    if(is_404()) {
      wp_enqueue_style("404", get_stylesheet_directory_uri() . "/Styles/404.css");
    }

}
add_action('wp_enqueue_scripts', "Noda_enqueue_styles" );

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function noda_theme_support(){
    add_theme_support('custom-logo');
}
function wpb_hook_javascript_footer() {
    ?>
    <script>
       $(window).scroll(function(){
           $('nav').toggleClass('scrolled', $(this).scrollTop() > 400);
       });
       var mybutton = document.getElementById("scroll_top_btn");
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
};


function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


gsap.registerPlugin(ScrollTrigger); 


gsap.from('.each-scroll-pop', {
   autoAlpha:0, 
  y: 30,
   duration:2,
   toggleActions:"play none none none ",
  scrollTrigger:{
      trigger: ".trigger-test-2",
  }
 
  
})   













 
    </script>



    <?php
}
add_action("wp_footer","wpb_hook_javascript_footer");   


register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location'
    )
    );


  
?>