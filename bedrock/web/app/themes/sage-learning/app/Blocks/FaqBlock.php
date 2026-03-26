<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use Log1x\AcfComposer\Builder;

class FaqBlock extends Block{
    public $name = 'FAQ Block';
    public $slug = 'faq';
    public $description = 'Display FAQs on accordion';
    public $category = 'common';
    public $icon = 'fa fa-question';
    public $keywords = ["faq", "accordion"];
    public $supports = [
        'mode'   => false,
        "jsx" => true
    ];
    public function with()
    {
        return [
            'item' => get_field("title"),
        ];
    }

    public function fields(){
        $fields = Builder::make("faq_block");
        $fields->addText("title", ["label" => "Title"]);
        return $fields->build();
    }
}
