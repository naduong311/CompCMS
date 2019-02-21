<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "bcms"
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'DEKRA Media Beacons NEU',
	'description' => 'Beacon Administration',
	'category' => 'plugin',
	'author' => 'Stefan Canis',
	'author_email' => 'support@dekra-media.de',
	'author_company' => 'DEKRA Media GmbH',
	'shy' => '',
	'priority' => 'top',
	'module' => '',
	'state' => 'experimental',
	'internal' => '',
	'uploadfolder' => false,
	'createDirs' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '0.0.1',
	'constraints' => array(
		'depends' => array(
			'extbase' => '6.2.0-0.0.0',
			'fluid' => '6.2.0-0.0.0',
			'typo3' => '6.2-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);

?>