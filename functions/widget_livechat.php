<?php

function widget_livechat()
{
	date_default_timezone_set("Asia/Jakarta");

	$lebaranDateBegin = strtotime("2017-06-23 17:01:00");
	$lebaranDateEnd = strtotime("2017-07-02 23:59:59");
	$dayNow = strtotime(date("Y-m-d H:i:s"));

	if (($dayNow > $lebaranDateBegin) && ($dayNow < $lebaranDateEnd)) {
		$html = '<p class="m-bottom-5">Sehubungan libur Hari Raya Idul Fitri 1438 H <br> layanan Live Chat akan kembali beroperasi <br> tanggal 3 Juli 2017</p>
                <div class="clearfix"></div>';
	} else {
		$html = '<p class="title">Maaf Layanan kami sedang offline</p>
                <p class="m-bottom-5">Jam kerja kami senin - jumat pukul 08.00-17.00</p>
                <div class="clearfix"></div>';
	}

	return $html;
}