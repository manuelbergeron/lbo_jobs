<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_lbojobs_domain_model_jobs'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_lbojobs_domain_model_jobs']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, description, requirements, url, area, type, quantity, salary, limit_date, external, internship, student, categories',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, title, description;;;richtext:rte_transform[mode=ts_links], requirements;;;richtext:rte_transform[mode=ts_links], url, area, type, quantity, salary, limit_date, external, internship, student, categories, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
	
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_lbojobs_domain_model_jobs',
				'foreign_table_where' => 'AND tx_lbojobs_domain_model_jobs.pid=###CURRENT_PID### AND tx_lbojobs_domain_model_jobs.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),

		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
	
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
        'crdate' => Array (
            'exclude' => 0,
            'label' => 'Creation date',
            'config' => Array (
                'type' => 'none',
                'format' => 'date',
                'eval' => 'date',
            )
        ),
		'title' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lbo_jobs/Resources/Private/Language/locallang_db.xlf:tx_lbojobs_domain_model_jobs.title',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'description' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lbo_jobs/Resources/Private/Language/locallang_db.xlf:tx_lbojobs_domain_model_jobs.description',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'wizards' => array(
					'RTE' => array(
						'icon' => 'wizard_rte2.gif',
						'notNewRecords'=> 1,
						'RTEonly' => 1,
						'script' => 'wizard_rte.php',
						'title' => 'LLL:EXT:cms/locallang_ttc.xlf:bodytext.W.RTE',
						'type' => 'script'
					)
				)
			),
		),
		'requirements' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lbo_jobs/Resources/Private/Language/locallang_db.xlf:tx_lbojobs_domain_model_jobs.requirements',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'wizards' => array(
					'RTE' => array(
						'icon' => 'wizard_rte2.gif',
						'notNewRecords'=> 1,
						'RTEonly' => 1,
						'script' => 'wizard_rte.php',
						'title' => 'LLL:EXT:cms/locallang_ttc.xlf:bodytext.W.RTE',
						'type' => 'script'
					)
				)
			),
		),
		'url' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lbo_jobs/Resources/Private/Language/locallang_db.xlf:tx_lbojobs_domain_model_jobs.url',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'area' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lbo_jobs/Resources/Private/Language/locallang_db.xlf:tx_lbojobs_domain_model_jobs.area',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'type' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lbo_jobs/Resources/Private/Language/locallang_db.xlf:tx_lbojobs_domain_model_jobs.type',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('LLL:EXT:lbo_jobs/Resources/Private/Language/locallang_db.xlf:tx_lbojobs_domain_model_jobs.type.regular', 0),
                    array('LLL:EXT:lbo_jobs/Resources/Private/Language/locallang_db.xlf:tx_lbojobs_domain_model_jobs.type.temporary', 1),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'quantity' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lbo_jobs/Resources/Private/Language/locallang_db.xlf:tx_lbojobs_domain_model_jobs.quantity',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'salary' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lbo_jobs/Resources/Private/Language/locallang_db.xlf:tx_lbojobs_domain_model_jobs.salary',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'limit_date' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lbo_jobs/Resources/Private/Language/locallang_db.xlf:tx_lbojobs_domain_model_jobs.limit_date',
			'config' => array(
				'dbType' => 'date',
				'type' => 'input',
				'size' => 7,
				'eval' => 'date',
				'checkbox' => 0,
				'default' => '0000-00-00'
			),
		),
        'external' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:lbo_jobs/Resources/Private/Language/locallang_db.xlf:tx_lbojobs_domain_model_jobs.external',
            'config' => array(
                'type' => 'check',
                'default' => 0
            )
        ),
		'internship' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lbo_jobs/Resources/Private/Language/locallang_db.xlf:tx_lbojobs_domain_model_jobs.internship',
			'config' => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'student' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lbo_jobs/Resources/Private/Language/locallang_db.xlf:tx_lbojobs_domain_model_jobs.student',
			'config' => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'categories' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lbo_jobs/Resources/Private/Language/locallang_db.xlf:tx_lbojobs_domain_model_jobs.categories',
			'config' => array(
				'type' => 'select',
                'renderMode' => 'tree',
                'treeConfig' => array(
                    'parentField' => 'parent',
                    'appearance' => array(
                        'showHeader' => TRUE,
                        'allowRecursiveMode' => TRUE,
                        'expandAll' => TRUE,
                        'maxLevels' => 99,
                    ),
                ),

                'MM_match_fields' => array(
                    'fieldname' => 'categories',
                    'tablenames' => 'tx_lbojobs_domain_model_jobs',
                ),
                'MM_opposite_field' => 'jobs',
				'foreign_table' => 'sys_category',
				'MM' => 'sys_category_record_mm',
				'size' => 10,
				'autoSizeMax' => 30,
				'maxitems' => 9999,
			),
		),
		
	),
);
