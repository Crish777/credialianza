
jQuery(document).ready(function($) {

  initslick();
  createVars();
  setListeners();
  //initAnimations();
  adjustCarouselContainerHeight();
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
    // Verifica si el menú está abierto
    if (document.querySelector(".menuMobile").classList.contains("open")) {
      return; // No ejecuta la lógica del scroll si el menú está abierto
    }
  
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
  
  $(".burgerIcon").on("click", function () {
    $(".menuMobile").toggleClass("open");
    $(".burgerImage").toggleClass("open");
  
    if ($(".siteHeader").hasClass("scrolling")) {
      $(".siteHeader").removeClass("scrolling");
      $(".burgerIcon").data("removedscrolling", true);
    } else if ($(".burgerIcon").data("removedscrolling")) {
      $(".siteHeader").addClass("scrolling");
      $(".burgerIcon").data("removedscrolling", false);
    }
  });

  $('.moreContainer').off('click').on('click', function() {
    $(this).toggleClass('active');
  });

  $(".menuCategory").on("click", function (e) {
    e.stopPropagation(); 
    const $menuItem = $(this).closest(".menuItem"); //padre
  

    $(".menuItem").not($menuItem).removeClass("active");
    $menuItem.toggleClass("active");
  });
}

function adjustCarouselContainerHeight() {
  const carouselContainerAbsolute = document.querySelector('.carouselContainerAbsolute');
  const carouselContainer = document.querySelector('.carouselContainer');

  if (carouselContainerAbsolute && carouselContainer) {
    const totalHeight = carouselContainerAbsolute.offsetHeight;
    carouselContainer.style.height = `${totalHeight}px`;
  }
}

adjustCarouselContainerHeight();

window.addEventListener('resize', adjustCarouselContainerHeight);