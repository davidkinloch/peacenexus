<?php
  $categories = get_categories( array(
  'orderby' => 'name',
  'parent' => 3
) );

foreach( $categories as $category ) {
  $category_link = sprintf( 
      '<a class="btn btn-secondary waves-effect waves-light" href="%1$s" alt="%2$s">%3$s</a>',
      esc_url( get_category_link( $category->term_id ) ),
      esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
      esc_html( $category->name )
  );
   
    echo sprintf( esc_html__( '%s', 'textdomain' ), $category_link );
   
} ?>
<?php
  $categories = get_categories( array(
    'orderby' => 'name',
    'parent' => 9
  ) );
 
  foreach( $categories as $category ) {
    $category_link = sprintf( 
        '<a class="btn waves-effect waves-light" href="%1$s" alt="%2$s">%3$s</a>',
        esc_url( get_category_link( $category->term_id ) ),
        esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
        esc_html( $category->name )
    );
     
      echo sprintf( esc_html__( '%s', 'textdomain' ), $category_link );
     
} ?>