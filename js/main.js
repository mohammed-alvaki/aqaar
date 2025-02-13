// ----- header -----------------------------------------
// ----- opening sub-categories (offcanvas) -----
const subCatBtns = document.querySelectorAll(".sub-cat-btn");
const subLists = document.querySelectorAll(".sub-list");

subCatBtns.forEach((btn, index) => {
    const icon = btn.querySelector("i");
    const subList = subLists[index];

    btn.addEventListener("click", function (event) {
        event.preventDefault();

        subList.classList.toggle("d-none");

        if (subList.classList.contains("d-none")) {
            icon.classList.remove("fa-xmark");
            icon.classList.add("fa-plus");
        } else {
            icon.classList.remove("fa-plus");
            icon.classList.add("fa-xmark");
        }
    });
});

// ----- index page ------------------------------------
// ----- added properties section ------
var swiper1 = new Swiper(".newSwiper1", {
    loop: true,
    slidesPerView: 1.4,
    spaceBetween: 5,
    autoplay: {
        delay: 3500,
        disableOnInteraction: true,
    },
    grabCursor: true,
    centeredSlides: true,
    navigation: {
        nextEl: ".pw-new-next1",
        prevEl: ".pw-new-prev1",
    },
    breakpoints: {
        500: {
            slidesPerView: 1.6,
            spaceBetween: 10,
            centeredSlides: true,
        },
        600: {
            slidesPerView: 1.8,
            spaceBetween: 20,
            centeredSlides: true,
        },
        700: {
            slidesPerView: 2.6,
            spaceBetween: 20,
            centeredSlides: true,
        },
        992: {
            slidesPerView: 3.4,
            spaceBetween: 20,
            centeredSlides: true,
        },
        1200: {
            slidesPerView: 3.8,
            spaceBetween: 20,
            centeredSlides: true,

        },
        1400: {
            slidesPerView: 4,
            spaceBetween: 30,
            centeredSlides: false,
        },
    }
});

// ----- videos section ----- 
var swiper2 = new Swiper(".newSwiper2", {
    loop: true,
    slidesPerView: 1.2,
    spaceBetween: 10,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    grabCursor: true,
    centeredSlides: true,
    breakpoints: {
        400: {
            slidesPerView: 1.4,
            spaceBetween: 15,
        },
        600: {
            slidesPerView: 2.2,
            spaceBetween: 15,
        },
        900: {
            slidesPerView: 2.6,
            spaceBetween: 15,
        },
        1000: {
            slidesPerView: 3,
            spaceBetween: 15,
        },
        1200: {
            slidesPerView: 3.4,
            spaceBetween: 20,
        },
        1400: {
            slidesPerView: 4.2,
            spaceBetween: 25,
        },
    }
});

// ----- newest news section ----- 
var swiper3 = new Swiper(".newSwiper3", {
    loop: true,
    slidesPerView: 1.4,
    spaceBetween: 20,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    grabCursor: true,
    centeredSlides: true,
    navigation: {
        nextEl: ".pw-new-next2",
        prevEl: ".pw-new-prev2",
    },
    breakpoints: {
        500: {
            slidesPerView: 1.6,
            spaceBetween: 25,
            centeredSlides: true,
        },
        600: {
            slidesPerView: 1.8,
            spaceBetween: 20,
            centeredSlides: true,
        },
        700: {
            slidesPerView: 2.6,
            spaceBetween: 20,
            centeredSlides: true,
        },
        992: {
            slidesPerView: 3,
            spaceBetween: 20,
            centeredSlides: true,
        },
        1200: {
            slidesPerView: 3.4,
            spaceBetween: 20,
            centeredSlides: true,
        },
        1400: {
            slidesPerView: 4,
            spaceBetween: 25,
            centeredSlides: false,
        },
    }
});


// ----- modal layer (contact modal) -----
document.addEventListener('DOMContentLoaded', function () {
    const modal = document.querySelector('.cont-modal');
    const layer = document.querySelector('.modal-layer');
    const closeButton = document.querySelector('.close');

    setTimeout(function () {
        modal.classList.add('show');
        layer.classList.add('show');
    }, 5000);

    closeButton.addEventListener('click', function () {
        modal.classList.remove('show');
        layer.classList.remove('show');
    });

    layer.addEventListener('click', function () {
        modal.classList.remove('show');
        layer.classList.remove('show');
    });
});


// ----- back to top (footer page) ----------------------------
const btnBack = document.querySelector(".btn-backToTop");

window.addEventListener("scroll", function () {
    if (window.scrollY > 250) {
        btnBack.classList.replace("d-none", "d-flex");
    } else {
        btnBack.classList.replace("d-flex", "d-none");
    }
});

btnBack.addEventListener("click", function () {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});

// ----- more page ------------------------------
var swiper = new Swiper(".newSwiper", {
    loop: true,
    slidesPerView: 4,
    spaceBetween: 5,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".pw-new-next",
        prevEl: ".pw-new-prev",
    },
    grabCursor: true,
    centeredSlides: false,
});

document.querySelectorAll('.newSwiper .swiper-image').forEach(image => {
    image.addEventListener('click', function () {
        let src = this.getAttribute('src');
        let activeCarouselItem = document.querySelector('.carousel-inner .active img');
        activeCarouselItem.setAttribute('src', src);
    });
});

// swiper 2
var swiper4 = new Swiper(".newSwiper4", {
    loop: true,
    slidesPerView: 1.4,
    spaceBetween: 5,
    autoplay: {
        delay: 3500,
        disableOnInteraction: true,
    },
    grabCursor: true,
    centeredSlides: true,
    navigation: {
        nextEl: ".pw-new-next3",
        prevEl: ".pw-new-prev3",
    },
    breakpoints: {
        500: {
            slidesPerView: 1.6,
            spaceBetween: 10,
        },
        600: {
            slidesPerView: 1.8,
            spaceBetween: 20,
        },
        700: {
            slidesPerView: 2.6,
            spaceBetween: 20,
        },
        992: {
            slidesPerView: 3.4,
            spaceBetween: 20,
        },
        1200: {
            slidesPerView: 3.8,
            spaceBetween: 20,
        },
        1400: {
            slidesPerView: 4,
            spaceBetween: 25,
        },
    }
});

// single page ------------------------
// ----- newest news section ----- 
var swiper5 = new Swiper(".newSwiper5", {
    loop: true,
    slidesPerView: 1.4,
    spaceBetween: 10,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    grabCursor: true,
    centeredSlides: true,
    navigation: {
        nextEl: ".pw-new-next5",
        prevEl: ".pw-new-prev5",
    },
    breakpoints: {
        500: {
            slidesPerView: 1.6,
            spaceBetween: 15,
        },
        600: {
            slidesPerView: 1.8,
            spaceBetween: 20,
        },
        700: {
            slidesPerView: 2.6,
            spaceBetween: 20,
        },
        992: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
        1200: {
            slidesPerView: 3.4,
            spaceBetween: 20,
        },
        1400: {
            slidesPerView: 4,
            spaceBetween: 25,
        },
    }
});

// property page ---------------------


// ----- more page ------------------------------
var swiper6 = new Swiper(".newSwiper6", {
    loop: true,
    slidesPerView: 4,
    spaceBetween: 5,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".pw-new-next6",
        prevEl: ".pw-new-prev6",
    },
    grabCursor: true,
    centeredSlides: false,
});

document.querySelectorAll('.newSwiper6 .swiper-image').forEach(image => {
    image.addEventListener('click', function () {
        let src = this.getAttribute('src');
        let activeCarouselItem = document.querySelector('.carousel-inner .active img');
        activeCarouselItem.setAttribute('src', src);
    });
});
