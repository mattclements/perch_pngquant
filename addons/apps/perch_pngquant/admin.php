<?php

if ($CurrentUser->logged_in()) {
    $this->register_app('perch_pngquant', 'PNGQuant Optimisation', 1, 'Image optimisation', '1.0', true);
    $this->require_version('perch_pngquant', '2.8.5');

    include('autoloader.php');

    include(__DIR__.'/events.php');

}