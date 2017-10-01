<?php

namespace Modules\Calendar;

class Calendar {
    
    protected $events;
    
    public function __construct(){
        $this->events = [];
    }
    
    public function addEvent(\Modules\Event\Event $event){
        $this->events[] = $event;   
        return true;
    }
    
    public function getEvents(){
        return $this->events;
    }
    
}
