<?php/** * Template Name: Direktori:Kantor Cabang*/?>
<?php get_header();?>
<?php
global $wpdb,$keyword,$t;

$x= $_GET['x'];
$y=$_GET['y'];
$keyword = (!empty($_GET['q'])) ? $_GET['q'] : '';
$type = 'kantorcabang';
$tax = ($_GET['tax']) ? $_GET['tax'] : '';
$t='kantorcabang'; ?>
<script src='//pixel.mathtag.com/event/js?mt_id=570142&mt_adid=125263&v1=&v2=&v3=&s1=&s2=&s3='></script>
<div id="mapContainer" class="desktop-content"><div id="mapContent" class="h-650"></div></div>
<div id="mobile-map" class="mobile-content"></div>
	<div id="wrapper" class="row">
		<div id="searchdir" class="p-lr-30 p-tb-15 clearfix block relative bottom-10 bg-white-70p radius-all-5">
			<form id="caridirektori" class="m-bottom-0" name="cari-direktori" action="" method="get">
				<input type="hidden" name="tax" id="tax">
				<input type="hidden" name="t" value="kantorcabang" />
				<input type="text" name="q" class="inputdir left m-bottom-0" value="<?php echo $keyword; ?>"placeholder="Nama Kantor Cabang, Kota, Wilayah"/>
				<button type="submit" class="button blue btn-dir right m-top-3 m-bottom-0">Cari</button>


			<div id="container-selectEntity" class="clearfix">
				<div id="column-entity" class="left large-6 columns clearfix">
					<div class="entity">
						<p class="f-15"><?php /* _e("<!--:en-->According Entity<!--:--><!--:id-->Menurut Tipe Asuransi<!--:-->"); */
												 _e("Menurut Tipe Asuransi"); ?></p>
					</div>
					<ul id="selectEntity" class="small-block-grid-1 small-block-grid-2">
						<li><input type="checkbox" name="entity" id="amfs" value="amfs" <?php echo ($_GET['tax'] == "amfs") ? "checked" : ""; ?>><label for="amfs">Asuransi Jiwa</label></li>
						<li><input type="checkbox" name="entity" id="agi" value="agi" <?php echo ($_GET['tax'] == "agi") ? "checked" : ""; ?>><label for="agi">Asuransi Umum</label></li>
					</ul>
				</div>

			</div>
			</form>
		</div>
		<?php get_template_part('menu-direktori'); ?>
		<section id="maincontent">
			<div id="direktori-wrapper" class="large-8 columns clearfix">
				<?php
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$i = ceil(($paged - 1) * 10);

						if($tax != '' && $keyword == ''){
							$args = array("post_type" => "kantorcabang",
									  "posts_per_page" =>10,
									  'orderby' => 'title',
									  'order' => ASC,
									  'paged' => $paged,
									  'direktori_entity' => $tax
								);
						}
						elseif($tax != '' && $keyword != ''){
							$args = array("post_type" => "kantorcabang",
									  "posts_per_page" =>10,
									  'orderby' => 'title',
									  'order' => ASC,
									  'paged' => $paged,
									  's' => $keyword,
									  'direktori_entity' => $tax
								);
						}
						elseif ($tax == '' && $keyword != '') {
							$args = array("post_type" => "kantorcabang",
									  "posts_per_page" =>10,
									  'orderby' => 'title',
									  'order' => ASC,
									  'paged' => $paged,
									  's' => $keyword,
									  'direktori_entity' => array("amfs","agi")
								);
						}
						else{
							$args = array("post_type" 		=> "kantorcabang",
										"posts_per_page" 	=>10,
										'orderby' 			=> 'title',
										'order' 			=> ASC,
										'paged' 			=> $paged,
										'direktori_entity'=>$tax);

						}


						if(isset($x) && $x && $y != ''){
							$post_id_and_distance=$wpdb->get_results("SELECT post_id, post_title, ( 6371 * ACOS( COS( RADIANS($x))*COS(RADIANS(latitude))*COS(RADIANS(longitude)-RADIANS($y))+SIN(RADIANS($x))*SIN(RADIANS(latitude)))) AS distance
																	FROM  `directory_coordinates`
																	ORDER BY  `distance` ASC");
							$post_id_and_distance = array_splice($post_id_and_distance, 0);
							$new_array_post_id = array();
							foreach($post_id_and_distance as $row => $value)
								{
									$new_array_post_id[] = intval($value->post_id);
								}

									$args = array(
								   'post_type' => array('kantorcabang'),
								   "posts_per_page" =>10,
								   'post__in'   	=> $new_array_post_id,
								   'orderby'  		=> 'post__in',
								   'order' 			=> ASC,
								   'paged'			=> $paged,
								   'direktori_entity'=>$tax,
								   's'				=>$keyword
								);
						}

					add_filter('posts_join', 'directory_search_join' );
					add_filter('posts_where', 'directory_search_where' );
					$myquery = new WP_Query($args);
					//echo $myquery->request;
					// var_dump($myquery);

					remove_filter('posts_join', 'directory_search_join' );
					remove_filter('posts_where', 'directory_search_where' );
					if($myquery->have_posts()): ?>

				<div id="geodata"></div>
				<div id="head-direktori" class="clearfix p-lr-30 p-tb-15 direktori-list ">
					<div class="cp-display--none">
						<span id="lat"><?php echo $_GET['x'] ?></span>
						<span id="long"><?php echo $_GET['y'] ?></span>
					</div>
				<?php if($_GET['q'] =='' ){?>
					<h3 class="c-blue m-bottom-0 uppercase f-24">Direktori Kantor Cabang</h3>

					<?php }elseif($_GET['q'] || $_GET['t'] !=''){ ?>
					<h3 class="c-blue m-bottom-0 uppercase f-24">Hasil Pencarian <em>'<?php echo $_GET["q"]; ?>'</em></h3>
				<?php }?>

				</div>

				<ul id="main-direktori" class="m-all-0 list-style-none bg-greylight radius-all-5 o-hidden">
					<?php
					 while($myquery->have_posts()):$myquery->the_post();
						$field = get_field_object('jenis_rs');
						$value = get_field('jenis_rs');
						#$label = $field['choices'][ $value ];
						$locations = get_field('rs_map');
						$coords = explode(",", $location['coordinates']);
						$terms = get_the_terms($post->id, 'direktori_entity');
						$location = explode(',', $locations['coordinates']);
					?>

					<li class="adr clearfix direktori-list p-lr-30 p-tb-15 c-grey"  data-latitude="<?php echo $location[0]?>" data-longitude="<?php echo $location[1]?>">
						<div class="details left">
							<?php if ($post->post_type == "kantorcabang"):?>
							<strong class="block f-18 c-blue"><?php the_title();?></strong>
							<?php else:?>
							<strong class="block f-18 c-blue"><?php the_title();?></strong>
							<?php endif;?>
							<div class="mobile-map-details">
								<a class="get-direction" target="_blank" href="https://www.google.com/maps/dir//''/@<?php echo $locations['coordinates']?>,15z/data=!4m6!4m5!1m0!1m3!2m2!1d<?php echo $location[1]?>!2d<?php echo $location[0]?>" class="c-blue f-14 maps-link">
									<span class="left bg-iconlocation"></span>Get direction <span class="mobile-distance"></span><span class="c-blue"><i class="fa fa-chevron-circle-right"></i></span></a>
							</div>
							<span><i class="fa fa-map-marker street-address"></i> <?php the_field('rs_alamat');?></span><br/>

							<?php if(get_field('rs_telepon')):?><span>
								<i class="fa fa-phone"></i> <?php the_field('rs_telepon');?>
							<?php endif;?>
							<?php if(get_field('rs_fax')):?><span>
								&nbsp;&nbsp; <i class="fa fa-print"></i> <?php the_field('rs_fax');?></span>
							<?php endif;?>
							<?php if (get_field('penanggung_jawab')) {?>
								<br /><i class="fa fa-user"></i> <?php the_field('penanggung_jawab'); ?>
							<?php } ?>
							<br/>
							<?php
							if(!empty($terms)){
								foreach ($terms as $term) {?>
								<span class="tag f-12 p-all-5 bg-white radius-all-5 c-grey"><?php echo $term->name; ?></span>
							<?php }
							} ?>

						</div>

						<div class="map-details text-right right ">
							<a class="c-blue f-14 view-map" href="#" data-id-infowindow="<?php echo $i; ?>" data-location="<?php echo $locations['coordinates']; ?>">Lihat peta</a><br/>
							<span class="nearby f-14 distance"></span><br/>
							<a class="get-direction" target="_blank" href="https://www.google.com/maps/dir//''/@<?php echo $locations['coordinates']?>,15z/data=!4m6!4m5!1m0!1m3!2m2!1d<?php echo $location[1]?>!2d<?php echo $location[0]?>" class="c-blue f-14 maps-link"><span class="left bg-iconlocation"></span>Get direction<span class="right c-blue"><i class="fa fa-chevron-circle-right"></i></span></a>
					</div>
					</li>
					<?php $i++; endwhile;?>
					<li class="direktori-list text-center clearfix block p-tb-20"> <?php wp_pagenavi( array( 'query' => $myquery )); ?></li>
					<?php  wp_reset_postdata(); ?>
					<?php
					else:
					?>
					<div id="geodata"></div>
					<div id="head-direktori" class="clearfix p-lr-30 p-tb-15 direktori-list ">
						<div class="cp-display--none">
							<span id="lat"><?php echo $_GET['x'] ?></span>
							<span id="long"><?php echo $_GET['y'] ?></span>
						</div>
						<h3 class="c-blue m-bottom-0 uppercase f-24">Data tidak dapat ditemukan</h3>
					</div>

					<?php endif;?>
				</ul>
			</div>
			<?php wp_reset_query(); ?>
			<aside class="columns w-322 desktop-content">
				<div class="widget"><?php get_template_part("widget/footer-banner-left");?></div>
				<div class="widget"><?php get_template_part("widget/footer-banner-right");?></div>
			</aside>
		</section>
		<?php get_template_part("widget/breadcrumbs");?>
	</div>
<?php get_template_part("widget/hargaunit");?>

<script type="text/javascript">
		var markers = [];
		var center = new google.maps.LatLng("<?php if(isset($coord)){ echo $coord[0]; }else{ echo "-5.3107012"; }?>", "<?php if(isset($coord)){ echo $coord[1]; }else{ echo "119.8605666"; } ?>");
		var map = new google.maps.Map(document.getElementById('mapContent'), {
          zoom: <?php if(isset($coord)){ echo "15"; }else{ echo "5"; } ?>,
          center: center,
         scrollwheel: false
        });
		var infowindowArray = [];
		function addInfoWindow(marker, message) {
            var info = message;

            var infoWindow = new google.maps.InfoWindow({
                content: message
            });

            google.maps.event.addListener(marker, 'click', function () {
				map.setCenter(marker.getPosition());
				map.panBy(0, -100);
				for (var i = 0; i < infowindowArray.length; i++)
					infowindowArray[i].close();
				infoWindow.open(map, marker);
            });
			infowindowArray.push(infoWindow);
        }
		function initialize() {
			jQuery.getJSON('<?php echo site_url();?>/?page_id=8000&x=<?=$_GET['x']?>&y=<?=$_GET['y']?>&q=<?php echo $_GET['q']; ?>&tax=<?php echo $tax; ?>&t=<?php echo $t; ?>' ,function(data){

				for (var i = 0; i < data.length; i++) {
					var dataPhoto = data[i];
					var iconpng = data[i].options.iconpng;
					var latLng = new google.maps.LatLng(dataPhoto["latLng"][0],dataPhoto["latLng"][1]);

					var marker = new google.maps.Marker({
						position: latLng,
						icon: iconpng
					});
					addInfoWindow(marker, dataPhoto["data"]);
					markers.push(marker);
				}
				var mcOptions = {maxZoom: 15};
				var markerCluster = new MarkerClusterer(map, markers, mcOptions);
			});
		}
      	google.maps.event.addDomListener(window, 'load', initialize);

      	$(document).ready(function(){
      		$('input[name=entity]').change(function(){
      			var tax = new Array();
      			console.log(tax);
      			$('input[name=entity]:checked').each(function(){
      				tax.push(this.value);
      			});
      			tax = tax.join(",");
      			console.log(tax);
      			$('#tax').val(tax);
      		});
      		// $('input[name=entity]').change(function(){
      		// 	var tax = $('#tax').val();
      		// 	if(this.checked){
      		// 		if(tax == ''){
      		// 			tax = this.value;
      		// 		}
      		// 		else{
      		// 			tax = tax + ',' + this.value;
      		// 		}
      		// 		$('#tax').val(tax);
      		// 	}
      		// });

			//console.log(latLang);
			$(".view-map").click(function(){
				var latLang = $(this).attr("data-location");
				var idinfowindow = $(this).attr("data-id-infowindow");
	       		var latlon_array = latLang.split(',');
    	  		var lat = latlon_array[0];
      			var lon = latlon_array[1];
      			var b = new google.maps.LatLng(lat,lon);

      			 $('html, body').animate({
			          scrollTop: $("#mapContainer").offset().top
			      }, 1000);

				map.setCenter(b);
				google.maps.event.trigger(markers[idinfowindow], 'click');
				map.setZoom(16);

			});
		});

      		$(document).ready(function() {
			    //$("#direktori-wrapper").geolocator({ distanceBigStr: 'km', distanceSmallStr: 'm',debugMode: true, sorting: false, enableHighAccuracy: true });
				var currentLat;
				var currentLong;


		     function initGeolocation()
		     {
		        if( navigator.geolocation )
		        {
		           // Call getCurrentPosition with success and failure callbacks
		           navigator.geolocation.getCurrentPosition( success, fail );
		        }
		        else
		        {
		           alert("Sorry, your browser does not support geolocation services.");
		        }
		     }

		     function success(position)
		     {

		         $('#long').text(position.coords.longitude);
		         $('#lat').text(position.coords.latitude);
		         <?php if($_GET["x"] == null && $_GET["y"] == null): ?>
			         thisUrl="<?php echo site_url('direktori/kantorcabang');?>"
			         window.location.href=thisUrl+"?x="+position.coords.latitude+"&y="+position.coords.longitude+"&tax=<?=$tax?>&q=<?=$keyword?>&t=kantorcabang&nama_produk=<?=$nama_produk?>";
		         <?php endif; ?>
		     }

		     function fail()
		     {
		        // Could not obtain location
		     }

		     initGeolocation();


			});



			function distance(lat1,lon1,lat2,lon2) {
				var R = 6371; // km (change this constant to get miles)
				var dLat = (lat2-lat1) * Math.PI / 180;
				var dLon = (lon2-lon1) * Math.PI / 180;
				var a = Math.sin(dLat/2) * Math.sin(dLat/2) +
				       Math.cos(lat1 * Math.PI / 180 ) * Math.cos(lat2 * Math.PI / 180 ) *
				       Math.sin(dLon/2) * Math.sin(dLon/2);
				var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
				var d = R * c;
				if (d>1) return Math.round(d)+"km";
				else if (d<=1) return Math.round(d*1000)+"m";
				return d;
			}


$(window).load(function(){
	//get current lat & long from query parameters
	currentLat = $('#lat').html();
	currentLong = $('#long').html();
	//only calculate distance when found
	if(currentLat != "" && currentLong !="") {
		$('.distance').each(function(){
			var latLang = $(this).prev().prev().attr("data-location");
			var idinfowindow = $(this).attr("data-id-infowindow");
				var latlon_array = latLang.split(',');
				var lat = latlon_array[0];
				var lon = latlon_array[1];
			$(this).text(distance(currentLat,currentLong,lat,lon));
			$(this).parent().prev().find(".mobile-distance").text(" ("+distance(currentLat,currentLong,lat,lon)+") ");
		});
	}else{
		$('.distance').each(function(){
			$(this).text("");
		});
	}
});

</script>

<?php #var_dump($post);?>
<?php get_footer();?>
