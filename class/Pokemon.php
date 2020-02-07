<?php

class Pokemon{

    private $name;
    private $description;
    private $life;
    private $atak;

    private $avatar; // Path to Image

    public function __construct(
        $name = 'Salameche',
        $description = 'crache du feu par le  ....',
        $avatar = 'img/placeholder.png'
        )
    {
        $this->name = $name;
        $this->description = $description;
        $this->avatar = $avatar;
    }

    public function getName(){
        return $this->name;
    }
    public function getDesc(){
        return $this->description;
    }
    public function getLife(){
        return $this->life;
    }
    public function getAtak(){
        return $this->atak;
    }

    public function getAvatar(){
        return $this->avatar;
    }

}