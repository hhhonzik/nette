<?php

/**
 * This file is part of the Nette Framework (http://nette.org)
 *
 * Copyright (c) 2004, 2011 David Grudl (http://davidgrudl.com)
 *
 * For the full copyright and license information, please view
 * the file license.txt that was distributed with this source code.
 */

namespace Nette\Application;

use Nette;



/**
 * Responsible for creating a new instance of given presenter.
 *
 * @author Jan Tichý <tichy@medio.cz>
 */
class PresenterFactory implements IPresenterFactory
{

	/**
	 * Create new presenter instance.
	 * @param string $class Presenter class name
	 * @return Nette\Application\IPresenter
	 */
	public function createPresenter($class)
	{
	    return new $class;
	}

}