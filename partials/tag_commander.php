<?php
    $categoryTagCommander = wp_get_post_terms($post->ID, 'matrix_category', array("fields" => "names"));

    if ($_SERVER['HTTP_HOST'] == 'axamandiri.sudahdistaging.com') {
        $environment_detail = 'uat';
    } else {
        $environment_detail = 'production';
    }

    if (get_post_type( get_the_ID() ) == 'product_matrix') {
    ?>
        var tc_vars = {
            page_name : '<?=str_replace(" ", "_", get_the_title())?>',
            env_template : '<?=$post->post_name?>',
            site_name : 'corporate_site::mandiri',
            page_status : 'lead_started',
            env_language : 'id',
            env_work : '<?=$environment_detail?>',
            product_label : 'GI::<?=str_replace(" ", "_", $categoryTagCommander[1])?>',
            order_id : ''
        }
    <?php
    } else {
    ?>
        var tc_vars = {
            page_name : '<?=str_replace(" ", "_", get_the_title())?>',
            env_template : '<?=$post->post_name?>',
            site_name : 'corporate_site::mandiri',
            env_language : 'id',
            env_work : '<?=$environment_detail?>',
            order_id : ''
        }
    <?php
    }
?>