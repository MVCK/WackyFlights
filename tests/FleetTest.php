<?php
if (! class_exists('PHPUnit_Framework_TestCase')) {
    class_alias('PHPUnit\Framework\TestCase', 'PHPUnit_Framework_TestCase');
}
class FleetTest extends PHPUnit_Framework_TestCase
{
    private $CI;
    private $airplanes;
    const MAX_FLEET_COST = 100000000;

    public function setUp()
    {
        $this->CI = &get_instance();
        $this->airplanes = new Airplanes;
    }
    function testCapitalOutlay()
    {
        $total = 0;
        foreach ($this->airplanes->all() as $airplane) {
            $total += $airplane->price;
        }
        $this->assertLessThan(self::MAX_FLEET_COST,$total, "fleet costs more than 10 million");
    }
}