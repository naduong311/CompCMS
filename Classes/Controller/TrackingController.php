<?php
/**
 * Created by PhpStorm.
 * User: stefancanis
 * Date: 12.08.2016
 * Time: 16:00
 */

namespace Dekramedia\Bcms\Controller;


class TrackingController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * @var \Dekramedia\Bcms\Domain\Repository\TrackingRepository
	 * @inject
	 */
	protected $trackingRepository;

	public function indexAction() {
		$trackingObjects = $this->trackingRepository->findAll();

		$this->view->assign('trackingObjects', $trackingObjects);
	}

	public function analyticsAction() {
		$data = array(
			'numTrackingEvents' => $this->trackingRepository->findAll()->count(),
			'numNoticeEvents' => $this->trackingRepository->findByMode(\Dekramedia\Bcms\Domain\Model\Tracking::MODE_NOTICED)->count(),
			'numDataFetchEvents' => $this->trackingRepository->findByMode(\Dekramedia\Bcms\Domain\Model\Tracking::MODE_DATA_FETCHED)->count(),
			'numDistinctDevices' => $this->trackingRepository->getNumberOfDevices(),
			'numDistinctUsers' => $this->trackingRepository->getNumberOfUsers(false),
			'beaconStatistics' => $this->trackingRepository->getBeaconStatistics(),
		);

		$this->view->assign('data', $data);
	}

}