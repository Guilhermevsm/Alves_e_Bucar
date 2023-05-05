function focar_contato(){
  fale_conosco.scrollIntoView({behavior:"smooth"});
};

var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  spaceBetween: 10,
  
  centerSlide: true,
  fade: 'true',
  loop: true,                         //loop
  
  
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 17,
      centeredSlides: true,
      loop: false,   
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 27,
      loop: false,   
    },
    1024: {
      slidesPerView: 4,
      spaceBetween: 0,
      loop: false,   
    },
  },
});
