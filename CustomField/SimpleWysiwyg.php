<?php

namespace YwdAcfFieldsGroup\CustomField;

use WordPlate\Acf\Fields\Field;
use WordPlate\Acf\Fields\Wysiwyg;

class SimpleWysiwyg extends Wysiwyg {
	public static function make(string $label, ?string $name = null): Field	{
		$field = new static($label, $name);
		return $field->mediaUpload(false)->tabs('visual')->toolbar('basic');
	}
}