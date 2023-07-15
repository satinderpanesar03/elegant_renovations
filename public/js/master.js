// ########################### navbar  ##########################

document.querySelectorAll('.dropdown-toggle').forEach(item => {
    item.addEventListener('click', event => {
  
      if (event.target.classList.contains('dropdown-toggle')) {
        document.querySelectorAll('.toggle-change').forEach(x => { if (x != event.target) x.classList.remove('toggle-change') });
        event.target.classList.toggle('toggle-change');
      }
      else if (event.target.parentElement.classList.contains('dropdown-toggle')) {
        document.querySelectorAll('.toggle-change').forEach(x => { if (x != event.target) x.classList.remove('toggle-change') });
        event.target.parentElement.classList.toggle('toggle-change');
      }
    })
  
  });
  
  document.querySelectorAll('.navbar-toggler').forEach(item => {
    item.addEventListener('click', event => {
    document.querySelectorAll('.toggle-change').forEach(x =>  x.classList.remove('toggle-change') );
  })
  
  });
  
  $(document).ready(function() {
  
    checkPosition();
    $(window).on("resize", checkPosition);
  
    function checkPosition() {
      if ($(window).innerWidth() < 991) {
        $(document).off("mouseenter", ".dropdown");
        $(document).off("mouseleave", ".dropdown");
        $(document).on("hide.bs.dropdown", ".dropdown", function(event) {
          $(event.target.parentElement).find(">.dropdown-menu:first").slideUp();
        });
        $(document).on("show.bs.dropdown", ".dropdown", function(event) {
          $(event.target.parentElement).find(">.dropdown-menu:first").slideDown();
        });
      } else {
        $(document).off("hide.bs.dropdown", ".dropdown");
        $(document).off("show.bs.dropdown", ".dropdown");
        $('.dropdown').hover(
          function() {
            $(this).find('.dropdown-menu').slideDown(300);
          },
          function() {
            $(this).find('.dropdown-menu').slideUp(300);
          }
        );
      }
    }
  
   
  
  });
  
  //################### WHAT ARE CUSTOMERS SAYS ABOUT US SECTION ############################
  
  
  const sectionsWithCarousel = document.querySelectorAll(
    ".section-with-carousel"
  );
  
  createOffsets();
  window.addEventListener("resize", createOffsets);
  
  function createOffsets() {
    const sectionWithLeftOffset = document.querySelector(
      ".section-with-left-offset"
    );
    const sectionWithLeftOffsetCarouselWrapper = sectionWithLeftOffset.querySelector(
      ".carousel-wrapper"
    );
  
    const offset = (window.innerWidth - 1100) / 2;
    const mqLarge = window.matchMedia("(min-width: 1200px)");
  
    if (sectionWithLeftOffset && mqLarge.matches) {
      sectionWithLeftOffsetCarouselWrapper.style.marginLeft = 0;
    } else {
      sectionWithLeftOffsetCarouselWrapper.style.marginLeft = 0;
    }
  
  }
  
  for (const section of sectionsWithCarousel) {
    let slidesPerView = [1.5, 2.5, 3.5];
    if (section.classList.contains("section-with-left-offset")) {
      slidesPerView = [1.5, 1.0, 2.05];
    }
    const swiper = section.querySelector(".swiper");
    new Swiper(swiper, {
      slidesPerView: slidesPerView[0],
      spaceBetween: 10,
      loop: true,
      lazyLoading: true,
      keyboard: {
        enabled: true
      },
      navigation: {
        prevEl: section.querySelector(".carousel-control-left"),
        nextEl: section.querySelector(".carousel-control-right")
      },
      pagination: {
        el: section.querySelector(".swiper-pagination"),
        clickable: true,
        renderBullet: function (index, className) {
          return `<div class=${className}>
  <span class="number">${index + 1}</span>
  <span class="line"></span>
  </div>`;
        }
      },
      autoplay:
      {
        delay: 2000,
      },
      breakpoints: {
        320: {
          slidesPerView: slidesPerView[1]
        },
  
        768: {
          slidesPerView: slidesPerView[2]
        },
        1200: {
          slidesPerView: slidesPerView[2]
        }
      }
    });
  }
  
  
  
  // ############################# GALLERY SECTION ##################################3
  
  (function () {
    var galleries = document.querySelectorAll(".gallery-cards"),
      activeIndex = 0,
      timeout;
  
    if (!document.documentElement.classList || 0 === galleries.length) return; // Bail early
  
    galleries.forEach(function (gallery) {
      var images = gallery.querySelector(".images"),
        imageSlides = images.querySelectorAll(".slide"),
        length = imageSlides ? imageSlides.length : null;
  
      setInterval(function () {
        window.requestAnimationFrame(
          animateSlides.bind(this, imageSlides, length)
        );
      }, 4000);
    });
  
    function animateSlides(imageSlides, length) {
      imageSlides.forEach(function (slide, index) {
        var order = slide.dataset.order;
        if (order == 1) {
          slide.classList.add("leave");
          slide.dataset.order = length;
          slide.addEventListener(
            "transitionend",
            handleTransitionEnd.bind(slide, length)
          );
        } else {
          slide.dataset.order = --slide.dataset.order;
        }
      });
    }
  
    function handleTransitionEnd(length, e) {
      this.classList.remove("leave");
      this.removeEventListener("transitionend", handleTransitionEnd);
    }
  })();
  
  // ############################# FLOORING INSTALLATION SECTION ##################################
  
  $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    autoplay: true,
    responsive: {
      0: {
        items: 2
      },
      300: {
        items: 2
      },
      600: {
        items: 4
      },
      1000: {
        items: 8
      }
    }
  })