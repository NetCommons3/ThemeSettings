<?php
/*
 * Theme Controller
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @author Takako Miyagawa <nekoget@gmail.com>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */
App::uses('AppController', 'Controller');

/**
 * Theme Controller
 *
 * @author Takako Miyagawa <nekoget@gmail.com>
 * @package NetCommons\ThemeSettings\Controller
 */
class ThemeSettingsController extends AppController {

/**
 * beforeFilter
 *
 * @return void
 */
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow();
	}

/**
 * index
 *
 * @return void
 */
	public function index() {
		//サイト設定へリダイレクト
		redirect("/theme_settings/theme_settings_site");
	}
}
