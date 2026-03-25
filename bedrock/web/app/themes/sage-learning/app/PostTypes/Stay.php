<?php

namespace App\PostTypes;

class Stay{
    public static function register(){
        register_post_type(STAY_POST_TYPE, [
            'labels' => [
                'name' => __('Stay', 'sage-learning'),
                'singular_name' => __('Stay', 'sage-learning'),
                'add_new' => __('Add New', 'sage-learning'),
                'add_new_item' => __('Add New Item', 'sage-learning'),
                'edit' => __('Edit', 'sage-learning'),
                'edit_item' => __('Edit Item', 'sage-learning'),
                'view_item' => __('View Item', 'sage-learning'),
                ],
            'public' => true,
            'has_archive' => false,
            'rewrite' => ["slug" => STAY_POST_TYPE],
            'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],

        ]);
    }
}
