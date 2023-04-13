<?php
//Represents an advertisement object.
class AdModel
{

  //The ID of the advertisement.
  private $id;

  //The title of the advertisement.
  private $title;

  //The ID of the user who posted the advertisement.
  private $userId;

  //The name of the user who posted the advertisement.
  private $userName;



  /**
   * Creates a new advertisement object.
   *
   * @param int $id The ID of the advertisement.
   * @param string $title The title of the advertisement.
   * @param int $userId The ID of the user who posted the advertisement.
   */
  public function __construct($id, $title, $userId)
  {
    $this->id = $id;
    $this->title = $title;
    $this->userId = $userId;
  }


  /**
   * Gets the ID of the advertisement.
   *
   * @return int The ID of the advertisement.
   */
  public function getId()
  {
    return $this->id;
  }


  /**
   * Gets the title of the advertisement.
   *
   * @return string The title of the advertisement.
   */
  public function getTitle()
  {
    return $this->title;
  }


  /**
   * Gets the ID of the user who posted the advertisement.
   *
   * @return int The ID of the user who posted the advertisement.
   */
  public function getUserId()
  {
    return $this->userId;
  }


  /**
   * Sets the name of the user who posted the advertisement.
   *
   * @param string|null $userName The name of the user who posted the advertisement.
   */
  public function setUserName($userName)
  {
    $this->userName = $userName;
  }


  /**
   * Gets the name of the user who posted the advertisement.
   *
   * @return string|null The name of the user who posted the advertisement.
   */
  public function getUserName()
  {
    return $this->userName;
  }



}

?>