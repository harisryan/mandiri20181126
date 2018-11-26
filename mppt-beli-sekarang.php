<?php/** * Template Name: MPPT Beli Sekarang */?>
<?php get_header('belionline');
	$plan = (isset($_GET['plan'])) ? $_GET['plan'] : '';
?>

	<!-- Content Here! -->
	<div id="page-container">
		<div class="row white p-all-0 iframe-loading">
			<?php if($plan=='i'):?>							
				<iframe width="100%" height="810px" src="" data-src="https://indonesia.merimen.com/epolicy/index.cfm?fusebox=MICsec&fuseaction=act_ssologin&lf=EPLAMFSID&GCOID=720003&PACKAGE=I&USERID=AMFSNOLOGIN&SESSIONID=amfs69$x&LANGID=2&prod=107" frameborder="0" allowfullscreen></iframe>
			<?php elseif($plan=='ii'):?>
				<iframe width="100%" height="810px" src="" data-src="https://indonesia.merimen.com/epolicy/index.cfm?fusebox=MICsec&fuseaction=act_ssologin&lf=EPLAMFSID&GCOID=720003&PACKAGE=II&USERID=AMFSNOLOGIN&SESSIONID=amfs69$x&LANGID=2&prod=107" frameborder="0" allowfullscreen></iframe>
			<?php elseif($plan=='iii'):?>
				<iframe width="100%" height="810px" src="" data-src="https://indonesia.merimen.com/epolicy/index.cfm?fusebox=MICsec&fuseaction=act_ssologin&lf=EPLAMFSID&GCOID=720003&PACKAGE=III&USERID=AMFSNOLOGIN&SESSIONID=amfs69$x&LANGID=2&prod=107" frameborder="0" allowfullscreen></iframe>	
			<?php elseif($plan=='iv'):?>
				<iframe width="100%" height="810px" src="" data-src="https://indonesia.merimen.com/epolicy/index.cfm?fusebox=MICsec&fuseaction=act_ssologin&lf=EPLAMFSID&GCOID=720003&PACKAGE=IV&USERID=AMFSNOLOGIN&SESSIONID=amfs69$x&LANGID=2&prod=107" frameborder="0" allowfullscreen></iframe>
			<?php endif;?>					
		</div>
	</div>		
	<!-- End Content -->
	<script defer>
	function init() {
		var vidDefer = document.getElementsByTagName('iframe');
		for (var i=0; i<vidDefer.length; i++) {
			if(vidDefer[i].getAttribute('data-src')) {
				vidDefer[i].setAttribute('src',vidDefer[i].getAttribute('data-src'));
			} 
		} 			
	}
	window.onload = init;
	</script>
<?php get_footer('belionline');?>