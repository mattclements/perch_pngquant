<?php
	$API = new PerchAPI(1.0, 'perch_pngquant');

	$API->on('assets.create_image', 'PerchPngQuant::on_create');
