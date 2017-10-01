<?php

require 'Spotify.php';


class Player {
    
    use Spotify;        
    
    public function showPlayList(){
        var_dump($this->getSongs());
    }         
    
    
}
