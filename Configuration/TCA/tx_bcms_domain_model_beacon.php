<?php

/*
 *  DEKRA Media Beacons
 *  © 2016 DEKRA Media GmbH
 */

if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}


$GLOBALS['TCA']['tx_bcms_domain_model_beacon'] = array(
	'ctrl' => array(
		'title' => 'LLL:EXT:bcms/Resources/Private/Language/locallang_db.xlf:db.beacon',
		'label' => 'name',
		'label_alt' => 'name, uuid, major, minor',
		'label_alt_force' => true,
		'searchFields' => 'description, uuid, notification_text',
		'dividers2tabs' => TRUE,
		'rootLevel' => -1,
		'crdate' => 'crdate',
		'tstamp' => 'tstamp',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden'
		),
		// 'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/beacon.png'
	),
	'interface' => array(
		'showRecordFieldList' => 'name, hidden, uuid, major, minor, notification_text, description, page',
	),
	'types' => array(
		'1' => array('showitem' => 'name, hidden, uuid, major, minor, notification_text, description, page'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'name' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:bcms/Resources/Private/Language/locallang_db.xlf:db.beacon.name',
			'config' => array(
				'type' => 'input',
				'size' => 40,
				'eval' => 'trim,required'
			),
		),
		'hidden' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:bcms/Resources/Private/Language/locallang_db.xlf:db.beacon.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'uuid' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:bcms/Resources/Private/Language/locallang_db.xlf:db.beacon.uuid',
			'config' => array(
				'type' => 'input',
				'size' => 40,
				'eval' => 'trim,required'
			),
		),
		'major' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:bcms/Resources/Private/Language/locallang_db.xlf:db.beacon.major',
			'config' => array(
				'type' => 'input',
				'size' => 6,
				'eval' => 'int,required'
			),
		),
		'minor' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:bcms/Resources/Private/Language/locallang_db.xlf:db.beacon.minor',
			'config' => array(
				'type' => 'input',
				'size' => 6,
				'eval' => 'int,required'
			),
		),
		'notification_text' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:bcms/Resources/Private/Language/locallang_db.xlf:db.beacon.notification_text',
			'config' => array(
				'type' => 'input',
				'size' => 40,
				'max' => '255',
				'eval' => 'trim'
			),
		),
		'description' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:bcms/Resources/Private/Language/locallang_db.xlf:db.beacon.description',
			'config' => array(
				'type' => 'input',
				'size' => 40,
				'max' => '255',
				'eval' => 'trim'
			),
		),
		'page' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:bcms/Resources/Private/Language/locallang_db.xlf:db.beacon.page',
			'config' => array(
				'type' => 'group',
				'internal_type' => 'db',
				'allowed' => 'pages',
				'foreign_table' => 'pages',
				'size' => 1,
				'maxitems' => 1,
				'minitems' => 0,
			),
		),
	),
);
