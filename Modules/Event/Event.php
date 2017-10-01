<?php

namespace Modules\Event;

class Event {
    
    protected $name;
    protected $date;
    
    public function setName($name){
        if(strlen($name)>0 && is_string($name)){
            $this->name = $name;   
            return true;
        }        
        return false;
    }
    
    public function setDate($date){
        if(strlen($date)>0 && $this->validateDate($date)){
            $this->date = $date;
            return true;
        }
        return false;
    }
    
    public function setUser(\Modules\User\User $user){        
        $this->user = $user;
        return true;      
    }
    
    private function validateDate($date){
        $d = \DateTime::createFromFormat('Y-m-d', $date);
        if($d && $d->format('Y-m-d') == $date){
            $timestamp = strtotime(date("Y-m-d"));
            $dateTimestamp = strtotime($date);
            if($dateTimestamp >= $timestamp){
                return true;
            }
        }
        return false;
    }
    
}
