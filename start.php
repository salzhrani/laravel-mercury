<?php

Autoloader::map(array(
	'Mercury' => __DIR__.'/classes/mercury.php'
));
Asset::container('mercury')->bundle('laravel-mercury');
Asset::container('mercury')->add('jquery','js/jquery-1.7.2.min.js');
Asset::container('mercury')->add('mercury-js','js/mercury_loader.js','jquery');
Asset::container('mercury')->add('mercury-css','css/mercury.bundle.css');
Asset::container('mercury')->add('functions-js','js/functions.js','mercury-js');
?>