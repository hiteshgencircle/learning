<?php
namespace App\Fields;

use StoutLogic\AcfBuilder\FieldsBuilder;

class HeroFields {
    public static function register(){
        if(!function_exists('acf_add_local_field_group')) {

            return;
        }

        $hero = new FieldsBuilder('hero_fields', [
            'title'    => 'Hero Fields',   // ← Group title shown in WP admin
            'position' => 'normal',         // normal, side, acf_after_title
            'style'    => 'default',
        ]);

        $hero->addText("hero_title", [
            "label" => "Hero Title"
        ]);
        $hero->setLocation('post_type', '==', 'page');
        acf_add_local_field_group($hero->build());
    }
}
