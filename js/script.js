
jQuery(document).ready(function($) {

  initslick();
  createVars();
  setListeners();
  //initAnimations();
});




function initslick() {
  /*
  $('.slickContiner').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024, 
        settings: {
          slidesToShow: 2, 
        },
      },
      {
        breakpoint: 678, 
        settings: {
          slidesToShow: 1, 
        },
      },
    ],
  });
  */

  $('.slickContiner').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 3,
    responsive: [
      {
        breakpoint: 1024, 
        settings: {
          slidesToShow: 2, 
          centerPadding: '40px',
        },
      },
      {
        breakpoint: 678, 
        settings: {
          slidesToShow: 1, 
          centerPadding: '40px',
        },
      },
    ],
  });


}

const initAnimations = async () => {

  initAos();
};


function createVars() {
  moreContainer = $(".moreContainer");
  siteHeader = document.querySelector(".siteHeader");
}

function setListeners() {

  window.addEventListener("resize", () => {});

  window.addEventListener("scroll", () => {
    if (window.scrollY > 100) {
      if (!siteHeader.classList.contains("scrolling")) {
        siteHeader.classList.add("scrolling");
      }
      return;
    }

    if (siteHeader.classList.contains("scrolling")) {
      siteHeader.classList.remove("scrolling");
    }
  });

  $('.moreContainer').off('click').on('click', function() {
    $(this).toggleClass('active');
  });

  $(".menuItem").on("click", function () {
    $(this).toggleClass("active");
  });

  $(".burgerIcon").on("click", function () {
    $(".menuMobile").toggleClass("open");
  });
}