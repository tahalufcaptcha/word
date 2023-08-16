<?php

function yammak_register_cpt()
{
  
/**Our Values Custom Post Type */
$labels = [
    "name" => "Our Values",
      "singular_name" => "Values",
      "menu_name" => "Our Values",
];
$args = [
   "label" => "Values",
  "labels" => $labels,
  "description" => "",
  "public" => true,
  "publicly_queryable" => true,
  "show_ui" => true,
  "show_in_rest" => true,
  "rest_base" => "",
  "rest_controller_class" => "WP_REST_Posts_Controller",
  "has_archive" => true,
  "show_in_menu" => true,
  "show_in_nav_menus" => true,
  "delete_with_user" => false,
  "exclude_from_search" => false,
  "capability_type" => "post",
  "hierarchical" => false,
  "rewrite" => ["slug" => "Values", "with_front" => true],
  "query_var" => true,
  "menu_icon" => "dashicons-admin-links",
  "supports" => ["title", "thumbnail", "comments"]
];
register_post_type("Values", $args);

/**Our Services Custom Post Type */
$labels = [
  "name" => "Our Services",
    "singular_name" => "services",
    "menu_name" => "Our Services",
];
$args = [
 "label" => "services",
"labels" => $labels,
"description" => "",
"public" => true,
"publicly_queryable" => true,
"show_ui" => true,
"show_in_rest" => true,
"rest_base" => "",
"rest_controller_class" => "WP_REST_Posts_Controller",
"has_archive" => true,
"show_in_menu" => true,
"show_in_nav_menus" => true,
"delete_with_user" => false,
"exclude_from_search" => false,
"capability_type" => "post",
"hierarchical" => false,
"rewrite" => ["slug" => "services", "with_front" => true],
"query_var" => true,
"menu_icon" => "dashicons-admin-links",
"supports" => ["title", "thumbnail", "comments"]
];
register_post_type("services", $args);
}
add_action('init', 'yammak_register_cpt');


?>
