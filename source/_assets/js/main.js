console.log('Main!')
window.$ = window.jQuery = require('jquery')

$('.js-toggle-menu').on('click', function () {
  $('.header__menu').toggleClass('active')
  $('body').toggleClass('menu-open')
})