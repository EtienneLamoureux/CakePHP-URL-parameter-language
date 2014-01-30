<?php
/**
 * Application level View Helper
 *
 * This file is application-wide helper file. You can put all
 * application-wide helper-related methods here.
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
 * @package       app.View.Helper
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Helper', 'View');

/**
 * Application helper
 *
 * Add your application-wide methods in the class below, your helpers
 * will inherit them.
 *
 * @package       app.View.Helper
 */
class AppHelper extends Helper
{
	/**
	 * Override to provide support for language-changing links
	 * 
	 * @see Helper::url()
	 * @example echo $this->Html->link('English', array('language'=>'en'));
	 * @example echo $this->Html->link('Français', array('language'=>'fr')); 
	 */
	public function url($url = null, $full = false)
	{
        if(is_array($url) && !isset($url['language']))
        {
         	$url['language'] = $_SESSION['Config']['languageCode'];
        }
        
        return parent::url($url, $full);
   }
}
