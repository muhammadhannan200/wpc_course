<?php 

remove_theme_support('widgets-block-editor');
//example save_post()>event when the user save post
//hooks are two kind one action  second filter
$base = get_template_directory_uri().'/';
if(!function_exists('wpc_load_assets')){
function wpc_load_assets()
{
    

    global $base;
    wp_enqueue_style('bootstrap', $base . 'assets/css/bootstrap.css', [], false);
    wp_enqueue_style('fontsawesome', $base . 'assets/css/font-awesome.min.css', ['bootstrap'], false);
    wp_enqueue_style('template-style', $base . 'assets/style.css', [], false);
    wp_enqueue_style('template-responsive', $base . 'assets/css/responsive.css', [], false);
    wp_enqueue_style('template-colors', $base . 'assets/css/colors.css', [], false);

    
    
    wp_enqueue_style('wpc_theme_style',$base.'style.css',[],rand(1,1000));
    // wp_enqueue_script('jq-script', $base . 'assets/js/jquery.min.js', [], false, true);

    wp_enqueue_script('jquery');//exist
    wp_enqueue_script('tether-script', $base . 'assets/js/tether.min.js', [], false, true);
    wp_enqueue_script('bootstrap-script', $base . 'assets/js/bootstrap.min.js', [], false, true);
    wp_enqueue_script('custom-script', $base . 'assets/js/custom.js', [], false, true);
    wp_enqueue_script('masonry-script', $base . 'assets/js/masonry.js', [], false, true);
    

}
add_action('wp_enqueue_scripts', 'wpc_load_assets');//name , function, def , def

//wp_enqueue_scripts to indlucde css files and js files
//  wp_enqueue_style to include css files (name,path,[],vesion(def),false def(all))
// wp_enqueue_script to include js files (name,path,[],vesion(def),false def(all))
}
else {
    //for example sending email

}

if(!function_exists('wp_setup')){
    function wp_setup(){
        add_theme_support('post-thumbnails');

    }
    add_action('after_setup_theme','wp_setup');

}
// function wpc_edit_content($content){
//     return $content.'<br><p style="color:red">the Editor</p>';
// }
// add_filter('the_content','wpc_edit_content');

require get_template_directory().'/inc/widgets/widgets.php';

?>