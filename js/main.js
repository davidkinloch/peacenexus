(function($){

    $('.sidenav').sidenav();

     $('.lang-switch select').formSelect();

    $(".dropdown-trigger").dropdown();

     $('.tabs').tabs();

     $('.scrollspy').scrollSpy();

     $('.item-search .label-icon').click(function() {
        $( ".item-search .input-field" ).addClass('active');
      });

     $('.item-search .search-close').click(function() {
       $( ".item-search .input-field" ).removeClass('active');
      });

    $('.teamgrid .readmore').click(function(e) {
        e.preventDefault();
       $( this ).parents('.card').toggleClass( "active" );
      });

     var rellax = new Rellax('.rellax');

     var rellaxContained = new Rellax('.rellax-contained');

    $('.lang-switch select').change(function(){
        var url = $(this).val();
        window.location = url;
    });

    var $select1 = $('.lang-switch select');
    //  $select1.material_select();
      $select1.on('change', function (e) {
          var url = $(this).val();
          window.location = url;
      });


 if ('serviceWorker' in navigator) {
    navigator.serviceWorker
   .register('/wp-content/themes/peacenexus/service-worker.js')
   .then(function() { console.log('Service Worker Registered'); });
  }


})(jQuery); // end of jQuery name space
