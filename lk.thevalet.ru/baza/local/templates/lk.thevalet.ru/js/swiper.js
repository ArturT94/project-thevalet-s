new Swiper(".garage", {
  slidesPerView: 2,
  autoHeight: true,
  spaceBetween: 10,
  navigation: {
    nextEl: ".sw-Btn-auto-Next",
    prevEl: ".sw-Btn-auto-Prev",
  },
  breakpoints: {
    320: {
      slidesPerView: "auto",
    },
    767: {
      slidesPerView: 2,
    },
  },
});
new Swiper(".vltServise", {
  slidesPerView: "auto",

  spaceBetween: 10,
  navigation: {
    nextEl: ".sw-Btn-service-Next",
    prevEl: ".sw-Btn-service-Prev",
  },
});
new Swiper(".vltServise2", {
  slidesPerView: "auto",
  
  spaceBetween: 10,
  navigation: {
    nextEl: ".sw-Btn-service2-Next",
    prevEl: ".sw-Btn-service2-Prev",
  },
});
