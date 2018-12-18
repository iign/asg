//console.log('%cBuilt by %cm • n t a g', 'font-size: 12px', 'font-family: Poppins, sans-serif; font-size: 16px; font-weight: bold; color: #FF4455; padding: 2px 6px; border-radius: 2px')
//console.log('🔗 https://montag.uy')
window.$ = window.jQuery = require('jquery')
import 'slick-carousel'

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

function toggleMenu () {
  $('.header__menu').toggleClass('active')
  $('body').toggleClass('menu-open')
}


$('.js-toggle-menu').on('click', function () {
  toggleMenu()
})

$(function() {

  var scroll = new SmoothScroll('a[href*="#"]', {
    offset: 90
  });

  setTimeout(revealLogo, 500)

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

  $('.testimonials').slick({
    slidesToShow: 1,
    infinite: true,
    mobileFirst: true,
    arrows: false,
    rows: 0,
    responsive: [
      {
        breakpoint: 760,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 1050,
        settings: {
          arrows: true,
          slidesToShow: 3
        }
      }
    ]
  })

  $('.js-proposal').on('click', function () {
    let right = $(document).width() - $('.header .js-proposal').offset().left - $('.header .js-proposal').outerWidth()
    $('.js-contact').css('right', right)
    $('.js-contact').toggleClass('active')
    toggleMenu()
  })

  // Load twitter stream
  $.getJSON( "http://archsourcing.com/streams/twitter.php", function( data ) {
    
    var items = []
    $('.js-twitter-stream').empty()
    $.each( data, function( key, val ) {

      var avatar = val.user.profile_image_url
      var text = val.text
      $('.js-twitter-stream').append( "<li class='stream-item'> \
      <div class='stream-item__img-col'>  \
        <div class='stream-item__img' style='background-image: url(" + avatar + ")'></div> \
      </div> \
      <div class='stream-item__data'> \
      " + text + " \
      </div> \
    </li>" )
    })
    
  })

  $(".custom-file-input").change(function () {
    $('.custom-file-input').addClass('active')
  })

}) // end ready


$('.js-contact-form').submit(function( e ) {
  var form = $(this)
  $('.js-contact-form :submit').attr("disabled", "disabled").val('Sending...')
  var url = form.attr('action');

  $.ajax({
    type: "POST",
    url: url,
    data: form.serialize(),
    success: function (data) {
      if(data){
        form.hide()
        $('.contact__output').text('Thanks for contacting us.')
      }
      else {
        $('.js-contact-form :submit').attr("disabled", false)
        $('.contact__output').text('There was an error sending your request. Please try again.')
      }
    }
  })
  e.preventDefault()
})


function revealLogo() {
  let $list = $('.logo path')
  $list.sort(function() { return 0.5 - Math.random() })

  for (let index = 0; index < $list.length; index++) {

    (function(index) {
      setTimeout(function () {

        $($list[index]).addClass('active')
      }, Math.floor(Math.random() * 1000))
    })(index)
    
  }
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
  })()


}

const places = [
  {
    "type": "Feature",
    "properties": {},
    "geometry": {
      "coordinates": [-118.394567, 34.006174, ],
      "type": "Point"
    },
    "id": "1"
  },
  {
    "type": "Feature",
    "properties": {},
    "geometry": {
      "coordinates": [-118.328659, 34.092808],
      "type": "Point"
    },
    "id": "2"
  },
  {
    "type": "Feature",
    "properties": {},
    "geometry": {
      "coordinates": [-118.2592514, 34.10041676],
      "type": "Point"
    },
    "id": "3"
  },
  {
    "type": "Feature",
    "properties": {},
    "geometry": {
      "coordinates": [-118.592030, 34.190300],
      "type": "Point"
    },
    "id": "4"
  },
  {
    "type": "Feature",
    "properties": {},
    "geometry": {
      "coordinates": [-118.243683, 34.052235],
      "type": "Point"
    },
    "id": "5"
  },
  {
    "type": "Feature",
    "properties": {},
    "geometry": {
      "coordinates": [-118.243688, 34.252240],
      "type": "Point"
    },
    "id": "6"
  },
  {
    "type": "Feature",
    "properties": {},
    "geometry": {
      "coordinates": [-118.243693, 34.052245],
      "type": "Point"
    },
    "id": "7"
  },
  {
    "type": "Feature",
    "properties": {},
    "geometry": {
      "coordinates": [-118.243698, 34.052250],
      "type": "Point"
    },
    "id": "8"
  },
  {
    "type": "Feature",
    "properties": {},
    "geometry": {
      "coordinates": [-118.243703, 34.052255],
      "type": "Point"
    },
    "id": "9"
  },
  {
    "type": "Feature",
    "properties": {},
    "geometry": {
      "coordinates": [-118.406390, 34.024020],
      "type": "Point"
    },
    "id": "10"
  },
  {
    "type": "Feature",
    "properties": {},
    "geometry": {
      "coordinates": [-122.210480, 39.341740],
      "type": "Point"
    },
    "id": "11"
  },
  {
    "type": "Feature",
    "properties": {},
    "geometry": {
      "coordinates": [-118.499380, 34.158850],
      "type": "Point"
    },
    "id": "12"
  },
  {
    "type": "Feature",
    "properties": {},
    "geometry": {
      "coordinates": [-117.051600, 32.555350],
      "type": "Point"
    },
    "id": "13"
  },
  {
    "type": "Feature",
    "properties": {},
    "geometry": {
      "coordinates": [-119.664975, 35.671513],
      "type": "Point"
    },
    "id": "14"
  },
  {
    "type": "Feature",
    "properties": {},
    "geometry": {
      "coordinates": [-118.391820, 33.909700],
      "type": "Point"
    },
    "id": "15"
  },
  {
    "type": "Feature",
    "properties": {},
    "geometry": {
      "coordinates": [-80.366470, 25.784560],
      "type": "Point"
    },
    "id": "16"
  },
  {
    "type": "Feature",
    "properties": {},
    "geometry": {
      "coordinates": [-122.504740, 37.735860],
      "type": "Point"
    },
    "id": "17"
  },
  {
    "type": "Feature",
    "properties": {},
    "geometry": {
      "coordinates": [-121.6138915, 38.0283406],
      "type": "Point"
    },
    "id": "18"
  },
  {
    "type": "Feature",
    "properties": {},
    "geometry": {
      "coordinates": [-122.253940, 38.184840],
      "type": "Point"
    },
    "id": "19"
  },
  {
    "type": "Feature",
    "properties": {},
    "geometry": {
      "coordinates": [-121.877000, 37.658430],
      "type": "Point"
    },
    "id": "20"
  },
  {
    "type": "Feature",
    "properties": {},
    "geometry": {
      "coordinates": [-121.927000, 37.710080],
      "type": "Point"
    },
    "id": "21"
  },
  {
    "type": "Feature",
    "properties": {},
    "geometry": {
      "coordinates": [-122.031075, 37.977978],
      "type": "Point"
    },
    "id": "22"
  },
  {
    "type": "Feature",
    "properties": {},
    "geometry": {
      "coordinates": [-80.782127, 8.537981],
      "type": "Point"
    },
    "id": "23"
  },
  {
    "type": "Feature",
    "properties": {},
    "geometry": {
      "coordinates": [-76.995890, 38.851830],
      "type": "Point"
    },
    "id": "24"
  },
  {
    "type": "Feature",
    "properties": {},
    "geometry": {
      "coordinates": [-56.169320, -34.915511],
      "type": "Point"
    },
    "id": "25"
  },
  {
    "type": "Feature",
    "properties": {},
    "geometry": {
      "coordinates": [-80.263010, 26.116970],
      "type": "Point"
    },
    "id": "26"
  },
  {
    "type": "Feature",
    "properties": {},
    "geometry": {
      "coordinates": [55.270782, 25.204849],
      "type": "Point"
    },
    "id": "27"
  },
  {
    "type": "Feature",
    "properties": {},
    "geometry": {
      "coordinates": [-106.282050, 40.731470],
      "type": "Point"
    },
    "id": "28"
  },
  {
    "type": "Feature",
    "properties": {},
    "geometry": {
      "coordinates": [12.371360, 51.339691],
      "type": "Point"
    },
    "id": "29"
  },
  {
    "type": "Feature",
    "properties": {},
    "geometry": {
      "coordinates": [-71.619423, -33.045559],
      "type": "Point"
    },
    "id": "30"
  },
  {
    "type": "Feature",
    "properties": {},
    "geometry": {
      "coordinates": [51.539790, 25.288750],
      "type": "Point"
    },
    "id": "31"
  },
  {
    "type": "Feature",
    "properties": {},
    "geometry": {
      "coordinates": [-56.164532, -34.901112],
      "type": "Point"
    },
    "id": "32"
  },
  

]

mapboxgl.accessToken = 'pk.eyJ1IjoiaWlnbiIsImEiOiJJVnFnVEtVIn0.wJaGnsHUuEUoSCXvbNO9uQ';
const map = new mapboxgl.Map({
  container: 'map',
  style: 'mapbox://styles/mapbox/dark-v9',
  center: [-37.809,5.217],
  minZoom: 0.9,
  zoom: 0.9,
  'icon-allow-overlap': false,
  'text-allow-overlap': false,
  'icon-ignore-placement': true
})

map.on('load', function () {

  map.loadImage('/assets/images/pin@2x.png', function (error, image) {
    if (error) throw error;
    
    map.addImage('pin', image)

    map.addLayer({
      "id": "places",
      "type": "symbol",
      "source": {
        "type": "geojson",
        "data": {
          "type": "FeatureCollection",
          "features": places
        }
      },
      "layout": {
        "icon-image": "pin",
        "icon-size": 0.5,
        "icon-padding": 0,
        "icon-anchor": "bottom"
      }
    });

    map.on('mouseenter', 'places', function (e) {

      let $listItem = $(`.favorites__list-item[data-id=${e.features[0].id}]`)
      $listItem.addClass('active')
      console.log($listItem)

      console.log('cursor mouseover', e.features[0].id)

      map.getCanvas().style.cursor = 'pointer'

      let coordinates = e.features[0].geometry.coordinates.slice()
      let description = e.features[0].properties.name

      console.log(e.features[0])


    });

    map.on('mouseleave', 'places', function () {
      map.getCanvas().style.cursor = ''
      $('.favorites__list-item').removeClass('active')
    });
  });
});


// init controller
var controller = new ScrollMagic.Controller()

var scene = new ScrollMagic.Scene({
  triggerElement: '#band-boxes'
})
.addTo(controller)
.on('enter', function (e) {
  countUp('box-num-1', 45, 1000)
    setTimeout(function() {
      countUp('box-num-2', 25, 1000)
    }, 500)
    setTimeout(function() {
      countUp('box-num-3', 65, 1000)
    }, 900)
})

var scene = new ScrollMagic.Scene({
  triggerElement: '#band-features'
})
.addTo(controller)
.on('enter', function (e) {
  $('.features .strike').each(function( index, el ) {
    var t = 600 * index
    setTimeout(function () {
      $(el).addClass('active')

    }, t)
  });
})

var scene = new ScrollMagic.Scene({
  triggerElement: '#band-steps'
})
.addTo(controller)
.on('enter', function (e) {
  $('.step').addClass('active')
})
