<?php
function remarketing_health_product($slug)
{
	$list_product = ['asuransi-kesehatan', 'asuransi-mandiri-jaminan-kesehatan', 'asuransi-mandiri-proteksi-kanker', 'asuransi-mandiri-heart-protection'];
	
	if (in_array($slug, $list_product)) {
		return true;
	}
}