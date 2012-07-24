<?php

/**
 * main class for the bundle
 * 
 *
 * @package 	laravel-mercury
 * @author 		Samy Al Zahrani
 * @copyright 	Samy Al Zahrani 2012
 * @license 	TBD
 */
class Mercury
{
	public static function full($content = '')
	{
		$options['type'] = 'full';
		return static::area($content,$options);
	}
	public static function simple($content = '')
	{
		$options['type'] = 'simple';
		return static::area($content,$options);
	}
	public static function markdown($content = '')
	{
		$options['type'] = 'markdown';
		return static::area($content,$options);
	}
	public static function snippets($content = '')
	{
		$options['type'] = 'snippets';
		return static::area($content,$options);
	}
	public static function image($src = '')
	{
		$options['type'] = 'image';
		return static::area($src,$options);
	}
	private static function area($content,$options)
	{
		$rval = '<div data-mercury="'.$options['type'].'" name="name" id="id">'.$content.'</div>';
		if($options['type'] == 'image')
			$rval = '<img data-mercury="image" src="'.$content.'">';
		return $rval;
	}
}
?>