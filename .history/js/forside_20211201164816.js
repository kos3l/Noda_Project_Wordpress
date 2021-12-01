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