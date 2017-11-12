<?php
/**
 * Created by PhpStorm.
 * User: Matthew
 * Date: 2017-11-11
 * Time: 7:29 PM
 */
if (! class_exists('PHPUnit_Framework_TestCase')) {
    class_alias('PHPUnit\Framework\TestCase', 'PHPUnit_Framework_TestCase');
}

class FlightTest extends PHPUnit_Framework_TestCase
{
    private $flight;
    private $CI;

    public function setUp()
    {
        // Load CI instance normally
        $this->CI = &get_instance();
        $this->flight = new Flight();
    }

    public function testSetId()
    {
        $this->flight->Id = -1;
        $this->assertEquals(false, $this->flight->id, "Id can't be negative");

        $this->flight->Id = "garbage";
        $this->assertEquals(false, $this->flight->id, "Id must be a number");

        $this->flight->Id = 2;
        $this->assertEquals(2, $this->flight->id, "Valid entry not accepted");
    }

    public function testSetDepartureTime()
    {
        $this->flight->DepartureTime = "garbage";
        $this->assertEquals(false, $this->flight->departureTime, "Departure time must be HH:MM format");

        $this->flight->DepartureTime = "99:99";
        $this->assertEquals(false, $this->flight->departureTime, "Departure time must be a valid time");

        $this->flight->DepartureTime = "07:59";
        $this->assertEquals(false, $this->flight->departureTime, "Departure time must be 08:00 or later");

        $this->flight->DepartureTime = "08:00";
        $this->assertEquals("08:00", $this->flight->departureTime, "Valid entry not accepted");
    }

    public function testSetArrivalTime()
    {
        $this->flight->ArrivalTime = "garbage";
        $this->assertEquals(false, $this->flight->arrivalTime, "Arrival time must be HH:MM format");

        $this->flight->ArrivalTime = "99:99";
        $this->assertEquals(false, $this->flight->arrivalTime, "Arrival time must be a valid time");

        $this->flight->ArrivalTime = "22:01";
        $this->assertEquals(false, $this->flight->arrivalTime, "Arrival time must be 22:00 or earlier");

        $this->flight->ArrivalTime = "21:59";
        $this->assertEquals("21:59", $this->flight->arrivalTime, "Valid entry not accepted");
    }

    public function testSetDepartureAirport() {
        $this->flight->DepartureAirport = "";
        $this->assertEquals(false, $this->flight->departureAirport, "Airport can't be null");

        $this->flight->DepartureAirport = "YVR";
        $this->assertEquals(false, $this->flight->departureAirport, "Departure airport must be YPK, YCW, ZMG or YYF");

        $this->flight->DepartureAirport = "YPK";
        $this->assertEquals("YPK", $this->flight->departureAirport, "Valid entry not accepted");
    }

    public function testSetArrivalAirport() {
        $this->flight->ArrivalAirport = "";
        $this->assertEquals(false, $this->flight->arrivalAirport, "Airport can't be null");

        $this->flight->ArrivalAirport = "YVR";
        $this->assertEquals(false, $this->flight->arrivalAirport, "Arrival airport must be YPK, YCW, ZMG or YYF");

        $this->flight->ArrivalAirport = "YPK";
        $this->assertEquals("YPK", $this->flight->arrivalAirport, "Valid entry not accepted");
    }

    public function testSetPlane()
    {
        $this->flight->Plane = "";
        $this->assertEquals(false, $this->flight->plane, "Plane can't be empty");

        $this->flight->Plane = "*$(#&*$&# #&$(*#&$#(* N&$#(*";
        $this->assertEquals(false, $this->flight->plane, "Plane must be alphanumeric or spaces");

        $this->flight->Plane = "The Grandest Garbage Plane";
        $this->assertEquals("The Grandest Garbage Plane", $this->flight->plane, "Valid entry not accepted");
    }
}