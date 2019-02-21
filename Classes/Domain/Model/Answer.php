<?php
/**
 * Created by PhpStorm.
 * User: stefancanis
 * Date: 09.01.2018
 * Time: 16:03
 */

namespace Dekramedia\Bcms\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use \TYPO3\CMS\Extbase\Persistence\ObjectStorage;

class Answer extends AbstractEntity {

	/**
	 * @var \Dekramedia\Bcms\Domain\Model\Question
	 */
	protected $question;

	/**
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Dekramedia\Bcms\Domain\Model\Choice>
	 */
	protected $choices;

	public function __construct() {
		$this->choices = new ObjectStorage();
	}

	/**
	 * @return \Dekramedia\Bcms\Domain\Model\Question
	 */
	public function getQuestion() {
		return $this->question;
	}

	/**
	 * @param \Dekramedia\Bcms\Domain\Model\Question $question
	 */
	public function setQuestion($question) {
		$this->question = $question;
	}

	/**
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Dekramedia\Bcms\Domain\Model\Choice>
	 */
	public function getChoices() {
		return $this->choices;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Dekramedia\Bcms\Domain\Model\Choice> $choices
	 */
	public function setChoices($choices) {
		$this->choices = $choices;
	}


	/**
	 * @param \Dekramedia\Bcms\Domain\Model\Choice $choice
	 */
	public function addChoice($choice) {
		$this->choices->attach($choice);
	}


	/**
	 * @param \Dekramedia\Bcms\Domain\Model\Choice $choice
	 */
	public function removeChoice($choice) {
		$this->choices->detach($choice);
	}



}