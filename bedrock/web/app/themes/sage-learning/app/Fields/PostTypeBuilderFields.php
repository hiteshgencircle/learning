<?php
namespace App\Fields;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Field;

class PostTypeBuilderFields extends Field{
    public function fields(){
        $fields = Builder::make('post_type_builder');
        $fields->setLocation('post_type', '==', 'post');
        $fields->addFlexibleContent("post_type_builder", array(
            'button_label' => 'Add New Row',
            'min' => '',
            'max' => '2',
        ))->addLayout("banner",[
            "label" => "Banner",
            "display" => "block",
            'sub_fields' => [
                "title" => [
                    'label' => 'Title',
                ]
            ]
        ])->addText("title");
        return $fields->build();
    }
}
