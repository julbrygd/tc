<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Theme\Tc\Twig;


use Twig_SimpleFunction;
use Twig_Extension;
/**
 * Description of WordpressTwigExtension
 *
 * @author Stephan
 */
class WordpressTwigExtension extends Twig_Extension {

    /**
     * Define the extension name.
     *
     * @return string
     */
    public function getName() {
        return 'tc_wordpress';
    }

    /**
     * Register a global "fn" which can be used
     * to call any WordPress or core PHP functions.
     *
     * @return array
     */
    public function getGlobals() {
        return [
            'wp' => $this,
        ];
    }

    /**
     * Allow developers to call core php and WordPress functions
     * using the `fn` namespace inside their templates.
     * Linked to the global call only...
     *
     * @param string $name
     * @param array  $arguments
     *
     * @return mixed
     */
    public function __call($name, array $arguments) {
        return call_user_func_array($name, $arguments);
    }

    public function getFunctions() {
        return [
            /*
             * WordPress theme functions.
             */
            new Twig_SimpleFunction('get_permalink', function ($post = '', $leavename = false) {
                return get_permalink($post, $leavename);
            }),
        ];
    }

}
