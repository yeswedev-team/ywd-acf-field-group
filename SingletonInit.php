<?php
namespace YwdAcfFieldsGroup;

if( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Leave it alone ;)
 */
abstract class SingletonInit {

	private static $instances = [];

	abstract protected function __construct();

	public static function init() {
		if (!isset(self::$instances[static::class])) {
			self::$instances[static::class] = new static();
		}
		return self::$instances[static::class];
	}
}