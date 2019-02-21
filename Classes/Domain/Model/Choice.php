<?php
/**
 * Created by PhpStorm.
 * User: stefancanis
 * Date: 09.01.2018
 * Time: 16:03
 */

namespace Dekramedia\Bcms\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Choice extends AbstractEntity {

	/**
	 * @var string
	 */
	protected $content;

	/**
	 * @return string
	 */
	public function getContent() {
		return $this->content;
	}

	/**
	 * @param string $content
	 */
	public function setContent($content) {
		$this->content = $content;
	}

}