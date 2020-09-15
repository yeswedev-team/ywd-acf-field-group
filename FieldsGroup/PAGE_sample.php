<?php
namespace YwdAcfFieldsGroup\FieldsGroup;

// Use it for security
if( ! defined( 'ABSPATH' ) ) {
	exit;
}

use YwdAcfFieldsGroup\SingletonInit;
use YwdAcfFieldsGroup\CustomField\SimpleWysiwyg;

use WordPlate\Acf\Location;
use WordPlate\Acf\Fields\Text;

/**
 * Create a new class for each fields group
 * This must define a protected __construct function including only the register_extended_field_group function.
 */
class PAGE_sample extends SingletonInit {
	protected function __construct() {
		register_extended_field_group([
			'title' => 'Fields group title',
			'location' => [
				Location::if('page', '2')
			],
			'fields' => [
				Text::make('Title', 'title'),
				SimpleWysiwyg::make('Content', 'contenu')
			]
		]);
	}
}