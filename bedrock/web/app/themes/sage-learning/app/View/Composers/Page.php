<?php

namespace App\View\Composers;
use Roots\Acorn\View\Composer;
class Page extends Composer{
    protected static $views = [
        "partials.flexible",
    ];

    public function with(){
        global $post;
        return [
            "builder" => get_field("builder", $post->ID) ?: [],
        ];
    }
}
