(function($){

    $('.sidenav').sidenav();

     $('select').formSelect();

    $(".dropdown-trigger").dropdown();

     $('.tabs').tabs();

     $('.scrollspy').scrollSpy();

     $('.item-search .label-icon').click(function() {
        $( ".item-search .input-field" ).addClass('active');
      });

     $('.item-search .search-close').click(function() {
       $( ".item-search .input-field" ).removeClass('active');
      });

     var rellax = new Rellax('.rellax');

/*
 if ('serviceWorker' in navigator) {
    navigator.serviceWorker
   .register('./service-worker.js')
   .then(function() { console.log('Service Worker Registered'); });
  }
*/

})(jQuery); // end of jQuery name space
