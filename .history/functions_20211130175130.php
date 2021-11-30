<?php



function Noda_enqueue_styles() {

    wp_enqueue_style("bootstrap","https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" );
    wp_enqueue_script("popper", "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js");
    wp_enqueue_script("bootstrap-js","https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" );
    wp_enqueue_style('Nodastyle', get_stylesheet_uri());
    wp_enqueue_script("j-query", "https://code.jquery.com/jquery-3.2.1.slim.min.js");

    wp_enqueue_script("scroll-trigger-gsap", "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/ScrollTrigger.min.js");
    wp_enqueue_script("gsap", "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js");
    wp_enqueue_script("gsap-scroll-to", "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/ScrollToPlugin.min.js");


    wp_enqueue_style("our-theme-font-awesome","https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css");
    wp_enqueue_style("KaroStyle", get_stylesheet_directory_uri() . "/styleKaro.css");

    wp_enqueue_style("typography", get_stylesheet_directory_uri() . "/Styles/typography.css");
    wp_enqueue_style("navbar", get_stylesheet_directory_uri() . "/Styles/Forside/nav.css");
    wp_enqueue_style("kontakt", get_stylesheet_directory_uri() . "/Styles/Kontakt/kontakt.css");
    wp_enqueue_style("404", get_stylesheet_directory_uri() . "/Styles/404.css");
    wp_enqueue_style("generalBP", get_stylesheet_directory_uri() . "/Styles/generalBP.css");
    wp_enqueue_style("galleri", get_stylesheet_directory_uri() . "/Styles/Galleri/galleri.css");
    wp_enqueue_style("services", get_stylesheet_directory_uri() . "/Styles/Services/services.css");
    wp_enqueue_style("forside", get_stylesheet_directory_uri() . "/Styles/Forside/forside.css");
    wp_enqueue_style("footer", get_stylesheet_directory_uri() . "/Styles/footer.css");
    wp_enqueue_style("om-os", get_stylesheet_directory_uri() . "/Styles/Om-Os/om-os.css");

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

/* gsap.set('.scroll', {
  opacity: 0
}) */
 gsap.registerPlugin(ScrollTrigger); 

/* gsap.to('.test', {
  autoAlpha:0,
  x: 100,
  
   duration:3,
  ease:Elastic.easeIn,
  scrollTrigger:{
      trigger: ".trigger-test-2",
      start:"top 60%",
      end:"top 40%",
      toggleActions:"restart none none none ",
      markers:{
        startColor: "purple",
        endColor:"fuchsia",
        fontSize:"3rem",
      },
  },
 
  
})  */ 

TweenLite.to(".test", 0.5,{
  autoAlpha:0,
  scrollTrigger:{
      trigger: ".trigger-test-2",
      start:"top 60%",
      end:"top 40%",
      toggleActions:"restart none none none ",
      markers:{
        startColor: "purple",
        endColor:"fuchsia",
        fontSize:"3rem",
      },

});

/*  let tween = gsap.to(".scroll", {x:500}),
    st = ScrollTrigger.create({
        trigger: ".trigger",
        start: "bottom center",
        end: "+=500",
        animation: tween
      });  */


   /*    const tl = gsap.timeline( { 
   
   scrollTrigger: {
     trigger: ".scroll",
     start: "+=133 80%",
     end: "+=200 40%",
     scrub: true,
     markers: true,
     toggleActions: "play reverse play reverse",
   }
   
 });
 
 tl
   .to('.scroll', { opacity: 1, duration: 0.5 })
   .to('.scroll', { opacity: 0, duration: 0.5 }, 0.5)
 ; */



var t = TweenLite.from(".scroll", 1,{
  autoAlpha:0, x:100,
  paused:true, ease:Linear.easeNone
}),
    scrollThreshold = {"start":201, "stop":500};

$(window).on("scroll",function(e){
  
  var currentScroll = $(window).scrollTop(),
      currentProgress = ( currentScroll - scrollThreshold.start ) / ( scrollThreshold.stop - scrollThreshold.start );
  
  if(currentScroll > scrollThreshold.start && currentScroll < scrollThreshold.stop){
    t.progress(currentProgress);
  }else if( currentScroll < scrollThreshold.start ){
    t.progress(0);
  }else if( currentScroll < scrollThreshold.stop ){
    t.progress(1);
  }
  
});






 
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