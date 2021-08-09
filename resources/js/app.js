require('./bootstrap');
import { gsap } from "gsap";
import { Power1 } from "gsap";
const $ = require('jquery');

const LEFT = "left";
const CENTRE = "centre";

const menu = document.querySelector(".menu");
const sectionTitle = document.querySelector(".title");
const sections = document.querySelectorAll(".content-section-style");

let previousEntry = null;

const sectionOptions = {
    root: null,
    rootMargin: "0px",
    threshold: 0.001
};

const observer = new IntersectionObserver((entries, sectionTitleObserver) => {
    entries.forEach(entry => {
        // console.log(entry);
        if (entry.isIntersecting) {
            entry.target.classList.remove("out-view");

            if (previousEntry !== null) {
                previousEntry.target.classList.add("out-view");
            }

            $(window).on('scroll',function() {
                // After Stuff
                $(window).off('scroll');
             });

            disableScroll();

            scrollToNewElement(entry);

            setTimeout (() => {
                entry.target.classList.add("in-view");
                entry.target.style.opacity = 1;
            }, 100);

            setTimeout (() => {
                enableScroll();
            }, 1000)

            previousEntry = entry;
        } else {
            $(window).on('scroll',function() {
                // After Stuff
                $(window).off('scroll');
             });

            disableScroll();

            entry.target.classList.remove("in-view");
            entry.target.classList.add("out-view");
            entry.target.style.opacity = 0;

            setTimeout (() => {
                enableScroll();
            }, 10000)
        }
    })
}, sectionOptions);

sections.forEach(section => {
    observer.observe(section);
})
// sectionTitleObserver.observe(sectionTitle);

var isOutOfViewport = function (menu) {

	// Get element's bounding
	var bounding = menu.getBoundingClientRect();

	// Check if it's out of the viewport on each side
	var out = {};
	out.top = bounding.top < 0;
	out.left = bounding.left < 0;
	out.bottom = bounding.bottom > (window.innerHeight || document.documentElement.clientHeight);
	out.right = bounding.right > (window.innerWidth || document.documentElement.clientWidth);
	out.any = out.top || out.left || out.bottom || out.right;
	out.all = out.top && out.left && out.bottom && out.right;

	return out;

};

// Flex Animation

var group = document.querySelector(".menu");
var nodes = document.querySelectorAll("button");
var total = nodes.length;
var ease  = Power1.easeInOut;
var boxes = [];

for (var i = 0; i < total; i++) {

  var node = nodes[i];

  // Initialize transforms on node
  gsap.set(node, { x: 0 });

  boxes[i] = {
    transform: node._gsTransform,
    x: node.offsetLeft,
    y: node.offsetTop,
    node
  };
}

function scrollToNewElement(element) {
    let elementToScroll = document.querySelector(`#${element.target.id}`);
    elementToScroll.scrollIntoView({behavior: "instant", block: "center", inline: "center"});
}

// disable scroll
var keys = {37: 1, 38: 1, 39: 1, 40: 1};

function preventDefault(e) {
  e.preventDefault();
}

function preventDefaultForScrollKeys(e) {
  if (keys[e.keyCode]) {
    preventDefault(e);
    return false;
  }
}

// modern Chrome requires { passive: false } when adding event
var supportsPassive = false;
try {
  window.addEventListener("test", null, Object.defineProperty({}, 'passive', {
    get: function () { supportsPassive = true; }
  }));
} catch(e) {}

var wheelOpt = supportsPassive ? { passive: false } : false;
var wheelEvent = 'onwheel' in document.createElement('div') ? 'wheel' : 'mousewheel';

// call this to Disable
function disableScroll() {
  window.addEventListener('DOMMouseScroll', preventDefault, false); // older FF
  window.addEventListener(wheelEvent, preventDefault, wheelOpt); // modern desktop
  window.addEventListener('touchmove', preventDefault, wheelOpt); // mobile
  window.addEventListener('keydown', preventDefaultForScrollKeys, false);
}

// call this to Enable
function enableScroll() {
  window.removeEventListener('DOMMouseScroll', preventDefault, false);
  window.removeEventListener(wheelEvent, preventDefault, wheelOpt);
  window.removeEventListener('touchmove', preventDefault, wheelOpt);
  window.removeEventListener('keydown', preventDefaultForScrollKeys, false);
}



//jQuery

// $('button a').on('click', function (event) {
//     // Avoid the link click from loading a new page
//     event.preventDefault();

//     console.log($(this).attr('href'))
//     // Load the content from the link's href attribute
//     $('.content').load($(this).attr('href'));
// });

$.fn.moveIt = function(){
    var $window = $(window);
    var instances = [];

    $(this).each(function(){
      instances.push(new moveItItem($(this)));
    });

    window.addEventListener('scroll', function(){
      var scrollTop = $window.scrollTop();
      instances.forEach(function(inst){
        inst.update(scrollTop);
      });
    }, {passive: true});
  }

  var moveItItem = function(el){
    this.el = $(el);
    this.speed = parseInt(this.el.attr('data-scroll-speed'));
  };

  moveItItem.prototype.update = function(scrollTop){
    this.el.css('transform', 'translateY(' + -(scrollTop / this.speed) + 'px)');
  };

  // Initialization
  $(function(){
    $('[data-scroll-speed]').moveIt();
  });
