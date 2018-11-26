<?php
/**
 * Get All category
 * @return [Array]
 */
function wp360_get_categories() {
    $categoriesTerms = get_categories( array(
        'orderby' => 'name'
    ) );
    
    $categories = array(
        '' => 'All'
    );
 
    foreach ( $categoriesTerms as $term ) {
        
        $categories[$term->term_id] = $term->name;
    }
    
    return $categories;
}

/**
 * Get All Form Contact Form 7
 * @return [Array]
 */
function getAllCF7(){

    $cf7Forms = get_posts( $args );

    $rest = array(
        '' => 'Select Contact 7',
    );

    $query = new WP_Query(array(
        'post_type' => 'wpcf7_contact_form',
        'posts_per_page' => -1,
    ));

    while ($query->have_posts()) {
        $query->the_post();
        $rest[get_the_ID()] = get_the_title();
    }
    wp_reset_query();
    return $rest;
}

/**
 * Get All Post with post type product_matrix
 * @return [Array]
 */
function getPostProduct(){
    $rest = array(
        '' => 'Select Post',
    );

    $query = new WP_Query(array(
        'post_type' => 'product_matrix',
        'post_status' => 'publish',
        'posts_per_page' => -1,
    ));

    while ($query->have_posts()) {
        $query->the_post();
        $rest[get_the_ID()] = get_the_title();
    }

    wp_reset_query();

    return $rest;
}