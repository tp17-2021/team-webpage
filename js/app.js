import "../css/all.scss"

var $ = require( "jquery" );
window.$ = $;

var bootstrap = require("bootstrap/dist/js/bootstrap.bundle");
window.bootstrap = bootstrap;

require("@fortawesome/fontawesome-free/css/all.min.css");

// cannot use slick-theme styles
require("slick-carousel/slick/slick.js");
require("slick-carousel/slick/slick.css");

window.AOS = require("aos");
require("aos/dist/aos.css");

require("./utilities");
