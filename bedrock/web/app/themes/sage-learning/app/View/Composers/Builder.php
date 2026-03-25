<?php
namespace App\View\Composers;
use Roots\Acorn\View\Composer;
class Builder extends Composer{
    protected static $views = [
        'front-page',
        'template-stay',
        'single-stay',
    ];

    public function with(){
        global $post;
        return [
            "page_builder" => get_field("page_builder", $post->ID) ?: [],
        ];
    }
}
