<?php  

class Character
{
    //proprétés
    public $name;
    public $hp = 100; //points de vie
    private $warcry; 

    //methode -> fonction de constructeur
    public function __construct(string $nom, string $cri_de_guerre) //nom de l'instance
    {
        // on définit la propriété = valeur de la variable $
        $this->name = $nom;
        $this ->warcry = $cri_de_guerre;
    }
    //méthode -> renvoyer la valeur de la variable privée
    public function getWarcry()
    {
      return $this->warcry;
    }

}