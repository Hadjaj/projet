<?php

namespace App\Service;

class JeuxService
{
    public function jeu(float $nombre, float $alea)
    {



        // on créé une clé reponse dans la variable data 
        // contenant gagné ou perdu !
        if ($alea == $nombre) {
            $data['reponse'] = "Gagné";
            return ($data['reponse']);
        } else {

            $data['reponse'] = "Perdu";
            return ($data['reponse']);
        }
    }
}
