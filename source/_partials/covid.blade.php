<div id="covid" class="covid">
  <div class="container">
    We're in this together. We're here to help!
    As COVID-19 continues to impact the world, ARCHSOURCING is committed to giving our clients,
    teams and our communities the support and resources they need during this challenging time.
    We are fully operational and continue to give you the best project delivery experience.
    Now more than ever is very important to work in collaboration! Reach out!
  </div>
  <button id="covid__close">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#333" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
      <line x1="18" y1="6" x2="6" y2="18"></line>
      <line x1="6" y1="6" x2="18" y2="18"></line>
    </svg>
  </button>
</div>
<script>
  function load() {
    var el = document.getElementById("covid__close");
    el.addEventListener("click", function() {
      var elem = document.querySelector('#covid');
      elem.parentNode.removeChild(elem);
    }, false);
  }

  document.addEventListener("DOMContentLoaded", load, false);
</script>