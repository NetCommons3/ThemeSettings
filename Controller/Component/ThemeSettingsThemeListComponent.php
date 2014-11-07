<?php
/*
 * ThemeSettingsThemeListComponent
 *
 * @author Noriko Arai <arai@nii.ac.jp>
 * @link http://www.netcommons.org NetCommons Project
 * @license http://www.netcommons.org/license.txt NetCommons License
 * @copyright Copyright 2014, NetCommons Project
 */

App::uses('AppController', 'Controller');

/**
 * Class ThemeSettingsThemeListComponent
 *
 * @author Takako Miyagawa <nekoget@gmail.com>
 * @package NetCommons\ThemeSettings\Controller
 */
class ThemeSettingsThemeListComponent extends Component {

/**
 * theme list
 *
 * @var array
 */
	public $ThemeList = array();

/**
 * theme list (array)
 *
 * @param Controller $controller controller class object
 * @return array
 */
	public function getList(Controller $controller) {
		$themeList = array(); //テーマの情報を格納
		$dir = realpath(App::themePath('')) . '/';
		//フォルダの中を取得
		$dirList = scandir($dir, 1);
		//フォルダ名だけのリストをつくる
		$package['snapshot'] = '';
		foreach ($dirList as $d) {
			if (is_dir($dir . $d) && ($d != '.' && $d != '..')) {
				if (is_file($dir . $d . "/theme.json")) {
					$file = file_get_contents($dir . $d . '/theme.json');
					$package = json_decode($file, true);
					if (is_file(App::themePath($d) . 'webroot/snapshot.jpg')) {
						$package['snapshot'] = '/theme/' . $d . '/snapshot.jpg';
					} elseif (is_file(App::themePath($d) . 'webroot/snapshot.png')) {
						$package['snapshot'] = '/theme/' . $d . '/snapshot.png';
					}
					$package['key'] = $d;
					$themeList[$d] = $package;
					$package['snapshot'] = '';
				}
			}
		}
		ksort($themeList);
		$this->ThemeList = $themeList;
		return $this->ThemeList;
	}

/**
 * theme list (json)
 *
 * @param Controller $controller controller class object
 * @return string
 */
	public function getJson(Controller $controller) {
		if (! $this->ThemeList || $this->ThemeList == array()) {
			$this->getList($controller);
		}
		$array = array_values($this->ThemeList);
		return json_encode($this->__h($controller, $array));
	}
/**
 * jsonで吐き出す前に配列の中身をh()する
 *
 * @param Controller $controller controller class object
 * @param array $array theme list array
 * @return mixed
 */
	private function __h(Controller $controller, $array) {
		foreach ($array as $key => $item) {
			if (! is_array($item)) {
				$array[$key] = htmlspecialchars($item); //htmlspecialchars
			} else {
				$array[$key] = $this->__h($controller, $item);
			}
		}
		return $array;
	}

}