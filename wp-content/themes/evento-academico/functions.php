<?php

  
function my_pre_save_post( $post_id )
{
    // check if this is to be a new post
    if( $post_id != 'new' )
    {
        return $post_id;
    }
  
    // Create a new post
    $post = array(
        'post_status'  => 'draft' ,
        'post_title'  => $_POST['fields']['field_56cdb15761efa'],
        'post_type'  => 'post' ,
    ); 
  
    // insert the post
    $post_id = wp_insert_post( $post );
  
    // return the new ID
    return $post_id;
}
  
add_filter('acf/pre_save_post' , 'my_pre_save_post' );
  


