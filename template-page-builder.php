<?php/** * Template Name: Page Builder : AMFS x MAGI x SAMSUNG */?>
<?php get_header(); ?>

<div id="page-container" style="background-image:url(<?php the_field('header_image');?>);">
	<div id="masthead" class="row relative">
		<div class="mobile-content absolute" id="header-image" style="background-image:url(<?php the_field('header_image');?>);"></div>
	</div><!--end masthead-->

	<div id="wrapper" class="row">
		<?php the_content(); ?>		
		<?php get_template_part("widget/breadcrumbs");?>
	</div>
<?php get_template_part("widget/hargaunit");?>
</div>
<style>
	.wpcf7 select{
		padding: 9.5px;
	}

	div.wpcf7-response-output,
	.clearfix{
		clear:both;
	}

	div.wpcf7-response-output{
		margin-top:70px !important;
	}

	div.radio, div.radio input, div.radio span {
		width: 17px;
		height: 17px;
		float: left;
		margin-right: 10px;
		margin-top: -1px;
	}
	.icon-manfaat.custom-icon-manfaat{
		background: transparent !important;
	}
	@media screen and (min-width: 768px) {
		#btn-top-lead{
			width: 100%;	
		}
	}
	@media screen and (min-width: 640px) {

			.widget-dropdown {
				display: none;
				margin-top: 30px;
			    background: #dedede;
			    margin-left: -25px;
			    margin-right: -45px;
			    padding: 25px;
			}

			.widget-dropdown.active {
				display: block;
			}

			#list-syarat .bg-white {
				min-height: 100px;
				height: auto;
			}

			#list-syarat .bg-white p {
				margin-bottom: 0;
			}

			#list-syarat li .details{
				padding-bottom: 0;
			}

	}

	.fieldset.full-width{
		width: 100% !important;
	}

	.fieldset.full-width.t-radio span.wpcf7-list-item{
		margin:0;
		width: 80px;
		background: #fff;
		box-shadow: none;
	}

	.fieldset.full-width.t-checkbox .wpcf7-form-control-wrap{
	    width: 100%;
		display: inline-block;
	}

	.fieldset.full-width.t-checkbox .wpcf7-form-control-wrap span.wpcf7-list-item{
		margin:0;
		width: 150px;
		background: #fff;
		box-shadow: none;
	}

	.fieldset.full-width.t-checkbox .wpcf7-form-control-wrap span.wpcf7-list-item:nth-child(2){
		margin:0;
		width: 200px;
	}

	.fieldset.full-width.t-checkbox .wpcf7-form-control-wrap span.wpcf7-list-item input[type=checkbox]{
		float: left;
	}

	.fieldset.full-width.t-checkbox .wpcf7-form-control-wrap span.wpcf7-list-item .wpcf7-list-item-label{
		width: 80%;
		margin-left: 10px;
	}
	.itemDim{
		display: none;
	}

</style>
<script>
	$(document).ready(function(){
		$('#merk_type').on('change',function(){
			// if($(this).val() == "Samsung A8"){
			// 	$('#harga_barang').val("Rp. 6.499.000").prop('readonly', true);
			// }else if($(this).val() == "Samsung A8+"){
			// 	$('#harga_barang').val("Rp. 8.099.000").prop('readonly', true);
			// }else{
			// 	$('#harga_barang').val("").prop('readonly', false);
			// }
			var select = $('.itemDim[data-id="'+$(this).val()+'"]');
			var show = select.data('value');
			if(show != null){
				$("#"+select.data('ref')).val(show).prop('readonly', true);
			}else{
				$("#"+$('.itemDim').data('ref')).val('').prop('readonly', false);
			}
		});

		$('a[href^="#"]').on('click',function (e) {
		    e.preventDefault();

		    var target = this.hash;
		    var $target = $(target);

		    $('html, body').stop().animate({
		        'scrollTop': $target.offset().top
		    }, 900, 'swing', function () {
		        window.location.hash = target;
		    });
		});
	});
</script>
<?php get_footer();?>