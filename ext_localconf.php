<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
} //prevent of security reasons, that the PHP code can be called directly outside of TYPO3

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Dekramedia.Bcms',
	'administration',
	array(
		'Beacon' => 'list, show, new, create, edit, update, delete',
	),
	// non-cacheable actions
	array(
		'Beacon' => 'list, show, new, create, edit, update, delete',
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Dekramedia.Bcms',
	'tracking',
	array(
		'Tracking' => 'index',
	),
	// non-cacheable actions
	array(
		'Tracking' => 'index',
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Dekramedia.Bcms',
	'api',
	array(
		'Api' => 'index, notice, show'
	),
	// non-cacheable actions
	array(
		'Api' => 'index, notice, show'
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Dekramedia.Bcms', //Extension Key, vendorname.
	'ComprehensionTest', //name of plugin
	array(
		'Comprehensiontest' => 'index' //name of controller => associated action (indexAction lies in ComprehensiontestController)
	),
	// non-cacheable actions
	array(
		'Comprehensiontest' => 'index'
	)
);

?>