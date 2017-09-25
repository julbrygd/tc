<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Theme\Controllers;

/**
 * Description of Posts
 *
 * @author stephan
 */
class Posts extends \Themosis\Route\BaseController {

    public function single($post, $query) {
        $theme = container();
        $text_domain = $theme['config.factory']->get('theme.textdomain');
        return view("wp/post-single", array(
            "post" => $post,
            "text_domain" => $text_domain
                )
        );
    }

}
