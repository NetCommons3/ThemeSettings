<?php
/**
 * Routes
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author @author Takako Miyagawa <nekoget@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 */

Router::connect('/theme_settings/site/:action/*', array(
	'plugin' => 'ThemeSettings',
	'controller' => 'ThemeSettingsSite'
));

Router::connect('/theme_settings/site/', array(
	'plugin' => 'ThemeSettings',
	'controller' => 'ThemeSettingsSite',
	'action' => 'index'
));
Router::connect('/theme_settings/site', array(
	'plugin' => 'ThemeSettings',
	'controller' => 'ThemeSettingsSite',
	'action' => 'index'
));
