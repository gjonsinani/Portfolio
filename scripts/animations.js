gsap.to(".layer-1", { y: "-100vh", delay: 0.5 });
gsap.to(".layer-2", { y: "-100vh", delay: 0.7 });
gsap.to(".layer-3", { y: "-100vh", delay: 0.9 });
gsap.to(".overlay", { y: "-100vh", delay: 1 });

gsap.fromTo(
  ".banner__animation",
  { scale: 0.1, opacity: 0 },
  { scale: 01, opacity: 1, ease: "back.out(1.7)", delay: 1.8 }
);

AOS.init();
