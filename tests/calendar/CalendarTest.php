<?php

use PHPUnit\Framework\TestCase;

include 'Modules/Calendar/Calendar.php';

class CalendarTest extends TestCase{
    
    public function setUp() {
        parent::setUp();
        $this->calendar = new \Modules\Calendar\Calendar();   
        //
    }
    
    public function testAddEvent(){
        $event = new \Modules\Event\Event();
        $this->assertTrue($this->calendar->addEvent($event));        
    }
    
    public function testGetEvents(){
        $this->event = new \Modules\Event\Event();
        $this->event->setName("Wydarzenie roku");
        $this->event->setDate("2018-01-01");
        $this->calendar->addEvent($this->event);
        
        $events = $this->calendar->getEvents();
        $this->assertEquals($this->event, $events[0]);
    }
     
    
    
}
