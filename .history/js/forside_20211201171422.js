
function wpb_hook_javascript_footer() {
    ?>
    <script>


gsap.registerPlugin(ScrollTrigger); 

gsap.from(".google-map-home",{
    duration:2,
    x:30,
    opacity:0,
    scrollTrigger:{
        trigger: ".contact-text ",
        toggleActions:"play none none none ",
    },
  
  
  })

  gsap.from(".picture-scroll",{
    duration:2,
    x:30,
    opacity:0,
    scrollTrigger:{
        trigger: ".trigger-picture ",
        toggleActions:"play none none none ",
    },
  
  
  })
 

 </script>



<?php
}
add_action("wp_footer","wpb_hook_javascript_footer");   



