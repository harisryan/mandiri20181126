<div id="pencarian-form" class="bg-separator clearfix">
	<div class="content-widget akses h-300">
		<form method="post" id="cari-formulir" action="<?=site_url('result-formulir/')?>" class="validate">
			<input type="hidden" name="a" id="a"/>
			<input type="hidden" name="b" id="b"/>
			<div class="f-16 c-blue header5_care_corner"><?php /* _e("<!--:en-->SEARCH FORM<!--:--><!--:id-->PENCARIAN FORMULIR<!--:-->"); */
											 _e("PENCARIAN FORMULIR"); ?></div>
			<p><?php /* _e("<!--:en-->Select AXA Mandiri entity that provides forms you need<!--:--><!--:id-->Pilih tipe asuransi yang menyediakan formulir yang Anda butuhkan<!--:-->"); */
						_e("Pilih tipe asuransi yang menyediakan formulir yang Anda butuhkan"); ?></p>
				<select id="pilih-entity" name="entity" class="required">
					<option disabled selected><?php /* _e("<!--:en-->Select the entity<!--:--><!--:id-->Tipe Asuransi<!--:-->"); */
														_e("Tipe Asuransi"); ?></option>
					<?php 
						$tax = array('form_entity');
						$args = array('order' => 'ASC', 'hide_empty' => false);
						$term = get_terms( $tax, $args);
						foreach($term as $term_tax)
						{
							$name = $term_tax->name;
							$slug = $term_tax->slug;
							echo "<option value=\"".$slug."\">".$name."</option>";
						}
					?>
				</select>

			<p><?php /* _e("<!--:en-->Select the type of form you need<!--:--><!--:id-->Pilih jenis formulir yang Anda butuhkan<!--:-->"); */
						_e("Pilih jenis formulir yang Anda butuhkan"); ?></p>
			<div id="pilihform-wrap" class="disable relative">
				<select id="pilih-form" name="formulir" class="required">
					<option disabled selected><?php /* _e("<!--:en-->Form type<!--:--><!--:id-->Jenis Formulir<!--:-->"); */
														_e("Jenis Formulir"); ?></option>
				</select>
			</div>
			
			<button type="submit" class="button blue small">Cari Formulir</button>
		</form>
		<script type="text/javascript">
			jQuery(document).ready(function() {	
				$('#pilih-entity').on('change', function (e) {
					var valueSelected = this.value;
					var title = $("#pilih-entity option[value='"+valueSelected+"']").text();
					$('#pilih-form option:selected').text("Loading..").attr('disabled','disabled');
					$('#pilih-form').load('<?php bloginfo('template_url');?>/getForm.php?place=' + valueSelected);
					$('#pilihform-wrap').removeClass('disable');
				});
				$('#pilih-form').on('change', function (e) {
					var valueSelected = this.value;
					var title = $("#pilih-form option[value='"+valueSelected+"']").text();
					$("#a").val(title);
					$("#b").val(valueSelected);
				});				
			});
		</script>
	</div>
</div>