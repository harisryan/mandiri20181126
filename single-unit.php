
<?php/** * Template Name: Single Unit */?>
<?php $via_ajax = ($_GET['via_ajax']) ? $_GET['via_ajax'] : 0; ?>
<?php if($via_ajax == 1) : ?>
	<?php if( have_posts() ) : the_post(); ?>
			<div id="faux-tab">
			    <span>Chart</span>
    			<span><a href="<?php the_permalink(); ?>?list=true">List</a></span>
			</div>
			<div id="tableArray" class="cp-display--none"><?php the_content(); ?></div>
			<div id="visualization"></div><!-- visualization -->

	<?php endif; ?>
<?php else :  ?>
<?php get_header();?>

	<div id="page-container">
		<div id="masthead" class="row relative p-all-0">
			<div class="show-for-large-only"><?php get_template_part("widget/customer-care");?></div>
			<?php if (has_post_thumbnail( $post->ID ) ): ?>
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'matrix_large' ); ?>
			<?php endif; ?>
			<div id="page-head" class="relative m-top-120" style="background:#fcfdff url(<?php echo get_bloginfo('template_url').'/images/header-unit.jpg'; ?>) no-repeat top right">
				<div class="separate-large absolute"></div>
				<div class="box absolute set-1 large-5">
					<p>Harga Unit</p>
					<h1 class="f-45 lh-1"><?php the_title();?></h1>
					<!-- AddThis Button BEGIN -->
					<div class="addthis_toolbox addthis_default_style addthis_16x16_style" addthis:description="Temukan solusi perlindungan yang tepat sesuai kebutuhan Anda di AXA Mandiri"  addthis:title="Temukan solusi perlindungan yang tepat sesuai kebutuhan Anda di AXA Mandiri">
						<a class="addthis_button_facebook"></a>
						<a class="addthis_button_twitter"></a>
						<a class="addthis_button_print"></a>
						<a class="addthis_button_email"></a>
					</div>
					<script type="text/javascript">var addthis_config = {"data_track_addressbar":false};</script>
					<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52e88dff717990fa"></script>
					<!-- AddThis Button END -->
				</div>
			</div>
		</div><!--end masthead-->
		<div class="row p-all-0">
		<div id="page-box" class="sections white clearfix">
			<section id="body-1">
				<div class="f-16 c-greylight large-7 columns">
				<?php if( have_posts() ) : the_post(); ?>
						<div id="load-chart">
							<dl class="tabs" data-tab>
							  <dd class="<?=(empty($_GET['list'])) ? 'active' : ''?>"><a href="#chart">Chart</a></dd>
							  <dd class="<?=($_GET['list']) ? 'active' : ''?>"><a href="#list">List</a></dd>
							</dl>
							<div class="tabs-content">
							  <div class="content <?=(empty($_GET['list'])) ? 'active' : ''?>" id="chart">
							    <div id="visualization"></div>
							  </div>
							  <div class="content <?=($_GET['list']) ? 'active' : ''?>" id="list">
							    <?php the_content(); ?>
							  </div>
							</div>
					    </div>

				<?php endif;?>
				</div>
				<div class="large-5 columns">

					<form id="ulipDateSelector" action="" class="clearfix">
		                <input type="hidden" name="datequery" value="true"/>
		                <input type="hidden" name="date-input" value="preset"/>
		                <div id="unit-sidebar" class="clearfix">
		                    <div class="box top">
		                        <input type="radio" value="preset" name="date-input-option" id="preset" <?php if(!isset($_GET['date-input'])) {echo "checked";} ?>/>
		                        <div class="wrapper top <?php if(isset($_GET['date-input'])) {echo "disable";} ?>">
		                        <select id="date-preset">
		                            <option value="10d" selected="selected">10 Hari Terakhir</option>
		                            <option value="1m">1 Bulan Terakhir</option>
		                            <option value="3m">3 Bulan Terakhir</option>
		                            <option value="6m">6 Bulan Terakhir</option>
		                            <option value="1y">1 Tahun Terakhir</option>
		                            <option value="2y">2 Tahun Terakhir</option>
		                        </select>
		                        </div><!-- wrap -->
		                    </div>

		                    <div class="clearfix"></div>
		                    <input type="radio" value="range" name="date-input-option" id="range" <?php if(isset($_GET['date-input'])) {echo "checked";} ?>/>
		                    <label for="range"><?php /* _e("<!--:en--> View by date:<!--:--><!--:id-->Tampilkan Sesuai Tanggal<!--:-->"); */
		                    							_e("Tampilkan Sesuai Tanggal"); ?></label>

		                    <div class="wrapper bottom clearfix relative <?php if(!isset($_GET['date-input'])) {echo "disable";} ?>">
		                    <div class="dateinput clearfix">
		                        <div><input name="startDate" id="startDate" type="text" value="<?php if(isset($_GET['startDate'])) : echo $_GET['startDate']; endif; ?>" class="datepicker-ulip" placeholder="Tanggal Awal"/><span class="btn-cal"></span></div>
		                    </div>

		                    <div class="dateinput clearfix">
		                        <div><input name="endDate" id="endDate" type="text" value="<?php if(isset($_GET['endDate'])) : echo $_GET['endDate']; endif; ?>" class="datepicker-ulip" placeholder="Tanggal Akhir"/><span class="btn-cal"></span></div>
		                    </div>
		                    </div><!-- wrap active -->
		                </div><!--end unit sidebar-->
		            </form>

	           <div class="">
	                <?php the_widget('AXA_Xrate_Widget'); ?>
	                <?php the_widget('AXA_TotalClaim_Widget'); ?>
	                <?php if(is_single('3967')) echo do_shortcode('[sidebar_guaranteed_price]'); ?>
	            </div>

				</div>
			</section>
		</div>


		<?php get_template_part("widget/breadcrumbs");?>
		</div>
		<?php #get_template_part("widget/hargaunit");?>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$( ".datepicker-ulip" ).datepicker({ dateFormat: "yy-mm-dd", changeMonth: true, changeYear: true, yearRange: '2012:2014', defaultDate: '2014-01-01' });
			word = $.trim($('#list').text()).substring(0,4);

	        if(word == 'Data'){
	          $('#visualization').html("Data tidak tersedia untuk tanggal ini");
	        }else{
	          loadChart($('#load-chart').html());
	        }

			function loadChart(current) {
			    var $table = jQuery("#unit-table"),
			        $rows  = $table.find("tbody tr");
			    var rows  = [];

			    $rows.each(function(row,v) {
			        jQuery(this).find("td").each(function(cell,v) {
			            if (typeof rows[cell] === 'undefined') rows[cell] = [];
			            if (cell != 0) {
			                rows[cell][row] = parseFloat(jQuery(this).text().replace(/,/g, ""));
			            } else {
			                //rows[cell][row] = Date.parse(jQuery(this).text());
			                rows[cell][row] = jQuery(this).text();
			            }
			            ////console.log(cell+": "+rows[cell][row]);
			            ////console.log(moment());
			                //filterCategories = filterCategories;

			        });
			    });

			    function transpose(a)
			    {
			        return Object.keys(a[0]).map(function (c) { return a.map(function (r) { return r[c]; }); });
			    }

			    var datas = transpose(rows);

			    var datas = transpose(rows);

			    //OFFER Pending Further Notice
			    datas=datas.reverse();
			    datas.unshift(Array('Date','Bid','Offer'));
			    // console.log(current);
			    // console.log(datas);

			    function drawVisualization() {
			      	// Create and populate the data table.
			      	var data = google.visualization.arrayToDataTable(datas);
		            //console.log(datas);
		            var datas2 = datas.slice(1);
		            //console.log(datas2);
		            var max = Math.max.apply(Math, datas2.map(function(i) {
		                 return i[1];
		            }));
		            var min = Math.min.apply(Math, datas2.map(function(i) {
		                 return i[1];
		            }));
		            //console.log(max);
		            //console.log(min);

		            var datalength = datas.length;
		            //console.log(datalength);
		            //console.log(datas[datalength-1]);
		            if(datas[datalength-1][1] < datas[datalength-2][1] && datas[datalength-2][1] < datas[datalength-3][1] && datas[datalength-3][1] < datas[datalength-4][1]) {
		              var option = {
		                width: 400,
		                    chartArea:{width: 400, top:10, left:50 },
		                legend: {position: "none"},
		                    backgroundColor : "#FFFFFF",
		                vAxis: {maxValue: max + 10, minValue: min - 10}
		            };
		            //console.log("manual");
		            } else {
		            var option = {
		              width: 400,
		                    chartArea:{width: 400, top:10, left:50 },
		              legend: {position: "none"},
		                    backgroundColor : "#FFFFFF"

		            };
		            //console.log("auto");
		            }

			    	// Create and draw the visualization.
			      	new google.visualization.LineChart(document.getElementById('visualization')).draw(data, option);
			    }
			    google.load('visualization', '1.0', {'packages':['corechart'], 'callback' : drawVisualization});
			}


			$("#date-preset").change(function(){
			    var today = moment().format('YYYY-MM-DD');
			    var startDate;
			    switch($(this).val()) {
					case "10d" :
						startDate = moment().subtract('days',10).format('YYYY-MM-DD');
						break;
					case "1m" :
						startDate = moment().subtract('months',1).format('YYYY-MM-DD');
						break;
					case "3m" :
						startDate = moment().subtract('months',3).format('YYYY-MM-DD');
						break;
					case "6m" :
						startDate = moment().subtract('months',6).format('YYYY-MM-DD');
						break;
					case "1y" :
						startDate = moment().subtract('years',1).format('YYYY-MM-DD');
						break;
					case "2y" :
						startDate = moment().subtract('years',2).format('YYYY-MM-DD');
						break;
			    }
			    window.location = "?datequery=false&date-input-option=range&startDate="+startDate+"&endDate="+today+"&val="+$(this).val();
			});

			jQuery("#endDate").change(function() {
		      var startDate = $("#startDate").val();
		      var endDate = $("#endDate").val();
		      value = "<?php the_permalink(); ?>";
		      window.location = value+"?datequery=false&date-input-option=range&startDate="+startDate+"&endDate="+endDate;
		    });
		});
	</script>
<?php get_footer();?>

<?php endif; ?>
