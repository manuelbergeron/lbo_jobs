<?php
namespace Libeo\LboJobs\Tests\Unit\Controller;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 
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
 * Test case for class Libeo\LboJobs\Controller\JobsController.
 *
 */
class JobsControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \Libeo\LboJobs\Controller\JobsController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('Libeo\\LboJobs\\Controller\\JobsController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllJobssFromRepositoryAndAssignsThemToView() {

		$allJobss = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$jobsRepository = $this->getMock('Libeo\\LboJobs\\Domain\\Repository\\JobsRepository', array('findAll'), array(), '', FALSE);
		$jobsRepository->expects($this->once())->method('findAll')->will($this->returnValue($allJobss));
		$this->inject($this->subject, 'jobsRepository', $jobsRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('jobss', $allJobss);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenJobsToView() {
		$jobs = new \Libeo\LboJobs\Domain\Model\Jobs();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('jobs', $jobs);

		$this->subject->showAction($jobs);
	}
}
