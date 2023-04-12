<?php

class AdModel {
    private $id;
    private $title;
    private $userId;
    private $userName;
    
    public function __construct($id, $title,$userId) {
      $this->id = $id;
      $this->title = $title;
      $this->userId = $userId;
    }

    public function getId()
    {
      return $this->id;
    }
  
    public function getTitle()
    {
      return $this->title;
    }
  
    public function getUserId()
    {
      return $this->userId;
    }

    public function setUserName($userName)
    {
      $this->userName = $userName;
    }
    public function getUserName()
    {
      return $this->userName;
    }
    

    
  }

?>