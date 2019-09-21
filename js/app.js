const $mobileMenu = document.getElementById('mobile-nav-open');
const $mobileMenuClose = document.getElementById('ib-main-nav-menu-close');
const $searchIcon = document.getElementById('ib-top-nav-search');
const $closeSearchIcon = document.getElementById('ib-main-nav-search-close');

const $nav = document.getElementById('ib-main-nav-container');

function fillNavigationBar() {
    if (location.pathname !== "/ib-photo/") {
        $nav.classList.add('ib-fill-nav');
    } else {
        if (window.scrollY >= 100) {
            $nav.classList.add('ib-fill-nav');
        } else {
            $nav.classList.remove('ib-fill-nav');
        }
    }
}

fillNavigationBar();


var $valm = document.getElementById('ib-main-nav');
$mobileMenu.addEventListener('click', function () {
    $valm.classList.toggle('ib-show-hide-menu');
});

$mobileMenuClose.addEventListener('click', function () {
    $valm.classList.toggle('ib-show-hide-menu');
});

var $searchContainer = document.getElementById('ib-main-nav-search');
$searchIcon.addEventListener('click', function() {

    $searchContainer.classList.toggle('ib-show-hide-search');

});

$closeSearchIcon.addEventListener('click', function() {
    
    $searchContainer.classList.add('ib-show-hide-search');

});

window.onscroll = function() {
    if (window.scrollY >= 100) {
        fillNavigationBar();
    } else {
        fillNavigationBar();
    }
}

jQuery(document).ready(function() {

    jQuery('.ib-hero-slick-slider').slick({
        autoplay: true,
        autoplaySpeed: 5000,
        dots: true,
        infinite: true,
        speed: 1500,
        fade: true,
        arrows: true,
        cssEase: 'linear'
      });

});

// Slick Slider: Featured logos
jQuery('.ib-featured-logo').slick({
    centerMode: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    autoplay: false,
    autoplaySpeed: 3000,
  });