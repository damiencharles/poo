<?php
// class enfant

class Archer extends Character
{
    //nouvelle propriété
    public $power;
    //on utilise la méthode et les propriétés du parent
    public function __construct($nom, $cri_de_guerre, int $pouvoir)
    {
        parent::__construct($nom, $cri_de_guerre);
        $this->power = $pouvoir;
    }

    public function rangeAttack($target)
    {
        $target->hp -= $this->power;
    }
}