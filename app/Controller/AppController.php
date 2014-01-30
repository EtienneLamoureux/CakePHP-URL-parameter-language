<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
	
	public $components = array(
        'Language' => array(
			'supportedLanguages' => array(
				'en' => 'eng',
				'fr' => 'fra'
				),
			)
	);
	
	public function beforeFilter()
	{
		$this->Language->set($this->params['language']);
	}
	
	function beforeRender()
	{
		$this->set('language', $this->Language->getLanguage()); //to access the language code from any view
	}

	/**
	 * Override redirect to allow it to manage languages
	 * 
	 * @see Controller::redirect()
	 */
	public function redirect($url, $status = NULL, $exit = true)
	{
		if (is_array($url) && !isset($url['language']))
		{
			$url['language'] = $this->Language->getLanguage();
		}
		
		parent::redirect($url, $status, $exit);
	}
}
