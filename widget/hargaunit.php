<?php
//    if ( is_front_page() && is_home() ) {
//    } else {
 //       #get_template_part('inpirasi-page');
 //      include("inspirasi-page.php");
  //  }
?>

<div id="unitWidget">
	<div class="wrap">
		<div class="row">
			<div class="boxContainer clearfix">
			<div class="header3_unittitle" id="title"><span><?php /* _e("<!--:en-->Unit Price<!--:--><!--:id-->Harga Unit<!--:-->"); */
                                            _e("Harga Unit"); ?></span></div>
			<form id="ulip-product">
				<select id="product" name="product" class="product" tabindex="1" aria-label="Product" role="listbox">
					<option value="0"><?php /* _e("<!--:en-->Choose Unit Price<!--:--><!--:id-->Pilih Harga Unit<!--:-->"); */
                                                _e("Pilih Harga Unit"); ?></option>
				<?php $query = new WP_Query( array('post_type'=>'unit','nopaging'=> true, 'orderby'=>'title', 'order'=> ASC) ) ?>
				<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
					<option value="<?php the_permalink(); ?>" class="cp-color--blue-i"><?php the_title(); ?></option>
				<?php
					endwhile;
                    wp_reset_query();
					endif;
				?>
				</select>
				<input type="submit" value="Go" class="cp-display--none"/>
			</form>
			</div>
			<?php echo do_shortcode('[widgetunitharian]'); ?>

			<div class="nextprev">
				<a id="prev" href="#"><i class="fa fa-angle-up"></i></a>
				<a id="next" href="#"><i class="fa fa-angle-down"></i></a>
			</div>
		</div><!--end row-->
	</div>
	<div id="ajaxContent" class="row">
		 <div class="container clearfix">
		 	<form id="ulipDateSelector" action="" class="large-4 columns clearfix">
                <input type="hidden" name="datequery" value="true"/>
                <input type="hidden" name="date-input" value="preset"/>
                <div id="unit-sidebar" class="clearfix">
                    <div class="box top">
                        <input type="radio" aria-label="Preset" role="group" value="preset" name="date-input-option" id="preset" <?php if(!isset($_GET['date-input'])) {echo "checked";} ?>/>
                        <div class="wrapper top <?php if(isset($_GET['date-input'])) {echo "disable";} ?>">
                        <select id="date-preset" role="listbox" aria-label="Date Preset">
                            <option>Pilih</option>
                            <option value="10d">10 Hari Terakhir</option>
                            <option value="1m">1 Bulan Terakhir</option>
                            <option value="3m">3 Bulan Terakhir</option>
                            <option value="6m">6 Bulan Terakhir</option>
                            <option value="1y">1 Tahun Terakhir</option>
                            <option value="2y">2 Tahun Terakhir</option>
                        </select>
                        </div><!-- wrap -->
                    </div>

                    <div class="clearfix"></div>
                    <input type="radio" value="range" role="group" aria-label="Range" name="date-input-option" id="range" <?php if(isset($_GET['date-input'])) {echo "checked";} ?>/>
                    <label for="range"><?php /* _e("<!--:en--> View by date:<!--:--><!--:id-->Tampilkan Sesuai Tanggal<!--:-->"); */
                                                _e("Tampilkan Sesuai Tanggal"); ?></label>

                    <div class="wrapper bottom clearfix relative <?php if(!isset($_GET['date-input'])) {echo "disable";} ?>">
                    <div class="dateinput clearfix">
                        <div><input name="startDate" aria-label="Start Date" id="startDate" type="text" value="<?php if(isset($_GET['startDate'])) : echo $_GET['startDate']; endif; ?>" class="datepicker" placeholder="Tanggal Awal"/><span class="btn-cal"></span></div>
                    </div>

                    <div class="dateinput clearfix">
                        <div><input name="endDate" aria-label="End Date" id="endDate" type="text" value="<?php if(isset($_GET['endDate'])) : echo $_GET['endDate']; endif; ?>" class="datepicker" placeholder="Tanggal Akhir"/><span class="btn-cal"></span></div>
                    </div>
                    </div><!-- wrap active -->
                </div><!--end unit sidebar-->
                <input type="submit" value="Go" class="cp-display--none"/>
            </form>

           <div id="chartContainer" class="large-4 columns clearfix relative"></div>

           <div class="large-4 columns">
                <?php the_widget('AXA_Xrate_Widget'); ?>
                <?php the_widget('AXA_TotalClaim_Widget'); ?>
                <?php echo do_shortcode('[sidebar_guaranteed_price]');
                // var_dump(do_shortcode('[sidebar_guaranteed_price]')); ?>
            </div>
		 </div><!--end container-->
	</div><!--end expand content-->
</div>
<script type="tsxt/javascript">
 // $("#product").change(function(){
 //      var value = this.value;
 //      if(value=="<?php echo site_url('')?>/unit/maestro-link-maxi-advantage-idr/"){
 //        $("#guaranteed_price").hide();
 //      }
 //      else{
 //        $("#guaranteed_price").show();
 //      }
 //    });
</script>
