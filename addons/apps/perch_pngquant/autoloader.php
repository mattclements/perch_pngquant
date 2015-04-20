<?php
	spl_autoload_register(function($class_name){
        if ($class_name === 'PerchPngQuant') {
    		include(PERCH_PATH.'/addons/apps/perch_pngquant/lib/PerchPngQuant.class.php');
    		return true;
    	}
    	return false;
    });