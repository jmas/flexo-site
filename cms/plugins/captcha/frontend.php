<?php if(!defined('CMS_ROOT')) die;

/**
 * Frog CMS - Content Management Simplified. <http://www.madebyfrog.com>
 * Copyright (C) 2008 Philippe Archambault <philippe.archambault@gmail.com>
 * Copyright (C) 2008 Martijn van der Kleijn <martijn.niji@gmail.com>
 * Copyright (C) 2008 Maslakov Alexander <jmas.ukraine@gmail.com>
 *
 * This file is part of Frog CMS.
 *
 * Frog CMS is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Frog CMS is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Frog CMS.  If not, see <http://www.gnu.org/licenses/>.
 *
 * Frog CMS has made an exception to the GNU General Public License for plugins.
 * See exception.txt for details and the full text.
 */

/**
 * @package flexo
 * @subpackage captcha
 *
 * @author Maslakov Alexandr <jmas.ukraine@gmail.com>
 * @version 0.1
 * @license http://www.gnu.org/licenses/gpl.html GPL License
 * @copyright Maslakov Alexander, 2010
 */

/*
	Add Kcaptcha library
*/
AutoLoader::addFile('Kcaptcha', CORE_ROOT . '/plugins/captcha/kcaptcha/kcaptcha.php');



/*
	CaptchaFront controller
*/
class CaptchaFrontController extends Controller
{
	public function index()
	{
		$captcha = new Kcaptcha();
		
		$_SESSION['captcha'] = $captcha->getKeyString();
	}
}



/*
	Functions
*/
function captcha_check( $str )
{
	return (!empty($_SESSION['captcha']) && $_SESSION['captcha'] == $str);
}



/*
	Add dispatch router
*/
Dispatcher::addRoute(array(
	'/captcha.jpg' => 'captcha_front/index'
));
