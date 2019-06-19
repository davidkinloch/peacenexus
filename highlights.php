<?php get_header(
/*
Template Name: Highlights
*/
); 
$regions = get_categories(array('orderby' => 'name', 'parent' => 3 ));
$services = get_categories(array('orderby' => 'name', 'parent' => 9 ));
?>
<?php if (have_posts()) : ?>
<div class="section banner banner-text" id="highlights-banner" >
  <div class="container">
    <div class="row">
      <div class="col s12 m10">
        <h1><?php echo get_the_title(83);?></h1>
        <h2><?php echo get_field('leading_paragraph',83);?></h2>
      </div>
    </div>
  </div>
</div>
<div class="megawrap">
<div class="container">
  <div class="section filter">
    <div class="row filter-btns">
      <div class="col s12 m10">
    <?php foreach($regions as $region) {  ?>
        <a data-id="<?=$region->cat_ID?>" id="category-<?=$region->slug?>" class="region-filter category-filter btn btn-secondary btn-transparent waves-effect waves-light" href="#"><?=$region->cat_name?> <i class="material-icons right">clear</i></a>
    <?php } ?>
        <a id="region-all" class="btn btn-secondary btn-transparent waves-effect waves-light" href="#">Show All Regions</a>
      </div>
    </div>
    <div class="row filter-btns">
      <div class="col s12 m10 l9">
    <?php foreach($services as $service) { ?>
        <a data-id="<?=$service->cat_ID?>" id="category-<?=$service->slug?>" class="service-filter category-filter btn btn-primary btn-transparent waves-effect waves-light" href="#"><?=$service->cat_name?> <i class="material-icons right">clear</i></a>
    <?php } ?>
        <a id="service-all" class="btn btn-primary btn-transparent waves-effect waves-light" href="#">Show All Services</a>
      </div>
       <div class="col s12 l3">
        <a class='dropdown-trigger btn btn-large btn-filter' href='#' data-target='dropdown-highlight'><i class="material-icons right">keyboard_arrow_down</i> <span id="sort-title">Latest Highlights</span></a>
        <!-- Dropdown Structure -->
        <ul id='dropdown-highlight' class='dropdown-content'>
          <li><a id="sort-latest" href="#!">Latest Highlights</a></li>
          <li><a id="sort-az" href="#!">Highlights A-Z</a></li>
        </ul>
      </div>
    </div>

  <div class="col s12 m6 l4 offset-m3 offset-l4 center" id="no-posts-containter">
    No content can be found - try to adjust filters to find relevant highlights.
    </div>    
    
    <div class="row decked" id="post-container"></div>
    
  </div>
</div>
<?php endif; ?>
<?php get_footer(); ?>
  <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jquery.templates/beta1/jquery.tmpl.js"></script>
  
  <script id="post-template" type="text/x-jQuery-tmpl">
        <div class="col s12 m6 l4">
          <div class="card">
            <div class="card-image">
              <a class="card-link waves-effect waves-block waves-light" href="${permalink}">
                <img src="${thumbnail}" class="responsive-img"  alt="${title}">
                <div class="card-content">
                  <h3 class="small">${title}</h3>
                  
                  <span class="card-more">READ MORE</span>
                </div>
              </a>
            </div>
            <div class="card-action">
          <a class="btn btn-secondary waves-effect waves-light" href="https://pnwp.dkinloch.com/highlights?id=${region_slug}" alt="View all posts in ${region_name}">${region_name}</a>
          <a class="btn waves-effect waves-light" href="https://pnwp.dkinloch.com/highlights?id=${service_slug}" alt="View all posts in ${service_name}">${service_name}</a>        
            </div>
          </div>
        </div>    
    </script> 
    
  <script>
  function getURLParameter(sParam) {
    var result = '';
    var sPageURL = window.location.search.substring(1);
    var sURLVariables = sPageURL.split('&');
    for (var i = 0; i < sURLVariables.length; i++) {
      var sParameterName = sURLVariables[i].split('=');
      if (sParameterName[0] == sParam) {
        result = sParameterName[1];
        break;
      }
    }
    return result;
  }
    
    
  $(function(){

    var sort = 'latest';
    var id = getURLParameter('id');
    if (id != '') {
      setTimeout(function(){
        document.getElementById('category-' + id).click();
      }, 100);
    } else {
    $('.category-filter').toggleClass('btn-filter-selected'); 
        getPosts();
  }

    $('.category-filter').on('click', function() {
      $(this).toggleClass('btn-filter-selected');
      getPosts();
    })

	$('#region-all').on('click', function() {
      $('.region-filter').addClass('btn-filter-selected');
      getPosts();
    })

	$('#service-all').on('click', function() {
      $('.service-filter').addClass('btn-filter-selected');
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
        if (ids.length == 0) {
      $("#no-posts-containter").show();
    } else {
      $("#no-posts-containter").hide();
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
        if (res.length == 0) {
          $("#no-posts-containter").show();
        } else {
          $("#post-template").tmpl(res).appendTo("#post-container");
        } 
       });
    }
    }

  }); // end of document ready
    
    
  </script>