<?php
/*
 * ThemeSettingsAppController
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Takako Miyagawa <nekoget@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

/**
 * ThemeSettingsAppController
 *
 * @author Takako Miyagawa <nekoget@gmail.com>
 * @package NetCommons\ThemeSettings\Controller
 */
class ThemeSettingsAppController extends AppController {

/**
 * helper
 *
 * @var array
 */
	public $helpers = array('Cache', 'Form', 'Html');

/**
 * component
 *
 * @var array
 */
	public $components = array('Security', 'ThemeSettings.ThemeSettingsThemeList');

}
