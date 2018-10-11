console.log('Main!')
window.$ = window.jQuery = require('jquery')

$('.js-toggle-menu').on('click', function () {
  $('.header__menu').toggleClass('active')
  $('body').toggleClass('menu-open')
})

$(function() {

  setTimeout(revealLogo, 500)


})


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