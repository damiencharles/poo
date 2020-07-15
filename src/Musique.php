<?php

class Musique
{
    //static pour acceder la propriété sans instancier la classe
    // n'appartient pas à un objet en particulier
    
    //public static $fx = "bruit de cor de chasse";
    private static $fx = "bruit de cor de chasse";

    //si private -> methode
    public static function getFx()
    {
        return self::$fx;
        //on ne peut pas utiliser $this
    }

}