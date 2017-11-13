<?php
/**
 * Created by PhpStorm.
 * User: Matthew
 * Date: 2017-11-12
 * Time: 7:34 PM
 */
if (! class_exists('PHPUnit_Framework_TestCase')) {
    class_alias('PHPUnit\Framework\TestCase', 'PHPUnit_Framework_TestCase');
}
class FlightsTest extends PHPUnit_Framework_TestCase
{
    private $CI;
    private $flights;
    private $valid_airports = array("YPK", "YCW", "ZMH", "YYF");

    public function setUp()
    {
        $this->CI = &get_instance();
        $this->flights = new Flights;
    }

    /**
     * Makes sure destination airports are valid.
     */
    function testValidDestinationAirports()
    {
        $invalid = 0;
        foreach ($this->flights->all() as $flight) {
            if (array_search($flight->departureAirport, $this->valid_airports) === false){
                $invalid++;
            }
        }
        $this->assertEquals(0, $invalid, "Improper departure airport");
    }

    /**
     * Makes sure arrival airports are valid
     */
    function testValidArrivalAirports()
    {
        $invalid = 0;
        foreach ($this->flights->all() as $flight) {
            if (array_search($flight->arrivalAirport, $this->valid_airports) === false){
                $invalid++;
            }
        }
        $this->assertEquals(0, $invalid, "Improper arrival airport");
    }

    /**
     * Makes sure the flights does not occur overnight by making sure the departure time is before the arrival time
     */
    function testFlightsReturnHome()
    {
        $invalid = 0;
        foreach ($this->flights->all() as $flight) {
            $departure = DateTime::createFromFormat("H:i", $flight->departureTime);
            $arrival = DateTime::createFromFormat("H:i", $flight->arrivalTime);
            if ($departure > $arrival) {
                $invalid++;
            }
        }
        $this->assertEquals(0, $invalid, "Improper arrival airport");
    }
}