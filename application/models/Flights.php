<?php

/**
 * Flights model represents flights between airports
 *
 * @author clint
 */
class Flights extends CSV_Model
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

    var $count;


    // Constructor
    public function __construct()
    {
        parent::__construct(APPPATH . '../data/flights.csv', 'id');
        $this->count = count($this->all());
    }

}
