 <?php
 require_once "PHPUnit/Framework/TestCase.php";
 
 class sample extends PHPUnit_Framework_TestCase
 {
	 //test penambahan...
	 public function testTambahBarang()
	 {
	 	$this->assertEquals(11,5+6);
	 }
	 //test pengurangan...
	 public function testPenguranganBarang()
	 {
	 	$this->assertEquals(-1,5-6);
	 }
 }
?>