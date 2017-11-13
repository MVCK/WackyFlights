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
    const AIRPLANE_DATA = '[ { "id": "avanti", "manufacturer": "Piaggo", "model": "Avanti II", "price": "7195", "seats": "8", "reach": "2797", "cruise": "589", "takeoff": "994", "hourly": "977" }, 
        { "id": "baron", "manufacturer": "Beechcraft", "model": "Baron", "price": "1350", "seats": "4", "reach": "1948", "cruise": "373", "takeoff": "701", "hourly": "340" }, 
        { "id": "caravan", "manufacturer": "Cessna", "model": "Grand Caravan EX", "price": "2300", "seats": "14", "reach": "1689", "cruise": "340", "takeoff": "660", "hourly": "389" }, 
        { "id": "citation", "manufacturer": "Cessna", "model": "Citation M2", "price": "3200", "seats": "7", "reach": "1550", "cruise": "748", "takeoff": "978", "hourly": "1122" }, 
        { "id": "kingair", "manufacturer": "Beechcraft", "model": "King Air C90", "price": "3900", "seats": "12", "reach": "2446", "cruise": "500", "takeoff": "1402", "hourly": "990" }, 
        { "id": "mustang", "manufacturer": "Cessna", "model": "Citation Mustang", "price": "2770", "seats": "4", "reach": "2130", "cruise": "630", "takeoff": "950", "hourly": "1015" }, 
        { "id": "pc12ng", "manufacturer": "Pilatus", "model": "PC-12 NG", "price": "3300", "seats": "9", "reach": "4147", "cruise": "500", "takeoff": "450", "hourly": "727" }, 
        { "id": "phenom100", "manufacturer": "Embraer", "model": "Phenom 100", "price": "2980", "seats": "4", "reach": "2148", "cruise": "704", "takeoff": "1036", "hourly": "926" } ]';

    public function setUp()
    {
        $this->CI = &get_instance();
        $this->airplanes = new Airplanes;
        $this->valid_airplanes = json_decode(self::AIRPLANE_DATA);
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