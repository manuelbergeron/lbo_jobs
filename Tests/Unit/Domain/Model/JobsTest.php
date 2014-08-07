<?php

namespace Libeo\LboJobs\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class \Libeo\LboJobs\Domain\Model\Jobs.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class JobsTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \Libeo\LboJobs\Domain\Model\Jobs
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \Libeo\LboJobs\Domain\Model\Jobs();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTitle()
		);
	}

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle() {
		$this->subject->setTitle('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'title',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDescriptionReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getDescription()
		);
	}

	/**
	 * @test
	 */
	public function setDescriptionForStringSetsDescription() {
		$this->subject->setDescription('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'description',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getRequirementsReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getRequirements()
		);
	}

	/**
	 * @test
	 */
	public function setRequirementsForStringSetsRequirements() {
		$this->subject->setRequirements('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'requirements',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getUrlReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getUrl()
		);
	}

	/**
	 * @test
	 */
	public function setUrlForStringSetsUrl() {
		$this->subject->setUrl('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'url',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getAreaReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getArea()
		);
	}

	/**
	 * @test
	 */
	public function setAreaForStringSetsArea() {
		$this->subject->setArea('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'area',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTypeReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getType()
		);
	}

	/**
	 * @test
	 */
	public function setTypeForIntegerSetsType() {
		$this->subject->setType(12);

		$this->assertAttributeEquals(
			12,
			'type',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getQuantityReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getQuantity()
		);
	}

	/**
	 * @test
	 */
	public function setQuantityForIntegerSetsQuantity() {
		$this->subject->setQuantity(12);

		$this->assertAttributeEquals(
			12,
			'quantity',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getSalaryReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getSalary()
		);
	}

	/**
	 * @test
	 */
	public function setSalaryForStringSetsSalary() {
		$this->subject->setSalary('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'salary',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getLimitDateReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getLimitDate()
		);
	}

	/**
	 * @test
	 */
	public function setLimitDateForDateTimeSetsLimitDate() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setLimitDate($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'limitDate',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getInternshipReturnsInitialValueForBoolean() {
		$this->assertSame(
			FALSE,
			$this->subject->getInternship()
		);
	}

	/**
	 * @test
	 */
	public function setInternshipForBooleanSetsInternship() {
		$this->subject->setInternship(TRUE);

		$this->assertAttributeEquals(
			TRUE,
			'internship',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getStudentReturnsInitialValueForBoolean() {
		$this->assertSame(
			FALSE,
			$this->subject->getStudent()
		);
	}

	/**
	 * @test
	 */
	public function setStudentForBooleanSetsStudent() {
		$this->subject->setStudent(TRUE);

		$this->assertAttributeEquals(
			TRUE,
			'student',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCategoriesReturnsInitialValueForCategory() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getCategories()
		);
	}

	/**
	 * @test
	 */
	public function setCategoriesForObjectStorageContainingCategorySetsCategories() {
		$category = new \Libeo\LboJobs\Domain\Model\Category();
		$objectStorageHoldingExactlyOneCategories = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneCategories->attach($category);
		$this->subject->setCategories($objectStorageHoldingExactlyOneCategories);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneCategories,
			'categories',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addCategoryToObjectStorageHoldingCategories() {
		$category = new \Libeo\LboJobs\Domain\Model\Category();
		$categoriesObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$categoriesObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($category));
		$this->inject($this->subject, 'categories', $categoriesObjectStorageMock);

		$this->subject->addCategory($category);
	}

	/**
	 * @test
	 */
	public function removeCategoryFromObjectStorageHoldingCategories() {
		$category = new \Libeo\LboJobs\Domain\Model\Category();
		$categoriesObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$categoriesObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($category));
		$this->inject($this->subject, 'categories', $categoriesObjectStorageMock);

		$this->subject->removeCategory($category);

	}
}
