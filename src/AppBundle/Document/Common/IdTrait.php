<?php

namespace AppBundle\Entity\Common;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
* Class IdTrait
*/
trait IdTrait
{
  /**
  * @var int
  * @MongoDB\Id
  */
  private $id;

  /**
  * Get Id
  *
  * @return int
  */
  public function getId()
  {
    return $this->id;
  }
}
