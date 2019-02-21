<?php
/**
 * Created by PhpStorm.
 * User: stefancanis
 * Date: 09.01.2018
 * Time: 16:03
 */

namespace Dekramedia\Bcms\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Comprehensiontest extends AbstractEntity {

	/**
	 * @var string
	 */
	protected $question;

	/**
	 * @return string
	 */
	public function getQuestion() {
		return $this->question;
	}

	/**
	 * @param string $question
	 */
	public function setQuestion($question) {
		$this->question = $question;
	}

}