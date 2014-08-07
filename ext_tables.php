<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Student',
	'Liste d\'emplois étudiants et stages'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Jobs',
	'Liste d\'emplois'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Detail',
	'Détail de l\'emploi'
);

$extensionName = t3lib_div::underscoredToUpperCamelCase($_EXTKEY);
$jobsPluginSignature = strtolower($extensionName) . '_jobs';
$detailPluginSignature = strtolower($extensionName) . '_detail';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Emplois');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_lbojobs_domain_model_jobs', 'EXT:lbo_jobs/Resources/Private/Language/locallang_csh_tx_lbojobs_domain_model_jobs.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_lbojobs_domain_model_jobs');
$GLOBALS['TCA']['tx_lbojobs_domain_model_jobs'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:lbo_jobs/Resources/Private/Language/locallang_db.xlf:tx_lbojobs_domain_model_jobs',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'title,description,requirements,url,area,type,quantity,salary,limit_date,internship,student,categories,external',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Jobs.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_lbojobs_domain_model_jobs.gif'
	),
);


//Ajout d'un flexform pour le plugin de list
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$jobsPluginSignature] = 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue($jobsPluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_jobs.xml');

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$detailPluginSignature] = 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue($detailPluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_detail.xml');