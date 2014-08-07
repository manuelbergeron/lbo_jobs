<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Libeo.' . $_EXTKEY,
	'Student',
	array(
		'Jobs' => 'listStudent',
		
	),
	// non-cacheable actions
	array(
		'Jobs' => '',
		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Libeo.' . $_EXTKEY,
	'Jobs',
	array(
		'Jobs' => 'list',
		
	),
	// non-cacheable actions
	array(
		'Jobs' => 'list',
		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Libeo.' . $_EXTKEY,
	'Detail',
	array(
		'Jobs' => 'show',
		
	),
	// non-cacheable actions
	array(
		'Jobs' => '',
		
	)
);
