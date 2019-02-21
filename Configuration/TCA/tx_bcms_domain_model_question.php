<?php

/*
 *  DEKRA Media Beacons
 *  © 2016 DEKRA Media GmbH
 */

if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}


$GLOBALS['TCA']['tx_bcms_domain_model_question'] = array(
	'ctrl' => array(
		'title' => 'LLL:EXT:bcms/Resources/Private/Language/locallang_db.xlf:db.question',
		'label' => 'question',
		'dividers2tabs' => TRUE,
		'rootLevel' => -1,
		'crdate' => 'crdate',
		// 'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/beacon.png'
	),
	'interface' => array(
		'showRecordFieldList' => 'comprehensiontest, choices, question',
	),
	'types' => array(
		'1' => array('showitem' => 'comprehensiontest, question, choices'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'comprehensiontest' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:bcms/Resources/Private/Language/locallang_db.xlf:db.question.comprehensiontest',
			'config' => array(
				'type' => 'group',
				'allowed' => 'tx_bcms_domain_model_comprehensiontest',
				'foreign_table' => 'tx_bcms_domain_model_comprehensiontest',
				'internal_type' => 'db',
				'maxitems' => 1,
				'minitems' => 1,
				'size' => 1
			),
		),
		'question' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:bcms/Resources/Private/Language/locallang_db.xlf:db.question.question',
			'config' => array(
				'type' => 'text',
			),
		),
		'choices' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:bcms/Resources/Private/Language/locallang_db.xlf:db.question.choices',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_bcms_domain_model_choice',
				'foreign_field' => 'question',
				'maxitems' => 1000,
				'minitems' => 1,
			),
		),
	),
);
