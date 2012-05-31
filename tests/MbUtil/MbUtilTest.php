<?php
/**
 * MbUtilTest
 * 
 * @copyright	Copyright (c) 2012 takyam (http://takl.org/)
 * @link		https://github.com/takyam-git/mb_util
 * @package		MbUtil.MbUtilTest
 * @license		MIT License
 */
require_once './src/MbUtil/MbUtil.php';

/**
 * OpauthTest class
 */
class MbUtilTest extends PHPUnit_Framework_TestCase {

	protected function setUp() {
		$this->util = new MbUtil();
	}

	public function testTrim() {
		$this->assertEquals(MbUtil::trim('　ほげ　'), 'ほげ');
		$this->assertEquals(MbUtil::trim('	ほげ	'), 'ほげ');
		$this->assertEquals(MbUtil::trim(PHP_EOL . 'ほげ' . PHP_EOL), 'ほげ');
		$this->assertEquals(MbUtil::trim(' ほげ '), 'ほげ');
		$this->assertEquals(MbUtil::trim(' 　	' . PHP_EOL . 'ほげ' , ' 　	' . PHP_EOL), 'ほげ');
		$this->assertEquals(MbUtil::trim(' 　	' . PHP_EOL), '');
	}

	public function testEscapeRegexp() {
		$this->assertEquals(MbUtil::escapeRegexp('/^.+?([0-9]+)\s*[\-]{1,2}(\t|\n)$/')
							, '\\/\\^\\.\\+\\?\\(\\[0-9\\]\\+\\)\\\\s\\*\\[\\\\-\\]\\{1,2\\}\\(\\\\t\|\\\\n\\)\\$\\/');
	}

}
