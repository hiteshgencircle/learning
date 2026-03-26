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
        $tag = $request->get_param('tag') ?? '';
        $search = $request->get_param('src') ?? '';
        $page = $request->get_param('page') ?? 1;

        $args = [
            "post_type" => "product",
            "posts_per_page" => 6,
            "paged" => $page,
            "post_status" => "publish",
            "orderby" => "date",
            "order" => "DESC",
        ];

        if(!empty($search)){
            $args['s'] = sanitize_text_field($search);
            // Override search to title only
            add_filter('posts_search', function ($search_sql, $query) use ($search) {
                global $wpdb;

                if (! $query->is_search()) return $search_sql;

                $like        = '%' . $wpdb->esc_like($search) . '%';
                $search_sql  = $wpdb->prepare(
                    " AND ({$wpdb->posts}.post_title LIKE %s)",
                    $like
                );

                return $search_sql;
            }, 10, 2);
        }


        $taxonomies = [];
        if($category && $category != 'all'){
            $taxonomies[] = [
                'taxonomy' => 'category',
                'field' => 'slug',
                'terms' => sanitize_text_field($category),
            ];
        }
        if($tag && $tag != 'all'){
            $taxonomies[] =  [
                'taxonomy' => 'post_tag',
                'field' => 'slug',
                'terms' => sanitize_text_field($tag),
            ];
        }

        if(($category && $category != 'all') || ($tag && $tag != 'all')){
            $taxonomies[]["relation"] = "AND";
            $args['tax_query'] = $taxonomies;
        }

        $query = new WP_Query($args);

        $products = [];
        if($query->found_posts){
            foreach($query->posts as $post){
                $post_terms = wp_get_post_terms( $post->ID, 'category', array( 'fields' => 'names' )  );
                $tags = wp_get_post_terms( $post->ID, 'post_tag', array( 'fields' => 'names' )  );

                $products[] = [
                    'id' => $post->ID,
                    'title' => $post->post_title,
                    'url' => get_permalink($post->ID),
                    'image' => get_the_post_thumbnail_url($post->ID, 'large'),
                    'category' => implode(', ', $post_terms),
                    'tags' => $tags,
                    'price' => get_field("price", $post->ID)?? "0",
                ];
            }


            $start_number = (($page - 1) * 6) + 1;
            $end_number = ($page * 6) >= $query->found_posts ? $query->found_posts : $page * 6;
        }

        return new \WP_REST_Response([
            "products" => $products,
            'totalPages' => $query->max_num_pages,
            'total' => $query->found_posts,
            'start_number' => $start_number,
            'end_number' => $end_number,
        ], 200);
    }
}
