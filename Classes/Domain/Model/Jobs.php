<?php
namespace Libeo\LboJobs\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2014
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
 * Jobs
 */
class Jobs extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * title
	 *
	 * @var string
	 */
	protected $title = '';

	/**
	 * description
	 *
	 * @var string
	 */
	protected $description = '';

	/**
	 * requirements
	 *
	 * @var string
	 */
	protected $requirements = '';

	/**
	 * url
	 *
	 * @var string
	 */
	protected $url = '';

	/**
	 * area
	 *
	 * @var string
	 */
	protected $area = '';

	/**
	 * type
	 *
	 * @var integer
	 */
	protected $type = 0;

	/**
	 * quantity
	 *
	 * @var integer
	 */
	protected $quantity = 0;

	/**
	 * salary
	 *
	 * @var string
	 */
	protected $salary = '';

	/**
	 * limitDate
	 *
	 * @var \DateTime
	 */
	protected $limitDate = NULL;

    /**
     * crdate
     *
     * @var \DateTime
     */
    protected $crdate = NULL;

    /**
     * external
     *
     * @var boolean
     */
    protected $external = FALSE;

	/**
	 * internship
	 *
	 * @var boolean
	 */
	protected $internship = FALSE;

	/**
	 * student
	 *
	 * @var boolean
	 */
	protected $student = FALSE;

	/**
	 * categories
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Libeo\LboJobs\Domain\Model\Category>
	 */
	protected $categories = NULL;

	/**
	 * __construct
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all ObjectStorage properties
	 * Do not modify this method!
	 * It will be rewritten on each save in the extension builder
	 * You may modify the constructor of this class instead
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		$this->categories = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the title
	 *
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Returns the description
	 *
	 * @return string $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets the description
	 *
	 * @param string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Returns the requirements
	 *
	 * @return string $requirements
	 */
	public function getRequirements() {
		return $this->requirements;
	}

	/**
	 * Sets the requirements
	 *
	 * @param string $requirements
	 * @return void
	 */
	public function setRequirements($requirements) {
		$this->requirements = $requirements;
	}

	/**
	 * Returns the url
	 *
	 * @return string $url
	 */
	public function getUrl() {
		return $this->url;
	}

	/**
	 * Sets the url
	 *
	 * @param string $url
	 * @return void
	 */
	public function setUrl($url) {
		$this->url = $url;
	}

	/**
	 * Returns the area
	 *
	 * @return string $area
	 */
	public function getArea() {
		return $this->area;
	}

	/**
	 * Sets the area
	 *
	 * @param string $area
	 * @return void
	 */
	public function setArea($area) {
		$this->area = $area;
	}

	/**
	 * Returns the type
	 *
	 * @return integer $type
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Sets the type
	 *
	 * @param integer $type
	 * @return void
	 */
	public function setType($type) {
		$this->type = $type;
	}

	/**
	 * Returns the quantity
	 *
	 * @return integer $quantity
	 */
	public function getQuantity() {
		return $this->quantity;
	}

	/**
	 * Sets the quantity
	 *
	 * @param integer $quantity
	 * @return void
	 */
	public function setQuantity($quantity) {
		$this->quantity = $quantity;
	}

	/**
	 * Returns the salary
	 *
	 * @return string $salary
	 */
	public function getSalary() {
		return $this->salary;
	}

	/**
	 * Sets the salary
	 *
	 * @param string $salary
	 * @return void
	 */
	public function setSalary($salary) {
		$this->salary = $salary;
	}

	/**
	 * Returns the limitDate
	 *
	 * @return \DateTime $limitDate
	 */
	public function getLimitDate() {
		return $this->limitDate;
	}

	/**
	 * Sets the limitDate
	 *
	 * @param \DateTime $limitDate
	 * @return void
	 */
	public function setLimitDate(\DateTime $limitDate) {
		$this->limitDate = $limitDate;
	}

    /**
     * Returns the crdate
     *
     * @return \DateTime $crdate
     */
    public function getCrdate() {
        return $this->crdate;
    }

    /**
     * Sets the crdate
     *
     * @param \DateTime $crdate
     * @return void
     */
    public function setCrdate(\DateTime $crdate) {
        $this->crdate = $crdate;
    }

	/**
	 * Returns the internship
	 *
	 * @return boolean $internship
	 */
	public function getInternship() {
		return $this->internship;
	}

	/**
	 * Sets the internship
	 *
	 * @param boolean $internship
	 * @return void
	 */
	public function setInternship($internship) {
		$this->internship = $internship;
	}

	/**
	 * Returns the boolean state of internship
	 *
	 * @return boolean
	 */
	public function isInternship() {
		return $this->internship;
	}


    /**
     * Returns the external
     *
     * @return boolean $external
     */
    public function getExternal() {
        return $this->external;
    }

    /**
     * Sets the external
     *
     * @param boolean $external
     * @return void
     */
    public function setExternal($external) {
        $this->external = $external;
    }

    /**
     * Returns the boolean state of external
     *
     * @return boolean
     */
    public function isExternal() {
        return $this->external;
    }

	/**
	 * Returns the student
	 *
	 * @return boolean $student
	 */
	public function getStudent() {
		return $this->student;
	}

	/**
	 * Sets the student
	 *
	 * @param boolean $student
	 * @return void
	 */
	public function setStudent($student) {
		$this->student = $student;
	}

	/**
	 * Returns the boolean state of student
	 *
	 * @return boolean
	 */
	public function isStudent() {
		return $this->student;
	}

	/**
	 * Adds a Category
	 *
	 * @param \Libeo\LboJobs\Domain\Model\Category $category
	 * @return void
	 */
	public function addCategory(\Libeo\LboJobs\Domain\Model\Category $category) {
		$this->categories->attach($category);
	}

	/**
	 * Removes a Category
	 *
	 * @param \Libeo\LboJobs\Domain\Model\Category $categoryToRemove The Category to be removed
	 * @return void
	 */
	public function removeCategory(\Libeo\LboJobs\Domain\Model\Category $categoryToRemove) {
		$this->categories->detach($categoryToRemove);
	}

	/**
	 * Returns the categories
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Libeo\LboJobs\Domain\Model\Category> $categories
	 */
	public function getCategories() {
		return $this->categories;
	}

	/**
	 * Sets the categories
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Libeo\LboJobs\Domain\Model\Category> $categories
	 * @return void
	 */
	public function setCategories(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $categories) {
		$this->categories = $categories;
	}

}