<?php
use PHPUnit\Framework\TestCase;
class sampleTest extends PHPUnit_Framework_TestCase{
    public function testKurangData()
    {
        $kurangbarang = new \src\sample();
        $barang =$this->kurangbarang->testKurang(50);
        $this->assertEquals($barang, 49);
    }

}