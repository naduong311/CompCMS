<?php
/**
 * Created by PhpStorm.
 * User: stefancanis
 * Date: 08.08.2016
 * Time: 14:06
 */

namespace Dekramedia\Bcms\Domain\Repository;


use Dekramedia\Bcms\Domain\Model\Beacon;
use TYPO3\CMS\Extbase\Persistence\Repository;

class BeaconRepository extends Repository {

	/**
	 * @param $uuid
	 * @param $major
	 * @param $minor
	 * @return Beacon
	 */
	public function findByIdentification($uuid, $major, $minor) {
		$query = $this->createQuery();
		$constraints = array(
			$query->equals('uuid', $uuid, false),
			$query->equals('major', $major),
			$query->equals('minor', $minor)
		);
		$query->matching($query->logicalAnd($constraints));
		return $query->execute()->getFirst();
	}

}