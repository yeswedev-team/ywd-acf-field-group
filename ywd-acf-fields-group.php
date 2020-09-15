<?php

/**
 * Plugin Name: YesWeDev ACF FieldsGroup
 */

use YwdAcfFieldsGroup\FieldsGroup\{PAGE_sample};

if (!function_exists('register_extended_field_group')) {
	return;
}

require dirname(__FILE__) . '/vendor/autoload.php';

// Init here FieldsGroup Class
PAGE_sample::init();