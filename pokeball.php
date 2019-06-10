<?php 

class Pokeball
{
    public function capture($target) {
        $capture = (($max_life - $life) / $max_life) * (1 + ($lvl_pokeball - $lvl_pokemon) / 25);
        return $capture;
    }
    
}

