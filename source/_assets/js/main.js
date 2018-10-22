//console.log('%cBuilt by %cm • n t a g', 'font-size: 12px', 'font-family: Poppins, sans-serif; font-size: 16px; font-weight: bold; color: #FF4455; padding: 2px 6px; border-radius: 2px')
//console.log('🔗 https://montag.uy')
window.$ = window.jQuery = require('jquery')

console.log('%c💡 Crafted with ♥️ by https://ign.uy', 'font-size: 14px; padding: 8px 0; font-family: Poppins, sans-serif;')

window.requestAnimFrame = (function () {
  return  window.requestAnimationFrame ||
          window.webkitRequestAnimationFrame ||
          window.mozRequestAnimationFrame ||
          window.oRequestAnimationFrame ||
          window.msRequestAnimationFrame ||
          function (callback) {
            window.setTimeout(callback, stepTime)
          }
})()


$('.js-toggle-menu').on('click', function () {
  $('.header__menu').toggleClass('active')
  $('body').toggleClass('menu-open')
})

$(function() {

  setTimeout(revealLogo, 500)

  // Test via a getter in the options object to see if the passive property is accessed
  var supportsPassive = false;
  try {
    var opts = Object.defineProperty({}, 'passive', {
      get: function() {
        supportsPassive = true;
      }
    });
    window.addEventListener("testPassive", null, opts);
    window.removeEventListener("testPassive", null, opts);
  } catch (e) {}

  document.addEventListener('scroll', function(e){ detectBand(e) }, supportsPassive ? { passive: true } : false)

})

function detectBand (e) {
  var scrollBottom = $(window).scrollTop() + $(window).height()
  if(scrollBottom >= $('.band-boxes').position().top){

    countUp('box-num-1', 45, 1000)
    setTimeout(function() {
      countUp('box-num-2', 25, 1000)
    }, 500)
    setTimeout(function() {
      countUp('box-num-3', 65, 1000)
    }, 900)
  }
}


function revealLogo() {
  $list = $('.logo path')
  $list.sort(function() { return 0.5 - Math.random() })

  var random = Math.floor(Math.random()*13)

  for (let index = 0; index < $list.length; index++) {

    (function(index) {
      setTimeout(function () {

        $($list[index]).addClass('active')
      }, Math.floor(Math.random() * 1000))
    })(index)
    
  }
}

function animateValue(id, start, end, duration) {
  var range = end - start;
  var current = start;
  var increment = end > start? 1 : -1;
  var stepTime = Math.abs(Math.floor(duration / range));
  var obj = document.getElementById(id);
  var timer = setInterval(function() {
      current += increment;
      obj.innerHTML = current;
      if (current == end) {
          clearInterval(timer);
      }
  }, stepTime);
}


function countUp(id, end, duration) {

  let start = 0
  let range = end - start
  let current = start
  let increment = end > start? 1 : -1;
  let stepTime = Math.abs(Math.floor(duration / range))
  let obj = document.getElementById(id)

  function animate() {
    if (obj.innerHTML == '…') {
      obj.innerHTML = 0
    }
    if (obj.innerHTML < end) {
      obj.innerHTML++;
    } else {
      return;
    }
  }

  (function draw() {
    requestAnimFrame(draw)
    animate()
  })();


}

mapboxgl.accessToken = 'pk.eyJ1IjoiaWlnbiIsImEiOiJJVnFnVEtVIn0.wJaGnsHUuEUoSCXvbNO9uQ';
const map = new mapboxgl.Map({
  container: 'map',
  style: 'mapbox://styles/iign/cjnkd8riue1jf2rmmtx8sk94b',
  center: [-78.413,13.346],
  zoom: 1.4,
  'icon-allow-overlap': true
});
