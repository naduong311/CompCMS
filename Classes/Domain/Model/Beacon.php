<?php
/**
 * Created by PhpStorm.
 * User: stefancanis
 * Date: 08.08.2016
 * Time: 14:03
 */

namespace Dekramedia\Bcms\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Beacon extends AbstractEntity {

	/**
	 * @var string
	 */
	protected $name;

	/**
	 * @var string
	 */
	protected $uuid;

	/**
	 * @var int
	 */
	protected $major;

	/**
	 * @var int
	 */
	protected $minor;

	/**
	 * @var string
	 */
	protected $notificationText;

	/**
	 * @var string
	 */
	protected $description;

	/**
	 * @var int
	 */
	protected $page;

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
	 * @return string
	 */
	public function getUuid() {
		return $this->uuid;
	}

	/**
	 * @param string $uuid
	 */
	public function setUuid($uuid) {
		$this->uuid = $uuid;
	}

	/**
	 * @return int
	 */
	public function getMajor() {
		return $this->major;
	}

	/**
	 * @param int $major
	 */
	public function setMajor($major) {
		$this->major = $major;
	}

	/**
	 * @return int
	 */
	public function getMinor() {
		return $this->minor;
	}

	/**
	 * @param int $minor
	 */
	public function setMinor($minor) {
		$this->minor = $minor;
	}

	/**
	 * @return string
	 */
	public function getNotificationText() {
		return $this->notificationText;
	}

	/**
	 * @param string $notificationText
	 */
	public function setNotificationText($notificationText) {
		$this->notificationText = $notificationText;
	}

	/**
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * @param string $description
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * @return int
	 */
	public function getPage() {
		return $this->page;
	}

	/**
	 * @param int $page
	 */
	public function setPage($page) {
		$this->page = $page;
	}

	public function getData() {
		return array(
			'name' => $this->getName(),
			'uuid' => $this->getUuid(),
			'major' => $this->getMajor(),
			'minor' => $this->getMinor(),
			'notificationText' => $this->getNotificationText(),
			'description' => $this->getDescription()
		);
	}

}