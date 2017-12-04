<?php

 class sample extends PHPUnit_Framework_TestCase
 {
 //test penambahan...
 	public function testKurang($barang)
	 {
	 	$barang = $barang - 1;
	 	return $barang;
	 }
 }
?>