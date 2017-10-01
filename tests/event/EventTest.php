<?php

use PHPUnit\Framework\TestCase;

require "Modules/Event/Event.php";

class EventTest extends TestCase{
        
    
    public function setUp() {
        parent::setUp();
        $this->event = new \Modules\Event\Event();                
    }
    
    public function testSetName(){
        $this->assertTrue($this->event->setName("Wyjscie do kina"));
        $this->assertFalse($this->event->setName(120393));
        $this->assertFalse($this->event->setName(""));
    }
    public function testSetDate(){
        $this->assertFalse($this->event->setDate("Wyjscie do kina"));
        $this->assertFalse($this->event->setDate(120393));
        $this->assertTrue($this->event->setDate("2017-10-01"));
    }
    public function testSetUser(){
        $user = new \Modules\User\User();        
        $user->setLogin("Wojtek123");
        $this->assertTrue($this->event->setUser($user));               
    }
    
    
}
