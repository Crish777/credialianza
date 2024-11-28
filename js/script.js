
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
  // Scrolling 
  window.addEventListener("resize", () => {});

  window.addEventListener("scroll", () => {
    if (document.querySelector(".menuMobile").classList.contains("open")) {
      return;
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
  
  $(".burgerIcon").on("click", function (e) {
    e.preventDefault(); 
  
    const $checkbox = $("#toggle");
    const $menuMobile = $(".menuMobile");
    const $siteHeader = $(".siteHeader");
  
    const isChecked = !$checkbox.prop("checked");
    $checkbox.prop("checked", isChecked);
  
    if (isChecked) {
      $menuMobile.addClass("open");
    } else {
      $menuMobile.removeClass("open");
    }
  
    if (isChecked) {
      if ($siteHeader.hasClass("scrolling")) {
        $siteHeader.removeClass("scrolling");
        $(".burgerIcon").data("removedscrolling", true); 
      }
    } else {
      if ($(".burgerIcon").data("removedscrolling")) {
        $siteHeader.addClass("scrolling");
        $(".burgerIcon").data("removedscrolling", false);
      }
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

// Cambio input PDF
document.querySelectorAll('.formInput').forEach((formInput) => {
  const fileInput = formInput.querySelector('.formInputFile');
  const fileInfo = formInput.querySelector('.fileInfo');
  const fileNameDisplay = formInput.querySelector('.fileName');
  const removeFileBtn = formInput.querySelector('.removeFile');
  const iconContainer = formInput.querySelector('.formInputIconContainer');


  fileInput.addEventListener('change', (event) => {
    const file = event.target.files[0];
    if (file) {
      fileNameDisplay.textContent = file.name;
      fileInfo.style.display = 'flex';
      iconContainer.style.display = 'none';
    }
  });
  removeFileBtn.addEventListener('click', () => {
    fileInput.value = ''; 
    fileInfo.style.display = 'none';
    iconContainer.style.display = 'flex';
  });
});

/*
function adjustJobCardSizes() {
    const jobCards = document.querySelectorAll('.jobCardBox');

    let maxHeight = 0;

    jobCards.forEach(card => {
        const maskText = card.querySelector('.jobCardMaskText');
        if (maskText) {
            const height = maskText.offsetHeight;
            if (height > maxHeight) {
                maxHeight = height;
            }
        }
    });

    jobCards.forEach(card => {
        card.style.height = `${maxHeight}px`;
    });
}

window.addEventListener('load', adjustJobCardSizes);
*/