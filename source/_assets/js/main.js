//console.log('%cBuilt by %cm • n t a g', 'font-size: 12px', 'font-family: Poppins, sans-serif; font-size: 16px; font-weight: bold; color: #FF4455; padding: 2px 6px; border-radius: 2px')
//console.log('🔗 https://montag.uy')
window.$ = window.jQuery = require('jquery')

console.log('%c💡 Crafted with ♥️ by https://ign.uy', 'font-size: 14px; padding: 8px 0; font-family: Poppins, sans-serif;')

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