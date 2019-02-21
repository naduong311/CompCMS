<?php
/**
 * Created by PhpStorm.
 * User: stefancanis
 * Date: 12.08.2016
 * Time: 16:00
 */

namespace Dekramedia\Bcms\Domain\Model;


class Tracking extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * Tracking mode: Beacon was noticed (shown in list, possibly with notification)
	 */
	const MODE_NOTICED = 1;
	/**
	 * Tracking mode: Beacon data was fetched from server
	 */
	const MODE_DATA_FETCHED = 2;

	/**
	 * Timestamp of the beacon encounter
	 * @var int
	 */
	protected $crdate;

	/**
	 * Beacon encountered
	 * @var \Dekramedia\Bcms\Domain\Model\Beacon
	 */
	protected $beacon;

	/**
	 * Device ID of the mobile device encountering the beacon
	 * @var string
	 */
	protected $device;

	/**
	 * Username (self assigned) of the user encountering the beacon
	 * @var string
	 */
	protected $name;

	/**
	 * Encounter mode: Noticed or Data Fetched
	 * @var int
	 */
	protected $mode;

	/**
	 * @return int
	 */
	public function getCrdate() {
		return $this->crdate;
	}

	/**
	 * @param int $crdate
	 */
	public function setCrdate($crdate) {
		$this->crdate = $crdate;
	}

	/**
	 * @return \Dekramedia\Bcms\Domain\Model\Beacon
	 */
	public function getBeacon() {
		return $this->beacon;
	}

	/**
	 * @param \Dekramedia\Bcms\Domain\Model\Beacon $beacon
	 */
	public function setBeacon($beacon) {
		$this->beacon = $beacon;
	}

	/**
	 * @return string
	 */
	public function getDevice() {
		return $this->device;
	}

	/**
	 * @param string $device
	 */
	public function setDevice($device) {
		$this->device = $device;
	}

	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * @return int
	 */
	public function getMode() {
		return $this->mode;
	}

	/**
	 * @param int $mode
	 */
	public function setMode($mode) {
		$this->mode = $mode;
	}



}