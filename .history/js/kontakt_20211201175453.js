
gsap.registerPlugin(ScrollTrigger); 

gsap.from('.each-scroll-pop-kontakt', {
    autoAlpha:0, 
   y: 30,
    duration:2,
    toggleActions:"play none none none ",
   scrollTrigger:{
       trigger: ".trigger-kontakt",
   }
  
   
 })   
 
 console.log("")