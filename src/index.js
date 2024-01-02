import  $ from 'jquery';
import "../css/style.scss"

// Our modules / classes
import MobileMenu from "./modules/MobileMenu"
import HeroSlider from "./modules/HeroSlider"
import GoogleMap from "./modules/GoogleMap"
import Search from "./modules/Search"



// Instantiate a new object using our modules/classes
const mobileMenu = new MobileMenu()
const heroSlider = new HeroSlider()
const googleMap = new GoogleMap()

const search = new Search();


// const openBtn = $('.js-search-trigger');
// const closeBtn = $('.search-overlay__close');
// const overlay = $('.search-overlay')

// openBtn.on({
//     click: function(e) {
//         //console.log('openBtn clicked');
//         overlay.addClass('search-overlay--active');
//     }
// })
// closeBtn.on({
//     click: function(e) {
//         //console.log('closeBtn clicked');
//         overlay.removeClass('search-overlay--active');
//     }
// })






