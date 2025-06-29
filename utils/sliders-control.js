const swiper = new Swiper('.slider-main', {
    // Optional parameters
    loop: true,
    autoplay: {
        delay: 3000,
    },
    pagination: {
      el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    
  });

  const swiperClients = new Swiper('.slider-clients', {
    // Optional parameters
    spaceBetween: 20,
    slidesPerView: 2,
    breakpoints: {
      1024: {
        slidesPerView: 3,
      },
      1366: {
        slidesPerView: 4,
      },
    },
    loop: true,
    grabCursor: true,
    pagination: {
      el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next-clients',
      prevEl: '.swiper-button-prev-clients',
    },
    
  });


  const swiperPlans= new Swiper('.slider-plans', {
    // Optional parameters
    pagination: {
      el: '.swiper-pagination',
    },
    allowTouchMove: false,

    // Navigation arrows
    navigation: {
      nextEl: '.duo-btn-next',
      prevEl: '.internet-btn-prev',
    },
    
  });

  const swiperPlansInternet = new Swiper('.slider-plans-internet', {
    // Optional parameters
    spaceBetween: 40,
    slidesPerView: 1,
    breakpoints: {
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
      1366: {
        slidesPerView: 4,
      },
    },
    /* autoplay: {
        delay: 3000,
    }, */
    pagination: {
      el: '.swiper-pagination',
    },    
  });

  const swiperPlansDuo = new Swiper('.slider-plans-duo', {
    // Optional parameters
    spaceBetween: 40,
    slidesPerView: 1,
    breakpoints: {
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
      1366: {
        slidesPerView: 4,
      },
    },
    /* autoplay: {
        delay: 3000,
    }, */
    pagination: {
      el: '.swiper-pagination',
    },    
  });

  const swiperReviews = new Swiper('.slider-reviews', {
    // Optional parameters
    spaceBetween: 20,
    slidesPerView: 1,
    breakpoints: {
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    },
    autoplay:{
      delay: 3000,
    },
    grabCursor: true,
    pagination: {
      el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next-reviews',
      prevEl: '.swiper-button-prev-reviews',
    },
    
  });

  const swiperSocialNetworks = new Swiper('.slider-social-networks', {
    // Optional parameters
    spaceBetween: 20,
    slidesPerView: 1,
    breakpoints: {
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
      1366: {
        slidesPerView: 5,
      },
    },
    autoplay:{
      delay: 4000,
    },
    grabCursor: true,
    scrollbar: {
      el: '.swiper-scrollbar',
    },
    
  });
  