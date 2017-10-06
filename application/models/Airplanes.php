<?php

/**
 * Airplane model represents a plane in our airlane
 *
 * @author clint
 */
class Airplanes extends CI_Model
{

    // The data comes from http://www.imdb.com/title/tt0094012/
    // expressed using long-form array notaiton in case students use PHP 5.x
    var $data = array(
        '1'	 => array('id'	 => '101', 'planeName' => 'Caravan','manufacturer'	 => 'Cessna',
            'model'	 => 'Grand Caravan EX', 'price' => '2300', 'seats' => '14', 'reach' => '1689',
            'cruise' => '340', 'takeoff' => '660', 'hourly' => '389'),
        '2'	 => array('id'	 => '121', 'planeName' => 'Citation', 'manufacturer'	 => 'Cessna',
            'model'	 => 'Citation M2', 'price' => '3200', 'seats' => '7', 'reach' => '1550',
            'cruise' => '748', 'takeoff' => '978', 'hourly' => '1122'),
    );

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
    }

    // retrieve a single quote, null if not found
    public function get($which)
    {
        foreach($this->data as $key => $value) {
            if($value['id'] == $which) {
                return $value;
            }
        }
        return null;
        //return !isset($this->data[0][]) ? null : $this->data[$which];
    }

    // retrieve all of the quotes
    public function all()
    {
        return $this->data;
    }

}
