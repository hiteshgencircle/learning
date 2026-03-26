<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class ProductComposer extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var string[]
     */
    protected static $views = [
        'partials.products'
    ];

    public function with(){
        return [
            "categories" => $this->getCategories(),
            "tags" => $this->getTags(),
        ];
    }

    protected function getCategories(){
        $categories = get_terms([
            'taxonomy' => 'category',
            'hide_empty' => true,
            'orderby' => 'name',
            'order' => 'ASC',
        ]);
        return $categories ?: [];
    }
    protected function getTags(){
        $tags = get_terms([
            'taxonomy' => 'post_tag',
            'hide_empty' => true,
            'orderby' => 'name',
            'order' => 'ASC',
        ]);

        return $tags ?: [];
    }
}
