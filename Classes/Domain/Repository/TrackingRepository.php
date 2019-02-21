<?php
/**
 * Created by PhpStorm.
 * User: stefancanis
 * Date: 12.08.2016
 * Time: 16:08
 */

namespace Dekramedia\Bcms\Domain\Repository;


class TrackingRepository extends \TYPO3\CMS\Extbase\Persistence\Repository {

	/**
	Return 
	 * @return int
	 */
	public function getNumberOfDevices() {
		$result = $GLOBALS['TYPO3_DB']->sql_query('SELECT DISTINCT device FROM tx_bcms_domain_model_tracking');
		return $GLOBALS['TYPO3_DB']->sql_num_rows($result);
	}

	/**
	 * @param boolean $separateByDevice whether to separate users with the same name but different devices
	 * @return int
	 */
	public function getNumberOfUsers($separateByDevice = false) {
		if ($separateByDevice) {
			$query = 'SELECT DISTINCT name, device FROM tx_bcms_domain_model_tracking';
		} else {
			$query = 'SELECT DISTINCT name FROM tx_bcms_domain_model_tracking';
		}
		$result = $GLOBALS['TYPO3_DB']->sql_query($query);
		return $GLOBALS['TYPO3_DB']->sql_num_rows($result);
	}

	public function getBeaconStatistics() {
		$beaconRepository = $this->objectManager->get('Dekramedia\Bcms\Domain\Repository\BeaconRepository');
		$allBeacons = $beaconRepository->findAll();
		$data = array();
		foreach ($allBeacons as $beacon) {
			$entry = array(
				'beacon' => $beacon,
				'events' => array(
					'all' => $this->getNumEventsByBeacon($beacon),
					'notice' => $this->getNumEventsByBeacon($beacon, \Dekramedia\Bcms\Domain\Model\Tracking::MODE_NOTICED),
					'dataFetch' => $this->getNumEventsByBeacon($beacon, \Dekramedia\Bcms\Domain\Model\Tracking::MODE_DATA_FETCHED)
				)
			);
			$data[] = $entry;
		}
		return $data;
	}

	public function getNumEventsByBeacon($beacon, $eventType = null) {
		$constraints = array(
			sprintf('beacon = %d', $beacon->getUid())
		);
		if ($eventType !== null) {
			$constraints[] = sprintf('mode = %d', $eventType);
		}
		$result = $GLOBALS['TYPO3_DB']->exec_SELECTquery('*', 'tx_bcms_domain_model_tracking', implode(' AND ', $constraints));
		return $GLOBALS['TYPO3_DB']->sql_num_rows($result);
	}
}