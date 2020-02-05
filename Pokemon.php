<?php
class Pokemon {
   private $name;
   private $life;
   private $atak;
   private $avatar;


   public
   function __construct($name, $lifeP, $atakP, $avatarP) {
      $this->nom = $name;
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
}