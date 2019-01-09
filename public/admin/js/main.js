/*!
* screenfull
* v3.0.0 - 2015-11-24
* (c) Sindre Sorhus; MIT License
*/
(function(){var e="undefined"!==typeof module&&module.exports,f="undefined"!==typeof Element&&"ALLOW_KEYBOARD_INPUT"in Element,a=function(){var c,a=["requestFullscreen exitFullscreen fullscreenElement fullscreenEnabled fullscreenchange fullscreenerror".split(" "),"webkitRequestFullscreen webkitExitFullscreen webkitFullscreenElement webkitFullscreenEnabled webkitfullscreenchange webkitfullscreenerror".split(" "),"webkitRequestFullScreen webkitCancelFullScreen webkitCurrentFullScreenElement webkitCancelFullScreen webkitfullscreenchange webkitfullscreenerror".split(" "),"mozRequestFullScreen mozCancelFullScreen mozFullScreenElement mozFullScreenEnabled mozfullscreenchange mozfullscreenerror".split(" "),"msRequestFullscreen msExitFullscreen msFullscreenElement msFullscreenEnabled MSFullscreenChange MSFullscreenError".split(" ")],d=0;var b=a.length;for(var e={};d<b;d++)if((c=a[d])&&c[1]in document){d=0;for(b=c.length;d<b;d++)e[a[0][d]]=c[d];return e}return!1}(),b={request:function(c){var b=a.requestFullscreen;c=c||document.documentElement;if(/5\.1[\.\d]* Safari/.test(navigator.userAgent))c[b]();else c[b](f&&Element.ALLOW_KEYBOARD_INPUT)},exit:function(){document[a.exitFullscreen]()},toggle:function(a){this.isFullscreen?this.exit():this.request(a)},raw:a};a?(Object.defineProperties(b,{isFullscreen:{get:function(){return!!document[a.fullscreenElement]}},element:{enumerable:!0,get:function(){return document[a.fullscreenElement]}},enabled:{enumerable:!0,get:function(){return!!document[a.fullscreenEnabled]}}}),e?module.exports=b:window.screenfull=b):e?module.exports=!1:window.screenfull=!1})();



$(function() {
    // alert messages fade out time
    $('.box').delay(5000).fadeIn('normal', function () {
        $(this).delay(2500).fadeOut();
    });
  
  // Bootstrap tabs hash url
  var url = document.location.toString();
  
  if (url.match('#')) {
      $('.nav-tabs a[href="#' + url.split('#')[1] + '"]').tab('show');
  } 

  // Change hash for page-reload
  $('.nav-tabs a').on('shown.bs.tab', function (e) {
      window.location.hash = e.target.hash;
  })
  
  // Textarea auto grow

  autosize($('.js-autogrow'));

  
  
  $('.categories-table').tableDnD({
    onDrop: function(table, row) {
        alert($('.categories-table').tableDnDSerialize());
    },
    dragHandle: ".handle"
});
  
  
  $('.chat-form-control').on('focus',function(e){
    $('.chat-footer').addClass('bg-white');
  })
  
  $('.header-menu-toggle').on('click',function(e) {
    $('.aside').toggle();
  })


    $('#full_screen_toggle').on('click',function(e) {
        screenfull.toggle();
    })
  
});



(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();




