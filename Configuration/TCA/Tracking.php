<?php

/*
 *  DEKRA Media Beacons
 *  © 2016 DEKRA Media GmbH
 */

if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$TCA['tx_bcms_domain_model_tracking'] = array(
	'ctrl' => $TCA['tx_bcms_domain_model_tracking']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'crdate, beacon, device, name, mode',
	),
	'types' => array(
		'1' => array('showitem' => 'beacon, device, name, mode'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'crdate' => array(
			'exclude' => 0,
			'label' => '',
			'config' => array(
				'type' => 'passthrough',
			),
		),
		'beacon' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:bcms/Resources/Private/Language/locallang_db.xlf:db.tracking.beacon',
			'config' => array(
				'type' => 'group',
				'internal_type' => 'db',
				'allowed' => 'tx_bcms_domain_model_beacon',
				'foreign_table' => 'tx_bcms_domain_model_beacon',
				'minitems' => 0,
				'maxitems' => 1,
				'size' => 1
			),
		),
		'device' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:bcms/Resources/Private/Language/locallang_db.xlf:db.tracking.device',
			'config' => array(
				'type' => 'input',
				'size' => 40,
				'eval' => 'trim'
			),
		),
		'name' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:bcms/Resources/Private/Language/locallang_db.xlf:db.tracking.name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'mode' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:bcms/Resources/Private/Language/locallang_db.xlf:db.tracking.mode',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('LLL:EXT:bcms/Resources/Private/Language/locallang_db.xlf:db.tracking.mode.0', 0),
					array('LLL:EXT:bcms/Resources/Private/Language/locallang_db.xlf:db.tracking.mode.1', 1),
					array('LLL:EXT:bcms/Resources/Private/Language/locallang_db.xlf:db.tracking.mode.2', 2)
				)
			),
		),
	)
);
?>