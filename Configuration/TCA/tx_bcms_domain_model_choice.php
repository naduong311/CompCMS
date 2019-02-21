<?php

/*
 *  DEKRA Media Beacons
 *  © 2016 DEKRA Media GmbH
 */

if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}


$GLOBALS['TCA']['tx_bcms_domain_model_choice'] = array(
	'ctrl' => array(
		'title' => 'LLL:EXT:bcms/Resources/Private/Language/locallang_db.xlf:db.choice',
		'label' => 'content',
		'dividers2tabs' => TRUE,
		'rootLevel' => -1,
		'crdate' => 'crdate',
		'hideTable' => 1
		// 'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/beacon.png'
	),
	'interface' => array(
		'showRecordFieldList' => 'question, content, correct',
	),
	'types' => array(
		'1' => array('showitem' => 'question, content, correct'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'question' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:bcms/Resources/Private/Language/locallang_db.xlf:db.choice.question',
			'config' => array(
				'type' => 'group',
				'allowed' => 'tx_bcms_domain_model_question',
				'foreign_table' => 'tx_bcms_domain_model_question',
				'internal_type' => 'db',
				'maxitems' => 1,
				'minitems' => 1,
				'size' => 1
			),
		),
		'content' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:bcms/Resources/Private/Language/locallang_db.xlf:db.choice.content',
			'config' => array(
				'type' => 'text',
			),
		),
		'correct' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:bcms/Resources/Private/Language/locallang_db.xlf:db.choice.correct',
			'config' => array(
				'type' => 'check',
			),
		),
	),
);
