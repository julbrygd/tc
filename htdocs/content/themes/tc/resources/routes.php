<?php

/**
 * Define your routes and which views to display
 * depending of the query.
 *
 * Based on WordPress conditional tags from the WordPress Codex
 * http://codex.wordpress.org/Conditional_Tags
 *
 */

Route::get('home', "Home@home");
Route::get('front', "Home@home");
Route::get('single', "Posts@single");

Route::redirect('/login','/cms/wp-login.php');