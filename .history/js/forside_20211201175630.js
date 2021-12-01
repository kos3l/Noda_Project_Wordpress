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

  gsap.from('.each-scroll-pop', {
    autoAlpha:0, 
   y: 30,
    duration:2,
    toggleActions:"play none none none ",
   scrollTrigger:{
       trigger: ".trigger-test-2",
   }
  
   
 })   
 
 console.log("forside")




 



