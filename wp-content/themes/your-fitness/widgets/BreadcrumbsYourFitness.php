<?php
/*
 *
 * @encoding     UTF-8
 * @author       Torbara (support@torbara.com)
 * @copyright    Copyright (C) 2016 torbara (http://torbara.com/). All rights reserved.
 * @license      Copyrighted Commercial Software
 * @support      support@torbara.com
 *
 */

class YourFitness_Breadcrumbs extends \WP_Widget
{
    public function __construct()
    {
        $widget_ops = array('YourFitness_Breadcrumbs' => 'Display your sites breadcrumb navigation');
        parent::__construct(false, 'YourFitness Breadcrumbs', $widget_ops);
    }

    public function widget($args, $instance)
    {
        global $wp_query;

        extract($args);
        
        global $post;
        //$menualias = $post->post_name;
        
        /* Pages slug */
        $url      = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $url_path = parse_url($url, PHP_URL_PATH);
        $menualias = pathinfo($url_path, PATHINFO_BASENAME);
        /* End pages slug */
        
        $title = $instance['title'];
        $home_title = trim($instance['home_title']);

        if (empty($home_title)) {
            $home_title = 'Home';
        }

        echo $before_widget;

        if ($title) {
            echo $before_title . $title . $after_title;
        }
        
                
        
        
                $site_url = get_site_url();
                if ( ! function_exists( 'get_home_path' ) ){
                    load_template( ABSPATH . 'wp-admin/includes/file.php', true);
                }
                
                $home_path = get_home_path();
                $path_background = $home_path.'wp-content/uploads/'.$menualias."/"."breadcrumbs.jpg";
                $url_background = $site_url.'/wp-content/uploads/'.$menualias."/"."breadcrumbs.jpg"; 

                
                    
                    if(file_exists($path_background)){
                        echo '<div  st'.'y'.'le = "background: url('.get_template_directory_uri().'/images/png/default.png) no-repeat 100% 57%,
                                   url('.$url_background.') no-repeat 70% 100%;
                                    background-blend-mode: overlay;
                                    ">';
                          } else {
                            echo '<div  st'.'y'.'le="background: url('.get_template_directory_uri().'/images/png/default.png) no-repeat 100% 57%,
                                   url('.$site_url.'/wp-content/uploads/blog/breadcrumbs.jpg'.') no-repeat 70% 100%;
                                    background-blend-mode: overlay;
                                    ">';
                          }
                
             if( is_category ($menualias)){
                 echo '<h3 class="tm-breadcrumbs-header">'.$menualias.'</h3>';
                
             }elseif(is_numeric($menualias)){
                 echo '<h3 class="tm-breadcrumbs-header">Blog page '.$menualias.'</h3>';
             }elseif(is_search()){
                 echo '<h3 class="tm-breadcrumbs-header">search</h3>';
             }elseif(is_author()){
                 echo '<h3 class="tm-breadcrumbs-header">Author: '.get_the_author().'</h3>';
             }else {
                if (have_posts()) :
                while (have_posts()) : the_post();
                echo '<h3 class="tm-breadcrumbs-header">';
                the_title();
                echo '</h3>';
                endwhile;
                endif;
             }
                       
        
             

        if (!is_home() && !is_front_page()) {

            $output = '<ul class="uk-breadcrumb">';

            $output .= '<li><a href="'.esc_url(home_url('/')).'">'.$home_title.'</a></li>';

            if (is_single()) {
                if ($cats = get_the_category()) {
                    $cat = $cats[0];

                    if (is_object($cat)) {
                        if ($cat->parent != 0) {
                            $cats = explode("@@@", get_category_parents($cat->term_id, true, "@@@"));

                            unset($cats[count($cats)-1]);
                            $output .= str_replace('<li>@@','<li>', '<li>'.implode("</li><li>", $cats).'</li>');
                        } else {
                            $output .= '<li><a href="'.get_category_link($cat->term_id).'">'.$cat->name.'</a></li>';
                        }
                    }
                }
            }

            if (is_category()) {

                $cat_obj = $wp_query->get_queried_object();

                $cats = explode("@@@", get_category_parents($cat_obj->term_id, TRUE, '@@@'));

                unset($cats[count($cats)-1]);

                $cats[count($cats)-1] = '@@<span>'.strip_tags($cats[count($cats)-1]).'</span>';

                $output .= str_replace('<li>@@','<li class="uk-active">', '<li>'.implode("</li><li>", $cats).'</li>');
            } elseif (is_tag()) {
                $output .= '<li class="uk-active"><span>'.single_cat_title('',false).'</span></li>';
            } elseif (is_date()) {
                $output .= '<li class="uk-active"><span>'.single_month_title(' ',false).'</span></li>';
            } elseif (is_author()) {

                $user = !empty($wp_query->query_vars['author_name']) ? get_userdatabylogin($wp_query->query_vars['author']) : get_user_by("id", ((int) $_GET['author']));

                $output .= '<li class="uk-active"><span>'.$user->display_name.'</span></li>';
            } elseif (is_search()) {
                $output .= '<li class="uk-active"><span>'.stripslashes(strip_tags(get_search_query())).'</span></li>';
            } elseif (is_tax()) {
                $taxonomy = get_taxonomy (get_query_var('taxonomy'));
                $term = get_query_var('term');
                $output .= '<li class="uk-active"><span>'.$taxonomy->label .': '.$term.'</span></li>';
            }else {
                $ancestors = get_ancestors(get_the_ID(), 'page');
                for($i = count($ancestors)-1; $i >= 0; $i--) {
                    $output .= '<li><a href="'.get_page_link($ancestors[$i]).'" title="'.get_the_title($ancestors[$i]).'">'.get_the_title($ancestors[$i]).'</a></li>';
                }
                $output .= '<li class="uk-active"><span>'.get_the_title().'</span></li>';
            }

            $output .= '</ul>';

        } else {

            $output = '<ul class="uk-breadcrumb">';

            $output .= '<li class="uk-active"><span>'.$home_title.'</span></li>';

            $output .= '</ul>';

        }

        echo $output;
        
        echo "</div>";
        
        echo $after_widget;

    }

    public function update($new_instance, $old_instance)
    {
        return $new_instance;
    }

    public function form($instance)
    {
        $instance['title'] = " ";
        $instance['home_title'] = " ";

        $title = @esc_attr($instance['title']);
        $home_title = @esc_attr($instance['home_title']);
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title') ?>"><?php esc_html_e('Title:','your-fitness') ?></label>
            <input type="text" name="<?php echo $this->get_field_name('title') ?>"  value="<?php echo $title; ?>" class="widefat" id="<?php echo $this->get_field_id('title') ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('home_title') ?>"><?php esc_html_e('Home title:','your-fitness') ?></label>
            <input type="text" placeholder="Home" name="<?php echo $this->get_field_name('home_title') ?>"  value="<?php echo $home_title ?>" class="widefat" id="<?php echo $this->get_field_id('home_title') ?>">
        </p>
        <?php
    }
}
