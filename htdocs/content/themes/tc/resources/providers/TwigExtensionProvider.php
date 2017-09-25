<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Theme\Providers;

use Themosis\Foundation\ServiceProvider;
use Theme\Tc\Twig\WordpressTwigExtension;

/**
 * Description of TwigExtensionProvider
 *
 * @author Stephan
 */
class TwigExtensionProvider extends ServiceProvider {
    public function register(){
        $container = $this->app;
        $container['twig']->addExtension(new WordpressTwigExtension());
    }
}
