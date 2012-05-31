<?php
/**
 * MbUtil
 * 
 * PHP string utilities with multi-bytes chars.
 * only UTF-8
 * 
 * @copyright	Copyright (c) 2012 takyam (http://takl.org/)
 * @link		https://github.com/takyam-git/mb_util
 * @package		MbUtil
 * @license		MIT License
 */
class MbUtil {
	private static $regexpBefore = array('\\', '/', '*', '+', '.', '?', '(', ')', '{', '}', '[', ']', '$', '|', '^');
	private static $regexpAfter = array('\\\\', '\\/', '\\*', '\\+', '\\.', '\\?', '\\(', '\\)', '\\{', '\\}', '\\[', '\\]', '\\$', '\\|', '\\^');
	
	/**
	 * Escape RegExp chars.
	 * @access public static
	 * @param string $str strings has RegExp chars.
	 * @return string Escaped strings.
	 */
	public static function escapeRegexp($str) {
		return str_replace(self::$regexpBefore, self::$regexpAfter, $str);
	}
	
	/**
	 * Trim spaces with multibyte space in utf-8
	 * @access public static
	 * @param string $str
	 * @return string
	 */
	public static function trim($str) {
		return preg_replace('/(?:^[\s　]+|[\s　]+$)/u', '', $str);
	}

}