<?php

if (! class_exists('PHPUnit_Framework_TestCase')) {
    class_alias('PHPUnit\Framework\TestCase', 'PHPUnit_Framework_TestCase');
}

class PlaneTest extends PHPUnit_Framework_TestCase
{
    private $plane;
    private $CI;

    public function setUp()
    {
        // Load CI instance normally
        $this->CI   = &get_instance();
        $this->plane = new Plane();
    }
    public function testSetId()
    {
        $this->plane->Id = -1;
        $this->assertEquals(false, $this->plane->id, "Id can't be negative");

        $this->plane->Id = "garbage";
        $this->assertEquals(false, $this->plane->id, "Id must be a number");

        $this->plane->Id = 2;
        $this->assertEquals(2, $this->plane->id, "Valid entry not accepted");
    }

    public function testSetPlaneName()
    {
        $this->plane->PlaneName = "";
        $this->assertEquals(false,
            $this->plane->planeName,
            "Plane name can't be empty");

        $this->plane->PlaneName = "#&$(*&#(* $*(#&*($";
        $this->assertEquals(false,
            $this->plane->planeName,
            "Plane name must be alphanumeric or spaces");

        $this->plane->PlaneName = "The Grandest Garbage Flight";
        $this->assertEquals("The Grandest Garbage Flight",
            $this->plane->planeName,
            "Valid entry not accepted");
    }

    public function testSetManufacturer()
    {
        $this->plane->Manufacturer = "";
        $this->assertEquals(false,
            $this->plane->manufacturer,
            "Manufacturer name can't be empty");

        $this->plane->Manufacturer = "$*&#(&(* $*#)@*()";
        $this->assertEquals(false,
            $this->plane->manufacturer,
            "Manufacturer name must be alphanumeric or spaces");

        $this->plane->Manufacturer = "The Grandest Garbage Manufacturer";
        $this->assertEquals("The Grandest Garbage Manufacturer",
            $this->plane->manufacturer,
            "Valid entry not accepted");
    }

    public function testSetModel()
    {
        $this->plane->Model = "";
        $this->assertEquals(false,
            $this->plane->model,
            "Plane name can't be empty");

        $this->plane->Model = "*$(#*($ #*$)(*#@)(";
        $this->assertEquals(false,
            $this->plane->model,
            "Model must be alphanumeric or spaces");

        $this->plane->Model = "The Grandest Garbage Model";
        $this->assertEquals("The Grandest Garbage Model",
            $this->plane->model,
            "Valid entry not accepted");
    }

    public function testSetPrice()
    {
        $this->plane->Price = -1000;
        $this->assertEquals(false, $this->plane->price, "Price can't be negative");

        $this->plane->Price = "garbage";
        $this->assertEquals(false, $this->plane->price, "Price must be numeric");

        $this->plane->Price = 1000;
        $this->assertEquals(1000, $this->plane->price, "Valid entry not accepted");
    }

    public function testSetSeats()
    {
        $this->plane->Seats = -1000;
        $this->assertEquals(false, $this->plane->seats, "Must have at least one seat");

        $this->plane->Seats = "garbage";
        $this->assertEquals(false, $this->plane->seats, "Seats must be numeric");

        $this->plane->Seats = 200;
        $this->assertEquals(200, $this->plane->seats, "Valid entry not accepted");
    }

    public function testSetReach()
    {
        $this->plane->Reach = 299;
        $this->assertEquals(false, $this->plane->reach, "Reach must be greater or equal to than 300");

        $this->plane->Reach = "garbage";
        $this->assertEquals(false, $this->plane->reach, "Reach must be numeric");

        $this->plane->Reach = 301;
        $this->assertEquals(301, $this->plane->reach, "Valid entry not accepted");
    }

    public function testSetTakeoff()
    {
        $this->plane->Takeoff = 299;
        $this->assertEquals(false, $this->plane->takeoff, "Takeoff must be greater or equal to than 300");

        $this->plane->Takeoff = "garbage";
        $this->assertEquals(false, $this->plane->takeoff, "Takeoff must be numeric");

        $this->plane->Takeoff = 301;
        $this->assertEquals(301, $this->plane->takeoff, "Valid entry not accepted");
    }

    public function testSetHourly()
    {
        $this->plane->Hourly = 299;
        $this->assertEquals(false, $this->plane->hourly, "Hourly must be greater or equal to than 300");

        $this->plane->Hourly = "garbage";
        $this->assertEquals(false, $this->plane->hourly, "Hourly must be numeric");

        $this->plane->Hourly = 301;
        $this->assertEquals(301, $this->plane->hourly, "Valid entry not accepted");
    }
}