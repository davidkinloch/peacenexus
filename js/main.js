(function($){
  $(function(){

    var sort = 'latest';
    var id = getURLParameter('id');
    if (id != '') {
      setTimeout(function(){
        document.getElementById('category-' + id).click();
      }, 100);
    }

    $('.category-filter').on('click', function() {
      $(this).toggleClass('btn-filter-selected');
      getPosts();
      })

    $('#sort-latest').on('click', function() {
      sort = 'latest';
      $('#sort-title').text('Latest Highlights');
      getPosts();
      })
    
    $('#sort-az').on('click', function() {
      sort = 'az';
      $('#sort-title').text('Highlights A-Z');
      getPosts();
      })

    function getPosts() {
      var ids = [];
      $('.btn-filter-selected').each(function () {
          ids.push($(this).attr('data-id'));
      });
      $("#post-container").empty();
      if (ids.length > 0) {
        $.ajax({
          method: "POST",
          url: "/wp-json/api/posts",
          data: { 
            ids: ids,
            sort: sort
          }
        })
        .done(function(res) {
          //console.log(res);
          $("#post-template").tmpl(res).appendTo("#post-container");
        });
      }
    }

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
     
  }); // end of document ready

/*
 if ('serviceWorker' in navigator) {
    navigator.serviceWorker
   .register('./service-worker.js')
   .then(function() { console.log('Service Worker Registered'); });
  }
*/

})(jQuery); // end of jQuery name space
