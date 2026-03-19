<?php

namespace App\Api;

use WP_Query;
use WP_REST_Request;
use WP_REST_Server;

class Products {
    public static function register(){
        register_rest_route('sage/v1', 'products', [
            'methods' => WP_REST_Server::READABLE,
            'callback' =>  ['App\Api\Products', 'getProducts'],
            'permission_callback' => '__return_true',
        ]);
    }
    public static function getProducts(WP_REST_Request $request){
        $category = $request->get_param('category') ?? '';
        $search = $request->get_param('search') ?? '';
        $page = $request->get_param('page') ?? 1;

        $args = [
            "post_type" => "product",
            "posts_per_page" => 6,
            "paged" => $page,
            "post_status" => "publish",
        ];
        if(!empty($search)){
            $args['s'] = $search;
        }
        if($category){
            $args['tax_query'] = [[
                'taxonomy' => 'category',
                'field' => 'slug',
                'terms' => sanitize_text_field($category),
            ]];
        }

        $query = new WP_Query($args);
        $products = [];

        if($query->found_posts){
            foreach($query->posts as $post){
                $post_terms = wp_get_post_terms( $post->ID, 'category', array( 'fields' => 'names' )  );

                $products[] = [
                    'id' => $post->ID,
                    'title' => $post->post_title,
                    'url' => get_permalink($post->ID),
                    'image' => get_the_post_thumbnail_url($post->ID, 'large'),
                    'category' => implode(', ', $post_terms),
                ];
            }
        }

        return new \WP_REST_Response([
            "products" => $products,
            'totalPages' => $query->max_num_pages,
            'total' => $query->found_posts,
        ], 200);
    }
}
