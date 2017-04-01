<?php
// src/AppBundle/Entity/User.php
namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Validator\Constraints as Assert;
// use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
* @MongoDB\Document
*/
class User implements UserInterface
{
  /**
  * @MongoDB\Id
  */
  private $id;

  /**
  * @MongoDB\Field(type="string")
  * @Assert\NotBlank()
  * @Assert\Email()
  */
  private $email;

  /**
  * @MongoDB\Field(type="string")
  * @Assert\NotBlank()
  */
  private $username;

  /**
  * @Assert\NotBlank()
  * @Assert\Length(max=4096)
  */
  private $plainPassword;

  /**
  * The below length depends on the "algorithm" you use for encoding
  * the password, but this works well with bcrypt.
  *
  * @MongoDB\Field(type="string")
  */
  private $password;
  // other properties and methods

  public function getEmail()
  {
      return $this->email;
  }

  public function setEmail($email)
  {
      $this->email = $email;
  }

  public function getUsername()
  {
      return $this->username;
  }

  public function setUsername($username)
  {
      $this->username = $username;
  }

  public function getPlainPassword()
  {
      return $this->plainPassword;
  }

  public function setPlainPassword($password)
  {
      $this->plainPassword = $password;
  }

  public function getPassword()
  {
      return $this->password;
  }

  public function setPassword($password)
  {
      $this->password = $password;
  }

  public function getSalt()
  {
      // The bcrypt algorithm doesn't require a separate salt.
      // You *may* need a real salt if you choose a different encoder.
      return null;
  }

  // other methods, including security methods like getRoles()

  public function getRoles()
  {
      return ['ROLE_USER'];
  }

  public function eraseCredentials()
  {
  }

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }
}
