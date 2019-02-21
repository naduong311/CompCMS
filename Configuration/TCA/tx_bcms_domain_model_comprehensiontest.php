<?php

/*
 *  DEKRA Media Beacons
 *  © 2016 DEKRA Media GmbH
 */

if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}


$GLOBALS['TCA']['tx_bcms_domain_model_comprehensiontest'] = array(
	'ctrl' => array(
		'title' => 'LLL:EXT:bcms/Resources/Private/Language/locallang_db.xlf:db.comprehensiontest',
		'label' => 'uid',
		'dividers2tabs' => TRUE,
		'rootLevel' => -1,
		'crdate' => 'crdate',
		// 'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/beacon.png'
	),
	'interface' => array(
		'showRecordFieldList' => 'questions',
	),
	'types' => array(
		'1' => array('showitem' => 'questions'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'questions' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:bcms/Resources/Private/Language/locallang_db.xlf:db.comprehensiontest.questions',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_bcms_domain_model_question',
				'foreign_field' => 'comprehensiontest',
				'maxitems' => 1000,
				'minitems' => 1,
			),
		),
	),
);
