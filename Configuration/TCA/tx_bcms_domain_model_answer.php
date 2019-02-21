<?php

/*
 *  DEKRA Media Beacons
 *  © 2016 DEKRA Media GmbH
 */

if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}


$GLOBALS['TCA']['tx_bcms_domain_model_answer'] = array(
	'ctrl' => array(
		'title' => 'LLL:EXT:bcms/Resources/Private/Language/locallang_db.xlf:db.answer',
		'label' => 'uid',
		'dividers2tabs' => TRUE,
		'rootLevel' => -1,
		'crdate' => 'crdate',
		// 'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/beacon.png'
	),
	'interface' => array(
		'showRecordFieldList' => 'question, choices, user, correct',
	),
	'types' => array(
		'1' => array('showitem' => 'question, choices, user, correct'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'question' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:bcms/Resources/Private/Language/locallang_db.xlf:db.answer.question',
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
		'choices' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:bcms/Resources/Private/Language/locallang_db.xlf:db.answer.choices',
			'config' => array(
				'type' => 'group',
				'allowed' => 'tx_bcms_domain_model_choice',
				'foreign_table' => 'tx_bcms_domain_model_choice',
				'internal_type' => 'db',
				'maxitems' => 10000,
				'minitems' => 0,
				'size' => 5,
				'MM' => 'tx_bcms_mm_answer_choices'
			),
		),
		'user' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:bcms/Resources/Private/Language/locallang_db.xlf:db.answer.user',
			'config' => array(
				'type' => 'group',
				'allowed' => 'fe_users',
				'foreign_table' => 'fe_users',
				'internal_type' => 'db',
				'maxitems' => 1,
				'minitems' => 0,
				'size' => 1
			),
		),
		'correct' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:bcms/Resources/Private/Language/locallang_db.xlf:db.beacon.answer.correct',
			'config' => array(
				'type' => 'check',
			),
		),
	),
);
