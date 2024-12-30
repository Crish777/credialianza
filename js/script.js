var screenWidth,
  screenHeight,
  hasMap = true,
  tpURL = "";
var mapsIcon, mapPortion;

var mapContainer, listContainer;

var totalPins = 7;
var address;
var iconWidth = 30,
  iconHeight = 30;
let mainSlider,
  mainGalleryContent,
  interactiveUlItem,
  slickArticleSide,
  siwtchContentSide,
  faqTitle,
  controllerView;

jQuery(document).ready(function ($) {
  gsap.registerPlugin(ScrollTrigger);
  initslick();
  createVars();
  riskManagmentAnimation();
  setListeners();
  //initAnimations();
  adjustCarouselContainerHeight();

  if (document.getElementById("mapContainer")) {
    hasMap = true;
    // Initialize and add the map
    // let map;

    // async function initMap() {
    //   // The location of Uluru
    //   const position = { lat: -25.344, lng: 131.031 };
    //   // Request needed libraries.
    //   //@ts-ignore
    //   const { Map } = await google.maps.importLibrary("maps");
    //   const { AdvancedMarkerElement } = await google.maps.importLibrary(
    //     "marker"
    //   );

    //   // The map, centered at Uluru
    //   map = new Map(document.getElementById("mapContainer"), {
    //     zoom: 4,
    //     center: position,
    //     mapId: "DEMO_MAP_ID",
    //   });

    //   // The marker, positioned at Uluru
    //   const marker = new AdvancedMarkerElement({
    //     map: map,
    //     position: position,
    //     title: "Uluru",
    //   });
    // }

    // initMap();
    render_map(document.getElementById("mapContainer"), 16);
  }
});

const riskManagmentAnimation = () => {
  const options = {
    root: null, // Use the viewport as the root
    rootMargin: "-55% 0px -35% 0px", // No margin around the root
  };

  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry, i) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible");
        interactiveUlItem.forEach((item) => {
          item.classList.remove("active");
        });
        interactiveUlItem[entry.target.dataset.index].classList.add("active");
      } else {
        entry.target.classList.remove("visible");
      }
    });
  }, options);
  siwtchContentSide.forEach((el) => {
    observer.observe(el);
  });
  // let tl = gsap.timeline({
  //   // yes, we can add it to an entire timeline!
  //   scrollTrigger: {
  //     trigger: ".slickArticleSide",
  //     pin: true,
  //     start: "0 +=150",
  //     end: `100% bottom `, // end after scrolling 500px beyond the start
  //     scrub: 1, // smooth scrubbing, takes 1 second to "catch up" to the scrollbar
  //     markers: true,
  //     duration: 3
  //   },
  // });

  // siwtchContentSide.forEach((el, index) => {
  //   tl.to(interactiveUlItem[index], {
  //     fontWeight: "bold",
  //   }).to(
  //     el,
  //     {
  //       transform: `translate(0, calc(${-100 * (index + 1)}% + ${
  //         30 * -(index + 1)
  //       }px))`,
  //       duration: 3000
  //     },
  //     "<"
  //   );
  // if (index < siwtchContentSide.length - 1) {
  //   tl.to(el, {
  //     opacity: 0,
  //   });
  // }
  // });
};

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

  $(".slickContiner").slick({
    centerMode: true,
    centerPadding: "60px",
    slidesToShow: 3,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          centerPadding: "40px",
        },
      },
      {
        breakpoint: 678,
        settings: {
          slidesToShow: 1,
          centerPadding: "40px",
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
  interactiveUlItem = document.querySelectorAll(".interactiveUlItem");
  siwtchContentSide = document.querySelectorAll(".siwtchContentSide");
  faqTitle = document.querySelectorAll(".faqTitle");
  controllerView = document.querySelectorAll(".controllerView");

  if (hasMap) {
    mapContainer = $("#mapContainer");
    listContainer = $("#listContainer");
    address = $(".address");
    mapPortion = $(".mapPortion");
  }
}

function setListeners() {
  if (controllerView.length > 0) {
    controllerView.forEach((item) => {
      item.addEventListener("click", () => {
        item.classList.add("active");
        if (item.classList.contains("listView")) {
          controllerView[1].classList.remove("active");
          $(".innerPanelMap").removeClass("showMap");
          return;
        }

        controllerView[0].classList.remove("active");
        $(".innerPanelMap").addClass("showMap");
      });
    });
  }

  if (faqTitle.length > 0) {
    faqTitle.forEach((item) => {
      item.addEventListener("click", () => {
        let parentNode = item.parentNode;
        parentNode.classList.toggle("active");
        let nextElement = item.nextElementSibling;
        if (!parentNode.classList.contains("active")) {
          nextElement.style.maxHeight = null;
        } else {
          nextElement.style.maxHeight =
            item.nextElementSibling.scrollHeight + 32 + "px";
        }
      });
    });
  }

  // if (interactiveUlItem.length > 0) {
  //   interactiveUlItem.forEach((item) => {
  //     item.addEventListener("click", () => {
  //       if (item.classList.contains("active")) {
  //         return;
  //       }
  //       let itemSelected = item.parentNode.querySelector(
  //         ".interactiveUlItem.active"
  //       );
  //       if (itemSelected) {
  //         itemSelected.classList.remove("active");
  //       }
  //       item.classList.add("active");
  //     });
  //   });
  // }
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

  $(".moreContainer")
    .off("click")
    .on("click", function () {
      $(this).toggleClass("active");
    });

  $(".menuCategory").on("click", function (e) {
    e.stopPropagation();
    const $menuItem = $(this).closest(".menuItem"); //padre

    $(".menuItem").not($menuItem).removeClass("active");
    $menuItem.toggleClass("active");
  });

  $(".cityName").on("click", function (e) {
    e.stopPropagation();
    const $mapItem = $(this).closest(".mapItem"); //padre

    $(".mapItem").not($mapItem).removeClass("active");
    $mapItem.toggleClass("active");
  });
}

function adjustCarouselContainerHeight() {
  const carouselContainerAbsolute = document.querySelector(
    ".carouselContainerAbsolute"
  );
  const carouselContainer = document.querySelector(".carouselContainer");

  if (carouselContainerAbsolute && carouselContainer) {
    const totalHeight = carouselContainerAbsolute.offsetHeight;
    carouselContainer.style.height = `${totalHeight}px`;
  }
}

adjustCarouselContainerHeight();

window.addEventListener("resize", adjustCarouselContainerHeight);

// Cambio input PDF
document.querySelectorAll(".formInput").forEach((formInput) => {
  const fileInput = formInput.querySelector(".formInputFile");
  const fileInfo = formInput.querySelector(".fileInfo");
  const fileNameDisplay = formInput.querySelector(".fileName");
  const removeFileBtn = formInput.querySelector(".removeFile");
  const iconContainer = formInput.querySelector(".formInputIconContainer");

  fileInput.addEventListener("change", (event) => {
    const file = event.target.files[0];
    if (file) {
      fileNameDisplay.textContent = file.name;
      fileInfo.style.display = "flex";
      iconContainer.style.display = "none";
    }
  });
  removeFileBtn.addEventListener("click", () => {
    fileInput.value = "";
    fileInfo.style.display = "none";
    iconContainer.style.display = "flex";
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

function setMapVisible(_display) {
  // list, map
  mapPortion.removeClass("active");
  $("#" + _display + "Container").addClass("active");
  $(".mapMenu").removeClass("active");
  $("#" + _display + "Btn").addClass("active");

  if (_display == "list") {
    closeAllInfoWindows();
    address.removeClass("active");
  }
}

var map;
var infoWindows = [];

function render_map($el, $zoom) {
  $zoom = typeof $zoom !== "undefined" ? $zoom : 14;
  var $markers = $el.querySelectorAll(".marker");

  var args = {
    zoom: $zoom,
    center: new google.maps.LatLng(0, 0),
    mapTypeId: MY_MAPTYPE_ID,
    mapTypeControl: true,
    mapTypeControlOptions: {
      style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
      position: google.maps.ControlPosition.BOTTOM_CENTER,
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID],
    },
    panControl: false,
    zoomControl: true,
    zoomControlOptions: {
      style: google.maps.ZoomControlStyle.LARGE,
      position: google.maps.ControlPosition.LEFT_CENTER,
    },
    scaleControl: true,
    streetViewControl: false,
  };

  map = new google.maps.Map($el, args);

  var styledMapOptions = {
    name: "Credialianza",
  };
  var customMapType = new google.maps.StyledMapType(
    style_credialianza,
    styledMapOptions
  );

  map.mapTypes.set(MY_MAPTYPE_ID, customMapType);

  map.markers = [];
  $markers.forEach((element) => add_marker($(element), map));

  center_map($zoom);
  centerCity(0);

  setTimeout(function () {
    setMapVisible("list");
  }, 400);
}

function add_marker($marker) {
  console.log($marker.attr("data-lat"));
  console.log($marker.attr("data-lng"));
  var latlng = new google.maps.LatLng(
    $marker.attr("data-lat"),
    $marker.attr("data-lng")
  );
  var _id = $marker.attr("data-id");

  var pinNum = Math.floor(Math.random() * totalPins) + 1;
  var iconMap = `${themeDirectory}images/mappointerIcon.svg`;

  var image = {
    url: iconMap,
    size: new google.maps.Size(iconWidth, iconHeight),
    origin: new google.maps.Point(0, 0),
    anchor: new google.maps.Point(iconWidth * 0.5, iconHeight * 0.5),
    scaledSize: new google.maps.Size(iconWidth, iconHeight),
  };

  var marker = new google.maps.Marker({
    position: latlng,
    map: map,
    icon: image,
  });
  //icon		: tpURL
  map.markers.push(marker);
  marker.set("id", _id);

  if ($marker.html()) {
    var infowindow = new google.maps.InfoWindow({
      content: $marker.html(),
    });
    infoWindows.push(infowindow);

    google.maps.event.addListener(marker, "click", function () {
      closeAllInfoWindows();
      var _id = marker.get("id");
      launchStore(_id);
      //scrollToTop();
    });
    google.maps.event.addListener(infowindow, "closeclick", function () {
      closeAllInfoWindows();
      address.removeClass("active");
    });
  }
}

function launchStore(_id) {
  controllerView[0].classList.remove("active");
  controllerView[1].classList.add("active");
  $(".innerPanelMap").addClass("showMap");
  setMapVisible("map");

  closeAllInfoWindows();
  var infowindow = infoWindows[_id];
  var marker = map.markers[_id];
  var latlng = new google.maps.LatLng(
    marker.position.lat(),
    marker.position.lng()
  );

  infowindow.open(map, marker);

  var $zoom = 16;
  map.panTo(latlng);
  map.setZoom($zoom);

  address.removeClass("active");
  $("#address-" + _id).addClass("active");
}

function closeAllInfoWindows() {
  infoWindows.forEach(function (infoWindow) {
    infoWindow.close();
  });
}

function center_map($zoom) {
  $zoom = typeof $zoom !== "undefined" ? $zoom : 14;
  var bounds = new google.maps.LatLngBounds();

  $.each(map.markers, function (i, marker) {
    var latlng = new google.maps.LatLng(
      marker.position.lat(),
      marker.position.lng()
    );
    bounds.extend(latlng);
  });

  if (map.markers.length == 1) {
    map.setCenter(bounds.getCenter());
    map.setZoom($zoom);
  } else {
    map.fitBounds(bounds);
  }
}

function centerCity(_id) {
  setMapVisible("map");

  closeAllInfoWindows();
  address.removeClass("active");

  var _container = $("#city-" + _id);
  var _listItems = _container.find(".listMapBlock");

  var $zoom = 16;
  var bounds = new google.maps.LatLngBounds();
  var count = 0;

  var addresss = _container.find(".address");

  addresss.each(function (index, element) {
    var _id = $(this).attr("data-id");
    var marker = map.markers[_id];
    var latlng = new google.maps.LatLng(
      marker.position.lat(),
      marker.position.lng()
    );

    count++;
    bounds.extend(latlng);
  });

  if (count == 0) {
  } else if (count == 1) {
    map.setCenter(bounds.getCenter());
    map.setZoom($zoom);
  } else {
    map.setCenter(bounds.getCenter());
    map.fitBounds(bounds);
  }
}

var MY_MAPTYPE_ID = "custom_style";

var style_credialianza = [
  {
    featureType: "all",
    elementType: "labels.text.fill",
    stylers: [
      {
        saturation: 36,
      },
      {
        color: "#333333",
      },
      {
        lightness: 40,
      },
    ],
  },
  {
    featureType: "all",
    elementType: "labels.text.stroke",
    stylers: [
      {
        visibility: "on",
      },
      {
        color: "#ffffff",
      },
      {
        lightness: 16,
      },
    ],
  },
  {
    featureType: "all",
    elementType: "labels.icon",
    stylers: [
      {
        visibility: "off",
      },
    ],
  },
  {
    featureType: "administrative",
    elementType: "geometry.fill",
    stylers: [
      {
        color: "#fefefe",
      },
      {
        lightness: 20,
      },
    ],
  },
  {
    featureType: "administrative",
    elementType: "geometry.stroke",
    stylers: [
      {
        color: "#fefefe",
      },
      {
        lightness: 17,
      },
      {
        weight: 1.2,
      },
    ],
  },
  {
    featureType: "landscape",
    elementType: "geometry",
    stylers: [
      {
        color: "#f5f5f5",
      },
      {
        lightness: 20,
      },
    ],
  },
  {
    featureType: "poi",
    elementType: "geometry",
    stylers: [
      {
        color: "#f5f5f5",
      },
      {
        lightness: 21,
      },
    ],
  },
  {
    featureType: "poi.park",
    elementType: "geometry",
    stylers: [
      {
        color: "#dedede",
      },
      {
        lightness: 21,
      },
    ],
  },
  {
    featureType: "road.highway",
    elementType: "geometry.fill",
    stylers: [
      {
        color: "#ffffff",
      },
      {
        lightness: 17,
      },
    ],
  },
  {
    featureType: "road.highway",
    elementType: "geometry.stroke",
    stylers: [
      {
        color: "#ffffff",
      },
      {
        lightness: 29,
      },
      {
        weight: 0.2,
      },
    ],
  },
  {
    featureType: "road.arterial",
    elementType: "geometry",
    stylers: [
      {
        color: "#ffffff",
      },
      {
        lightness: 18,
      },
    ],
  },
  {
    featureType: "road.local",
    elementType: "geometry",
    stylers: [
      {
        color: "#ffffff",
      },
      {
        lightness: 16,
      },
    ],
  },
  {
    featureType: "transit",
    elementType: "geometry",
    stylers: [
      {
        color: "#f2f2f2",
      },
      {
        lightness: 19,
      },
    ],
  },
  {
    featureType: "water",
    elementType: "geometry",
    stylers: [
      {
        color: "#2283b2",
      },
      {
        lightness: 17,
      },
    ],
  },
];

/*

window.onorientationchange = resize;

$(window).resize(function() {
	resize();
});

function resize(){
	//screenWidth = $(window).width() + getScrollBarWidth();
	screenWidth = $(window).width();
	screenHeight = $(window).height();
  
  if(hasMap){
    if(screenWidth>768){
      mapContainer.height(screenHeight - 80);
      listContainer.height(screenHeight - 80);
    }else{
      mapContainer.height(screenWidth);
      listContainer.height(screenWidth);
    }
  }
}

*/
