<div id="direktori-widget" class="box h-255">

	<div class="two_grid">
		<div class="img-content">
			<img class="lazy" data-src="<?php bloginfo('template_url');?>/images/direktori.png" alt="direktori"/>
		</div>


		<div class="content-text">
			<div class="home_direktori_h4"><?php /* _e("<!--:en-->DIRECTORY<!--:--><!--:id-->DIREKTORI<!--:-->"); */
						_e("DIREKTORI"); ?></div>
			<p><?php /* _e("<!--:en-->Find the hospital and sales office partner AXA Mandiri in the city nearest you to help you get the support<!--:--><!--:id-->Cari rumah sakit dan Kantor Cabang AXA Mandiri terdekat di kota Anda untuk memudahkan Anda mendapat dukungan<!--:-->"); */
						_e("Cari rumah sakit dan Kantor Cabang AXA Mandiri terdekat di kota Anda untuk memudahkan Anda mendapat dukungan"); ?></p>
		</div>
			<form method="get" id="pilih-dir" class="bottom-20" action="<?php echo home_url( 'direktori/direktori-search/' ); ?>">
				<select id="pilih-direktori" class="clearfix" name="wilayah">
					<option><?php /* _e("<!--:en-->Choose City<!--:--><!--:id-->Pilih Kota<!--:-->"); */
									 _e("Pilih Kota"); ?>
						<?php
							$tax = array('direktori_wilayah');
							$args = array('order' => 'ASC', 'hide_empty' => true);
							$term = get_terms( $tax, $args);
							foreach($term as $term_tax)
							{
								$name = $term_tax->name;
								$slug = $term_tax->slug;
								echo "<option value=\"".$slug."\">".$name."</option>";
							}
						?>
					</option>
				</select>
		        <button type="submit" id="searchsubmit-dir" class="button"><?php _e("Cari"); ?</button>
		    </form>

	</div>
</div><!--end direktori widget-->
