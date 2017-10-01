<?php

trait Spotify{
    
    private $songs;
    
    public function getSongs(){
        return $this->songs;
    }
    
    public function addSong($song){
        $this->songs[] = $song;
    }
    
    #abstract public function setUser();
    
}