gsap.registerPlugin(ScrollTrigger); 
gsap.from(".mascot-slide",{
    duration:2,
    x:30,
    opacity:0,
    scrollTrigger:{
        trigger: ".mascot-trigger",
        toggleActions:"play none none none ",
    },
  
  
  })
  gsap.from(".first-owner-pic-slide",{
    duration:2,
    x:-30,
    opacity:0,
    scrollTrigger:{
        trigger: ".owner-trigger",
        toggleActions:"play none none none ",
    },
  
  
  })
  console.log("")
  