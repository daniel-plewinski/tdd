<?php

use PHPUnit\Framework\TestCase;

include "Modules/User/User.php";

use Modules\User;

class UserTest extends TestCase {
     
    public function setUp() {
        parent::setUp();
        $this->user = new \Modules\User\User();
        $this->user->setLogin('administrator');
        $this->user->setPassword('Admin123');
    }
    
    public function testSetLogin(){        
        $this->assertFalse($this->user->setLogin(""));
        $this->assertFalse($this->user->setLogin("ASD"));
        $this->assertFalse($this->user->setLogin(12345));
        $this->assertTrue($this->user->setLogin("asdasd"));
    }
    
    public function testSetPassword(){
        $this->assertFalse($this->user->setPassword(""));
        $this->assertFalse($this->user->setPassword("ASD"));
        $this->assertFalse($this->user->setPassword(12345));
        $this->assertTrue($this->user->setPassword("asdasd"));
    }
    
    public function testGeters(){              
        $this->assertEquals($GLOBALS['username'],$this->user->getLogin());
        $this->assertEquals($GLOBALS['password'],$this->user->getPassword());
    }       
    
}
