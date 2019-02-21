<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'Dekramedia.Bcms',
	'administration',
	'LLL:EXT:bcms/Resources/Private/Language/locallang_db.xlf:plugins.administration.title'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'Dekramedia.Bcms',
	'tracking',
	'Tracking'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'Dekramedia.Bcms',
	'ComprehensionTest',
	'ComprehensionTest'
);


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Beacon DB');

$TCA['tx_bcms_domain_model_tracking'] = array(
	'ctrl' => array(
		'hideTable' => true,
		'title' => 'LLL:EXT:bcms/Resources/Private/Language/locallang_db.xlf:db.tracking',
		'label' => 'uid',
		'label_alt' => 'device, name',
		'label_alt_force' => true,
		'searchFields' => 'device, name',
		'dividers2tabs' => TRUE,
		'rootLevel' => -1,
		'crdate' => 'crdate',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Tracking.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tracking.png'
	),
);

if (TYPO3_MODE === 'BE') {

	/**
	 * Registers the colors Backend Module
	 */
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'Dekramedia.' . $_EXTKEY,
		'tools',     // Make module a submodule of 'tools'
		'beacontracking',  // Submodule key
		'',                     // Position
		array(
			'Tracking' => 'index, analytics'
		),
		array(
			'access' => 'user,group',
			'icon'   => 'EXT:' . $_EXTKEY . '/ext_icon.png',
			'labels' => 'LLL:EXT:bcms/Resources/Private/Language/locallang_db.xlf:modules.tracking.title',
		)
	);

}
?>