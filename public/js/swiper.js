
var swiper = Swiper;
var init = false;


function swiperMode() {
  let mobile = window.matchMedia('(min-width: 0px) and (max-width: 768px)');
  let tablet = window.matchMedia('(min-width: 769px) and (max-width: 1024px)');
  let desktop = window.matchMedia('(min-width: 1025px)');

  // Enable (for mobile)
  if (mobile.matches) {
    if (!init) {
      init = true;
      swiper = new Swiper(".facilities__slider", {
        spaceBetween: 30,
        loop: true,
        speed: 1000,
        pagination: {
          el: '.swiper-pagination',
        },
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        breakpoints: {
          320: {
            slidesPerView: 1,
          },
        },
      });
    }

  }

  // Disable (for tablet)
  else if (tablet.matches) {
    if (!init) {
      init = true;
      swiper = new Swiper(".facilities__slider", {
        spaceBetween: 30,
        loop: true,
        speed: 1000,
        pagination: {
          el: '.swiper-pagination',
        },
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        breakpoints: {
          320: {
            slidesPerView: 1,
          },
        },
      });
    }
  }

  // Disable (for desktop)
  else if (desktop.matches) {
    swiper.destroy();
    init = false;
  }
}

/* On Load*/
window.addEventListener('load', function () {
  swiperMode();
});

/* On Resize*/
window.addEventListener('resize', function () {
  swiperMode();
});

const homeRoomsSwiper = new Swiper(".homerooms__slider", {
  slidesPerView: 1,
  spaceBetween: 30,
  loop: true,
  speed: 1000,
  grabCursor: true,
  navigation: {
    nextEl: ".homerooms-forwardArrow",
    prevEl: ".homerooms-backArrow",
  },
  breakpoints: {

    480: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 3,
    },
  },
});



const menuSwiper = new Swiper('.menu__sliderMenu', {
  slidesPerView: 1,
  autoHeight: true,
  speed: 1000,
  grabCursor: true,
  navigation: {
    nextEl: ".menu__sliderMenu__forwardArrow",
    prevEl: ".menu__sliderMenu__backArrow",
  },

  breakpoints: {

    1000: {
      slidesPerView: 2,
    }
  },

});


const menuPicsSwiper = new Swiper(".menu__sliderPics", {
  slidesPerView: 1,
  loop: true,
  speed: 1000,
  pagination: {
    el: '.swiper-pagination',
  },
  grabCursor: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  breakpoints: {

    1000: {
      slidesPerView: 3,
    }
  },
});

const counterSwiper = new Swiper(".counter__slide", {
  slidesPerView: 1,
  loop: true,
  speed: 1000,
  pagination: {
    el: '.swiper-pagination',
  },
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  breakpoints: {

    768: {
      slidesPerView: 2,
    },
    1000: {
      slidesPerView: 2,
    }
  },
});

const popularRoomsSwiper = new Swiper(".popularList__slider", {
  slidesPerView: 1,
  spaceBetween: 30,
  speed: 1000,
  navigation: {
    nextEl: ".popularList__slider__forwardArrow",
    prevEl: ".popularList__slider__backArrow",
  },
  breakpoints: {
    700: {
      slidesPerView: 2,
    },
    1000: {
      slidesPerView: 3,
    }
  },
});


const relatedRoomsSwiper = new Swiper(".relatedRooms-slider", {
  spaceBetween: 30,
  speed: 1000,
  navigation: {
    nextEl: ".relatedRooms-slider__forwardArrow",
    prevEl: ".relatedRooms-slider__backArrow",
  },
  breakpoints: {
    450: {
      slidesPerView: 2,
    },
    1000: {
      slidesPerView: 3,
    }
  },
});

const roomGridSwiper = new Swiper(".roomsGrid__slider", {
  speed: 1000,
  grid: {
    rows: 4,
    fill: 'rows'
  },
  grabCursor: true,
  navigation: {
    nextEl: ".roomsGrid__slider__forwardArrow",
    prevEl: ".roomsGrid__slider__backArrow",
  },
  breakpoints: {

    1000: {
      slidesPerView: 3,
      grid: {
        rows: 4,
        fill: 'rows'
      },
    }
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    renderBullet: function (index, className) {
      return '<span class="' + className + '">' + (index + 1) + "</span>";
    },
  },
});

