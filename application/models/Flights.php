<?php

/**
 * Flights model represents flights between airports
 *
 * @author clint
 */
class Flights extends CI_Model
{
    //each airport visisted twice ***
    //no departures before 08:00
    //no landings after 22:00
    //minimum 30 minutes between a plane's landing and any subsequent departure
    //all of your fleet must be back at your airline base by the end of the day
    //flight times need to be reasonable, based on distance between airports, airplane cruising speed,
    //and a 10 minute buffer added to each flight in order to reach cruising/landing speed and altitude

    //base airport: YPK
    //target airports: YCW, ZMH, YYF

    var $data = array(
        //YPK => YCW
        '1'	 => array('id'	 => '1', 'departureTime' => '09:00', 'arrivalTime' => '09:40',
            'departureAirport' => 'YPK', 'arrivalAirport' => 'YCW', 'plane' => 'Caravan'),
        //YCW => ZMH
        '2'	 => array('id'	 => '2', 'departureTime' => '10:10', 'arrivalTime' => '12:40',
            'departureAirport' => 'YCW', 'arrivalAirport' => 'ZMH', 'plane' => 'Caravan'),
        //ZMH => YPK
        '3'	 => array('id'	 => '3', 'departureTime' => '13:30', 'arrivalTime' => '15:20',
            'departureAirport' => 'ZMH', 'arrivalAirport' => 'YPK', 'plane' => 'Caravan'),

        //YPK => YCW
        '4'	 => array('id'	 => '4', 'departureTime' => '15:50', 'arrivalTime' => '16:30',
            'departureAirport' => 'YPK', 'arrivalAirport' => 'YCW', 'plane' => 'Caravan'),
        //YCW => ZMH
        '5'	 => array('id'	 => '5', 'departureTime' => '17:00', 'arrivalTime' => '19:30',
            'departureAirport' => 'YCW', 'arrivalAirport' => 'ZMH', 'plane' => 'Caravan'),
        //ZMH => YPK
        '6'	 => array('id'	 => '6', 'departureTime' => '20:00', 'arrivalTime' => '21:50',
            'departureAirport' => 'ZMH', 'arrivalAirport' => 'YPK', 'plane' => 'Caravan'),



        //YPK => YYF
        '7'	 => array('id'	 => '7', 'departureTime' => '09:30', 'arrivalTime' => '10:50',
            'departureAirport' => 'YPK', 'arrivalAirport' => 'YYF', 'plane' => 'Citation'),
        //YYF => YPK
        '8'	 => array('id'	 => '8', 'departureTime' => '11:30', 'arrivalTime' => '12:50',
            'departureAirport' => 'YYF', 'arrivalAirport' => 'YPK', 'plane' => 'Citation'),
        //YPK => YYF
        '9'	 => array('id'	 => '9', 'departureTime' => '13:30', 'arrivalTime' => '14:50',
            'departureAirport' => 'YPK', 'arrivalAirport' => 'YYF', 'plane' => 'Citation'),
        //YYF => YPK
        '10'	 => array('id'	 => '10', 'departureTime' => '15:30', 'arrivalTime' => '16:50',
            'departureAirport' => 'YYF', 'arrivalAirport' => 'YPK', 'plane' => 'Citation'),
    );
    var $count;


    // Constructor
    public function __construct()
    {
        parent::__construct();

        // inject each "record" key into the record itself, for ease of presentation
        foreach ($this->data as $key => $record)
        {
            $record['key'] = $key;
            $this->data[$key] = $record;
        }
        $this->count = count($this->data);
    }

    /*
     * retrieve a single flight, null if not found
     */
    public function get($which)
    {
        return !isset($this->data[$which]) ? null : $this->data[$which];
    }

    /*
     * Retrieves all of the quotes
     */
    public function all()
    {
        return $this->data;
    }

}
