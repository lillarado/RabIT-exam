<?php


// Represents an user object.
class UserModel
{

  //The ID of the user.
  private $id;

  //The name of the user
  private $name;


    /**
   * Creates a new user object.
   *
   * @param int $id The ID of the user.
   * @param string $name The name of the user.
   */
  public function __construct($id, $name)
  {
    $this->id = $id;
    $this->name = $name;
  }


 /**
   * Gets the ID of the user.
   *
   * @return int The ID of the user.
   */
  public function getId()
  {
    return $this->id;
  }

   /**
   * Gets the name of the user.
   *
   * @return string The name of the user.
   */
  public function getName()
  {
    return $this->name;
  }


   /**
   * Sets the name of the user.
   *
   * @param string|null $name The name of the user who.
   */
  public function setName($name)
  {
    $this->name = $name;
  }






}

?>