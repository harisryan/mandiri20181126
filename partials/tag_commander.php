<?php
    $categoryTagCommander = wp_get_post_terms($post->ID, 'matrix_category', array("fields" => "names"));

    if ($_SERVER['HTTP_HOST'] == 'axamandiri.sudahdistaging.com') {
        $environment_detail = 'uat';
    } else {
        $environment_detail = 'production';
    }

    if ( is_front_page() ) {
        $page_name = 'Asuransi_AXA_Mandiri::Homepage';
    } else {
        $page_name = str_replace(" ", "_", get_the_title());
    }

    if ( str_replace(" ", "_", $categoryTagCommander[1]) == "Solusi_Kesehatan" ) {
        $product_label = "Health";
    } elseif ( str_replace(" ", "_", $categoryTagCommander[1]) == "Solusi_Proteksi" ) {
        $product_label = "Protection";
    } elseif ( str_replace(" ", "_", $categoryTagCommander[1]) == "Solusi_Invest" ) {
        $product_label = "Others::Credit_Protection";
    } elseif ( str_replace(" ", "_", $categoryTagCommander[1]) == "Solusi_Umum" ) {
        $product_label = "General";
    } else {
        $product_label = "Travel";
    }

    if (get_post_type( get_the_ID() ) == 'product_matrix') {
    ?>
        var tc_vars = {
            page_name : '<?=$page_name?>',
            env_template : '<?=$post->post_name?>',
            site_name : 'corporate_site::mandiri',
            page_status : '',
            env_language : 'id',
            env_work : '<?=$environment_detail?>',
            product_label : 'GI::<?=$product_label?>',
            order_id : '',
            responsive_layout : detectmob() ? 'mobile' : 'desktop'
        }
    <?php
    } else {
    ?>
        var tc_vars = {
            page_name : '<?=$page_name?>',
            env_template : '<?=$post->post_name?>',
            site_name : 'corporate_site::mandiri',
            env_language : 'id',
            env_work : '<?=$environment_detail?>',
            order_id : '',
            responsive_layout : detectmob() ? 'mobile' : 'desktop'
        }
    <?php
    }
?>