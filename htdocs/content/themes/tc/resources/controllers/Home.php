<?php

namespace Theme\Controllers;

use Themosis\Route\BaseController;
use Theme\Models\Posts;

/**
 * Description of Home
 *
 * @author stephan
 */
class Home extends BaseController {

    private static $START_PAGE_KEY = 'page_on_front';

    public function home() {
        $startpage = get_option(self::$START_PAGE_KEY);
        $posttype = get_option('show_on_front');
        $post = new Posts(new \WP_Query());
        return view("welcome", array(
            "post" => $post->find([
                'p' => $startpage,
                'post_type' => $posttype
            ])->first()->get(),
            "news" => $post->find([
                'post_type' => 'post',
                'category__not_in' => array(),
                'posts_per_page' => 5
            ])->get()
        ));
    }

}
