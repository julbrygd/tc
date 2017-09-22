<?php

return [
    "bootstrap.min.css" => [
        "path" => "css/bootstrap/bootstrap.min.css",
        "cdn" => "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css",
        "deps" => [],
        "version" => "3.3.7"
    ],
    "style.css" => [
        "path" => "css/style.css",
        "deps" => ["bootstrap.min.css"],
        "version" => "1.0.0"
    ],
    "bootstrap.min.js" => [
        "path" => "js/bootstrap/bootstrap.min.js",
        "cdn" => "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js",
        "deps" => ['jquery'],
        "version" => "3.3.7",
        "footer" => true
    ],
    "ie10-viewport-bug-workaround.js" => [
        "path" => "js/bootstrap/ie10-viewport-bug-workaround.js",
        "deps" => ["bootstrap.min.js"],
        "footer" => true
    ]
];
