<?php

namespace YwdAcfFieldsGroup\CustomField;

use WordPlate\Acf\Fields\{Field, Group, Text, Image, Link};

class BlockSEO extends Group {
	public static function make(string $label, ?string $name = null): Field {
		$field = new static($label, $name);
		$field->fields([
			Text::make('Titre', 'seo_title'),
			SimpleWysiwyg::make('Texte', 'seo_content'),
			Image::make('Image', 'seo_image'),
			Link::make('Lien', 'seo_btn_link')->required(),
		]);
		return $field;
	}
}
