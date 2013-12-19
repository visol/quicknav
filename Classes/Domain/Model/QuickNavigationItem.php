<?php
namespace Visol\Quicknav\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Lorenz Ulrich <lorenz.ulrich@visol.ch>, visol digitale Dienstleistungen GmbH
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 *
 *
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class QuickNavigationItem extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * Name
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $name;

	/**
	 * Shortcut
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $shortcut;

	/**
	 * Categories
	 *
	 * @var \TYPO3\CMS\Extbase\Domain\Model\Category
	 */
	protected $category;

	/**
	 * Returns the name
	 *
	 * @return \string $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets the name
	 *
	 * @param \string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Returns the shortcut
	 *
	 * @return \string $shortcut
	 */
	public function getShortcut() {
		return $this->shortcut;
	}

	/**
	 * Sets the shortcut
	 *
	 * @param \string $shortcut
	 * @return void
	 */
	public function setShortcut($shortcut) {
		$this->shortcut = $shortcut;
	}

	/**
	 * Returns the category
	 *
	 * @return \TYPO3\CMS\Extbase\Domain\Model\Category
	 */
	public function getCategory() {
		return $this->category;
	}

}
?>