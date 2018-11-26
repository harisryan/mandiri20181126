<?php include "wp-blog-header.php"; ?>

    <?php if( have_posts() ) : the_post(); ?>

 <!--    <div id="tableArray" class="cp-display--none"><?php the_content(); ?></div> -->
    <ul id="contact-axa">
        <li class="phone"><i class="fa fa-phone-square"></i> <?php the_field('unit_phone_number');?></li>
        <?php if(get_field('unit_sms')):?><li class="sms c-blue"><i class="fa fa-comments cp-contact--one"></i> <span class="f-12 cp-margin--left5" ><?php the_field('unit_sms');?></span></li><?php endif;?>
        <?php if(get_field('unit_voice')):?><li class="sms c-blue"><i class="fa fa-mobile cp-contact--two"></i> <span class="f-12 cp-margin--left5"><?php the_field('unit_voice');?></span></li><?php endif;?>
        <li class="mail"><i class="fa fa-envelope"></i> <a href="mailto:<?php the_field('unit_email');?>" target="_blank">Email Kami</a></li>
    </ul>

    <!-- <div id="visualization"></div>< visualization -->

    <?php endif;?>
