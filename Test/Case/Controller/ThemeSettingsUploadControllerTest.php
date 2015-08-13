<?php
/**
 * AnnouncementEditsController Test Case
 *
 * @author   Jun Nishikawa <topaz2@m0n0m0n0.com>
 * @link     http://www.netcommons.org NetCommons Project
 * @license  http://www.netcommons.org/license.txt NetCommons License
 */

App::uses('YAControllerTestCase', 'NetCommons.TestSuite');

/**
 * Summary for AnnouncementEditsController Test Case
 */
class ThemeSettingsUploadControllerTest extends YAControllerTestCase {

/**
 * setUp
 *
 * @return   void
 */
	public function setUp() {
		parent::setUp();
	}

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'plugin.net_commons.site_setting',
	);

/**
 * index
 *
 * @return   void
 */
	public function testIndex() {
		$this->testAction('/theme_settings/theme_settings_upload/index', array('method' => 'get'));
		$this->assertTextNotContains('ERROR', $this->view);
	}
}
