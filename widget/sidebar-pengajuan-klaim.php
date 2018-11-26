<div class="bg-separator clearfix">
	<div class="content-widget h-300 ">
		<div class="f-16 c-blue header5_pembayaran_premi"><?php /* _e("<!--:en-->CLAIM SUBMISSION<!--:--><!--:id-->PENGAJUAN KLAIM<!--:-->"); */
										 _e("PENGAJUAN KLAIM");?></div>
		<p><?php /* _e("<!--:en-->Select the entity of your insurance products<!--:--><!--:id-->Pilih tipe asuransi Anda<!--:-->"); */
					_e("Pilih tipe asuransi Anda"); ?></p>
		<form method="post" id="pengajuan-klaim" action="<?=site_url('result-klaim/')?>" class="validate" >
			<input type="hidden" name="z" id="z"/>
			<input type="hidden" name="q" id="q"/>
			<select id="pilih-solusi" name="solusi" class="required">
				<option disabled selected><?php /* _e("<!--:en-->Select the entity<!--:--><!--:id-->Tipe Asuransi<!--:-->"); */
													_e("Tipe Asuransi"); ?></option>
				<?php 
					$tax = array('klaim_entity');
					$args = array('order' => 'ASC', 'hide_empty' => true);
					$term = get_terms( $tax, $args);
					foreach($term as $term_tax)
					{
						$name = $term_tax->name;
						$slug = $term_tax->slug;
						echo "<option value=\"".$slug."\">".$name."</option>";
					}
				?>
			</select>
			
<!-- 			<div id="produk-wrapper" class="disable relative">
				<select id="pilih-produk" name="produk">
					<option>Pilih produk</option>
				</select>
			</div> -->

			<p><?php #_e("<!--:en-->Or enter your policy number<!--:--><!--:id-->Atau masukkan nomor polis Anda<!--:-->"); ?></p>
			<!-- <input type="text" id="polis" placeholder="No. Polis"/> -->

			<button type="submit" class="button blue small centered">Cara Pengajuan Klaim</button>
		</form>
		<script type="text/javascript">
			jQuery(document).ready(function() {	
				$('#pilih-solusi').on('change', function (e) {
					var valueSelected = this.value;
					var title = $("#pilih-solusi option[value='"+valueSelected+"']").text();
					$("#z").val(title);
					$("#q").val(valueSelected);
					$('#pilih-produk').load('<?php bloginfo('template_url');?>/getProduk.php?place=' + valueSelected);
					$('#produk-wrapper').removeClass('disable');
				});
			});
		</script>
	</div>
</div>