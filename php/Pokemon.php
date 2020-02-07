<?php
class Pokemon {
   private $name;
   private $life;
   private $atak;
   private $avatar;


   public
   function __construct($nameP, $lifeP, $atakP, $avatarP) {
      $this->nom = $nameP;
      $this->vie = $lifeP;
      $this->atak = $atakP;
      $this->avatar = $avatarP;
   }

   public
   function getLife() {
      return $this->life;
   }
   public
   function getAtak() {
      return $this->atak;
   }
   public
   function getName() {
      return $this->name;
   }
   public
   function getAvatar() {
      return $this->avatar;
   }
   public
   function setLife() {
      return $this->life;
   }
   public
   function setAtak() {
      return $this->atak;
   }
   public
   function setName() {
      return $this->name;
   }
   public
   function setAvatar() {
      return $this->avatar;
   }

}