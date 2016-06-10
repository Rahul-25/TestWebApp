<?php
	
	require_once 'person.php';
	
	class personTest extends PHPUnit_Framework_TestCase{
		
		public $test;
		
		public function setUp(){
			$this->test = new Person("Rahul");
		}
		
		public function testName(){
			$this->assertTrue($this->test->getName() == "Rahul");
		}
	}
	
?>