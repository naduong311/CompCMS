<?php
/**
 * Created by PhpStorm.
 * User: stefancanis
 * Date: 12.08.2016
 * Time: 16:00
 */

namespace Dekramedia\Bcms\Controller;

use \TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
* 
*/
class ComprehensiontestController extends ActionController
{

	/**
	 * @var \Dekramedia\Bcms\Domain\Repository\QuestionRepository
	 * @inject
	 */
	protected $questionRepository;

	public function indexAction(){
		$questions = $this->questionRepository->findAll();
	 	$this->view->assign('questions', $questions);
	 	// $comprehensiontestQuestions = $this->comprehensiontestRepository->findAll();
	 	// $this->view->assign('comprehensiontestQuestions',$comprehensiontestQuestions)
	 }


}