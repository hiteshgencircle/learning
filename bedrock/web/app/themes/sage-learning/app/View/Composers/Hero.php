<?php

namespace App\View\Composers;
use Roots\Acorn\View\Composer;
class Hero extends Composer{
    protected static $views = [
        'partials.hero'
    ];
    public function with(){
        return [
            'hero_title' => get_field('hero_title') ? : '',
        ];
    }
}
