 <dl class="accordion" data-accordion="">
    <p><strong>Lihat persyaratan dan tata cara pengajuan klaim produk AXA</strong></p>
    <?php 
      $first = 0;
      $terms = get_terms("klaim_entity");
      $count = count($terms);
      if ( $count > 0 ){
        foreach ( $terms as $term ) {
          if($term->slug != $slug){
    ?>
    <dd>
      <a href="#<?=$term->slug?>"><?=$term->name?></a>
      <div id="<?=$term->slug?>" class="content <?php if($first == 0) echo "active"; ?>">
        <div class="arrow"><i class="fa fa-angle-up"></i><i class="fa fa-angle-down"></i></div>
        <?php 

        $id=1257; 
        $post = get_post($id); 
        $content = apply_filters('the_content', $post->post_content); 
        if($term->slug=="axa-mandiri-financial-services"):
        echo $content;  
        endif;
        ?>
        <ul class="list-with-arrow column-2 ">
          <?php 
            $args = array("post_type" => "klaim","posts_per_page" =>-1, "klaim_entity" =>$term->slug);
            query_posts( $args );
            if(have_posts()): while(have_posts()):the_post();
          ?>
          <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
          <?php endwhile;?>
       </ul>
       <?php endif;?>

        <?php if(get_field('axa_mandiri_express_claim', 'klaim_entity_'.$term->term_id) || get_field('axa_mandiri_quick_response', 'klaim_entity_'.$term->term_id)): ?>
        <div id="general" class="clearfix">
          <?php if(get_field('axa_mandiri_express_claim', 'klaim_entity_'.$term->term_id)): ?>
          <div class="m-bottom-25 claim w-322">
            <div class="bg-white clearfix">
                <?php while(has_sub_field('axa_mandiri_express_claim', 'klaim_entity_'.$term->term_id)): ?>
                  <div class="content-widget akses h-350">
                    <div class="icons clearfix" style="background-image:url(<?php the_sub_field('image'); ?>)">
                    </div>

                    <div class="details">
                      <h4 class="f-16 c-blue"><?php the_sub_field('title');?></h4>
                      <p><?php the_sub_field('body'); ?></p>
                      <div class="button-center">
                       <a href="<?php echo site_url('');?>/layanan-nasabah/customer-care-center/" target="_blank" class="button blue"><?php the_sub_field('button_link'); ?></a>
                      </div>
                    </div>
                  </div>
                <?php endwhile;?>
            </div><!--end clearfix-->
          </div><!--end claim-->
          <?php endif;?>

          <?php if(get_field('axa_mandiri_quick_response', 'klaim_entity_'.$term->term_id)): ?>
          <div class="m-bottom-25 claim w-322">
            <div class="bg-white clearfix">
                <?php while(has_sub_field('axa_mandiri_quick_response', 'klaim_entity_'.$term->term_id)): ?>
                  <div class="content-widget akses h-350">
                    <div class="icons clearfix" style="background-image:url(<?php the_sub_field('image'); ?>)">
                    </div>

                    <div class="details">
                      <h4 class="f-16 c-blue"><?php the_sub_field('title');?></h4>
                      <p><?php the_sub_field('body'); ?></p>
                      <div class="button-center">
                       <a href="<?php echo site_url('');?>/layanan-nasabah/customer-care-center/" target="_blank" class="button blue"><?php the_sub_field('button_link'); ?></a>
                      </div>
                    </div>
                  </div>
                <?php endwhile;?>
            </div><!--end clearfix-->
          </div><!--end claim-->
          <?php endif;?>
        </div><!--end general-->
        <?php endif; ?>
      </div>


    </dd>
    <?php
        }
      $first++;
      }
    }
  ?>

 <!--  <dd>
    <a href="#general">Mandiri AXA General Insurance Indonesia</a>
   
  </dd> -->

</dl>