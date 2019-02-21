<?php
/**
 * Created by PhpStorm.
 * User: stefancanis
 * Date: 08.08.2016
 * Time: 14:03
 */

namespace Dekramedia\Bcms\Domain\Model;

use TYPO3\CMS\Core\Tests\BaseTestCase;

class ComprehensionTest extends BaseTestCase{

   /**
    * @test
    */
   public function anInstanceOfTheComprehensionCanBeConstructed()
   {
      $comprehension = new Dekramedia\Bcms\Domain\Model\Comprehension('Name');
      $this->assertEquals('Name', $comprehension->getName());
   }
}