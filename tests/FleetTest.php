<?php
if (! class_exists('PHPUnit_Framework_TestCase')) {
    class_alias('PHPUnit\Framework\TestCase', 'PHPUnit_Framework_TestCase');
}
class FleetTest extends PHPUnit_Framework_TestCase
{
    private $CI;
    private $airplanes;
    private $valid_airplanes;
    const MAX_FLEET_COST = 100000000;

    public function setUp()
    {
        $this->CI = &get_instance();
        $this->airplanes = new Airplanes;
        $response = file_get_contents('http://wacky.jlparry.com/info/airplanes');
        $this->valid_airplanes = json_decode($response);
    }

    /**
     * Checks for max cost of fleet
     */
    function testCapitalOutlay()
    {
        $total = 0;
        foreach($this->airplanes->all() as $airplane) {
            $total += $airplane->price;
        }
        $this->assertLessThan(self::MAX_FLEET_COST,$total, "fleet costs more than 10 million");
    }

    /**
     * Makes sure plane info matches the info for the provided list of planes
     */
    function testValidAirplanes()
    {
        $invalid = 0;
        foreach($this->airplanes->all() as $airplane) {
            $found = false;
            foreach($this->valid_airplanes as $valid_airplane) {
                if(strtolower($airplane->manufacturer) == strtolower($valid_airplane->manufacturer)
                    && strtolower($airplane->model) == strtolower($valid_airplane->model)
                    && $airplane->price == $valid_airplane->price
                    && $airplane->seats == $valid_airplane->seats
                    && $airplane->reach == $valid_airplane->reach
                    && $airplane->cruise == $valid_airplane->cruise
                    && $airplane->takeoff == $valid_airplane->takeoff
                    && $airplane->hourly == $valid_airplane->hourly) {
                    $found = true;
                }
            }
            if(!$found) {
                $invalid++;
            }
        }
        $this->assertEquals(0, $invalid, "Improper airplane in fleet");
    }
}